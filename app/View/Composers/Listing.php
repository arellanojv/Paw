<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Listing extends Composer
{
  /**
   * List of views served by this composer.
   *
   * @var array
   */
  protected static $views = [
    'single-listing',             // This will apply to the single listing post type view
    'partials.content-listing',   // If you want to load specific partials for listing content
  ];

  /**
   * Data to be passed to view before rendering.
   *
   * @return array
   */
  public function override()
  {
    return [
      'title'          => $this->title(),
      'listingFields'  => $this->listingFields(),   // Custom fields from ACF
      'googleMapEmbed' => $this->generateGoogleMapEmbed(), // Google Map embed
    ];
  }

  /**
   * Retrieve the post title.
   *
   * @return string
   */
  public function title()
  {
    return get_the_title();
  }

  /**
   * Retrieve custom fields for the listing.
   *
   * @return array
   */
  public function listingFields()
  {
    return [
      'address'      => get_field('address'),
      'phone_number' => get_field('phone_number'),
      'website'      => get_field('website'),
      'map_embed'    => get_field('map_embed'),
      'longitude'    => get_field('longitude'),
      'latitude'    => get_field('latitude'),
      'coordinates'    => get_field('coordinates'),
      'map_embed'    => get_field('map_embed'),
      'affiliations' => have_rows('affiliations') ? $this->getAffiliations() : null,
    ];
  }

  /**
   * Fetch affiliations from ACF repeater field.
   *
   * @return array
   */
  private function getAffiliations()
  {
    $affiliations = [];
    while (have_rows('affiliations')) {
      the_row();
      $affiliations[] = get_sub_field('name');  // Assuming 'name' is the sub field
    }
    return $affiliations;
  }

  /**
   * Generate Google Map Embed code based on coordinates and display the address.
   *
   * @return string|null
   */
  private function generateGoogleMapEmbed()
  {
    $coordinates = get_field('coordinates'); // Get the coordinates from ACF (e.g., "lat,lng")
    $address = get_field('address'); // Get the address from ACF
    $zoom = 14; // Set the zoom level

    if ($coordinates && $address) {
      // Create the embed URL using both coordinates and address
      $embed_url = 'https://maps.google.com/maps?q=' . urlencode($address) . '&z=' . $zoom . '&ll=' . $coordinates . '&markers=' . $coordinates . '&ie=UTF8&iwloc=&output=embed';

      // Generate the iframe output
      $output = '<iframe loading="lazy" width="100%" height="365" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="' . esc_url($embed_url) . '" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>';

      return $output;
    }

    return null; // Return null if there are no coordinates or address
  }
}
