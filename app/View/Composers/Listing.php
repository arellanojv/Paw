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
    $coordinates = get_field('coordinates'); // Get coordinates as a string
    $address = get_field('address'); // Get the address
    $current_location = get_queried_object(); // Get the current taxonomy object
    $zoom = 14;

    // Initialize variables for map data
    $mapCenter = null;
    $content = '';

    if ($coordinates) {
      // Split the coordinates into latitude and longitude
      list($lat, $lng) = explode(',', $coordinates);
      $lat = floatval(trim($lat));
      $lng = floatval(trim($lng));
      $mapCenter = "new google.maps.LatLng($lat, $lng)";
      $content = "<strong>Coordinates: {$lat}, {$lng}</strong>";
    } elseif ($address) {
      // Use address if coordinates are not available
      $mapCenter = '"' . esc_js($address) . '"'; // Placeholder for geocoding
    } elseif ($current_location && !empty($current_location->name)) {
      // Use taxonomy name if neither coordinates nor address are available
      $mapCenter = '"' . esc_js($current_location->name) . '"'; // Placeholder for geocoding=
    }

    // Only generate the output if there is something to display
    if ($mapCenter) {
      $output = '
            <div id="map" style="width:100%; height:365px;"></div>
            <script>
                function initMap() {
                    const mapOptions = {
                        zoom: ' . $zoom . ',
                        center: ' . ($coordinates ? $mapCenter : 'null') . ',
                        mapTypeControl: false
                    };
                    const map = new google.maps.Map(document.getElementById("map"), mapOptions);

                    const geocoder = new google.maps.Geocoder();

                    // Check if mapCenter is an address (string) or coordinates (LatLng object)
                    if (' . ($coordinates ? 'true' : 'false') . ') {
                        const marker = new google.maps.Marker({
                            position: ' . $mapCenter . ',
                            map: map
                        });

                        // const infoWindow = new google.maps.InfoWindow({
                        //     content: "' . esc_js($content) . '"
                        // });

                        // marker.addListener("click", function() {
                        //     infoWindow.open(map, marker);
                        // });
                    } else {
                        geocoder.geocode({ "address": ' . $mapCenter . ' }, function(results, status) {
                            if (status === "OK") {
                                map.setCenter(results[0].geometry.location);

                                const marker = new google.maps.Marker({
                                    position: results[0].geometry.location,
                                    map: map
                                });

                            } else {
                                console.error("Geocode failed: " + status);
                            }
                        });
                    }
                }
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh37kl3U05PiUqYoUmJcGeUG9KBgWaoAY&callback=initMap"></script>';

      return $output;
    }

    return null; // Return null if no coordinates, address, or taxonomy name is available
  }


  public function generateGoogleStaticMapUrl()
  {
    $coordinates = get_field('coordinates'); // Get the coordinates as a string
    $apiKey = 'AIzaSyCh37kl3U05PiUqYoUmJcGeUG9KBgWaoAY';
    $zoom = 15;
    $size = '400x430';
    $markerColor = '0x0a1d38';
    $address = get_field('address');

    // Check if coordinates are available
    if ($coordinates) {
      // Split the coordinates into latitude and longitude
      list($lat, $long) = explode(',', $coordinates);
      return "https://maps.googleapis.com/maps/api/staticmap?center={$lat},{$long}&zoom={$zoom}&size={$size}&maptype=roadmap&markers=color:{$markerColor}|label:|{$lat},{$long}&key={$apiKey}";
    }

    // If address is available, use it
    if ($address) {
      return "https://maps.googleapis.com/maps/api/staticmap?center=" . urlencode($address) .
        "&zoom={$zoom}&size={$size}&maptype=roadmap&markers=color:{$markerColor}|label:|{$address}&key={$apiKey}";
    }

    // Fallback to current taxonomy name
    $current_location = get_queried_object();
    if ($current_location && !empty($current_location->name)) {
      return "https://maps.googleapis.com/maps/api/staticmap?center=" . urlencode($current_location->name) .
        "&zoom={$zoom}&size={$size}&maptype=roadmap&markers=color:{$markerColor}|label:|{$current_location->name}&key={$apiKey}";
    }

    return null; // No coordinates, address, or taxonomy name available
  }
}
