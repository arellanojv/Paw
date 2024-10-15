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
}
