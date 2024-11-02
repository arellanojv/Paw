<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Listing extends Composer
{
  protected static $views = [
    'single-listing',
    'partials.content-listing',
    'taxonomy-location',
  ];

  public function override()
  {
    return [
      'title'              => $this->title(),
      'listingFields'      => $this->listingFields(),
      'googleMapEmbed'     => $this->generateGoogleMapEmbed(),
      'googleStaticMapUrl' => $this->generateGoogleStaticMapUrl(), // Static map URL
    ];
  }

  public function title()
  {
    return get_the_title();
  }

  public function listingFields()
  {
    return [
      'address'      => get_field('address'),
      'phone_number' => get_field('phone_number'),
      'website'      => get_field('website'),
      'coordinates'  => get_field('coordinates'),
      'map_embed'    => get_field('map_embed'),
      'affiliations' => have_rows('affiliations') ? $this->getAffiliations() : null,
    ];
  }

  private function getAffiliations()
  {
    $affiliations = [];
    while (have_rows('affiliations')) {
      the_row();
      $affiliations[] = get_sub_field('name');
    }
    return $affiliations;
  }

  private function generateGoogleMapEmbed()
  {
    $address = get_field('address');
    $zoom = 14;

    if ($address) {
      $output = '
        <div id="map" style="width:100%; height:365px;"></div>
        <script>
            function initMap() {
                const geocoder = new google.maps.Geocoder();
                geocoder.geocode({ "address": "' . esc_js($address) . '" }, function(results, status) {
                    if (status === "OK") {
                        const map = new google.maps.Map(document.getElementById("map"), {
                            zoom: ' . $zoom . ',
                            center: results[0].geometry.location,
                            mapTypeControl: false
                        });

                        const marker = new google.maps.Marker({
                            position: results[0].geometry.location,
                            map: map
                        });

                        const infoWindow = new google.maps.InfoWindow({
                            content: "<strong>' . esc_html($address) . '</strong>"
                        });

                        marker.addListener("click", function() {
                            infoWindow.open(map, marker);
                        });
                    } else {
                        console.error("Geocode failed: " + status);
                    }
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap"></script>';

      return $output;
    }

    return null;
  }

  public function generateGoogleStaticMapUrl()
  {
    $address = get_field('address');
    $apiKey = 'YOUR_GOOGLE_MAPS_API_KEY';
    $zoom = 15;
    $size = '400x300';
    $markerColor = '0x0a1d38';

    if ($address) {
      return "https://maps.googleapis.com/maps/api/staticmap?center=" . urlencode($address) .
        "&zoom={$zoom}&size={$size}&maptype=roadmap&markers=color:{$markerColor}|label:|{$address}&key={$apiKey}";
    }

    return null;
  }
}
