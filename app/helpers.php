<?php
// helpers.php or in a custom helper class

function get_breadcrumb_items()
{
  $items = [];

  // Add Home link
  $items[] = [
    'label' => 'Home',
    'url'   => home_url('/'),
  ];

  // Check if it's a category or single post
  if (is_category() || is_single()) {
    $category = get_the_category();
    if (!empty($category)) {
      // Get first category (modify if needed for multiple categories)
      $items[] = [
        'label' => $category[0]->name,
        'url'   => get_category_link($category[0]->term_id),
      ];
    }
  }

  // If it's a single post or page, add the title
  if (is_single() || is_page()) {
    $items[] = [
      'label' => get_the_title(),
      'url'   => '',
    ];
  }

  // Add archive or other custom logic
  if (is_archive()) {
    // Check if it's a custom post type archive for "listing"
    if (is_post_type_archive('listing')) {
      $items[] = [
        'label' => 'Listings Archive', // Label for Listings archive page
        'url'   => get_post_type_archive_link('listing'),
      ];
    }
    // Check if it's a taxonomy archive for "location"
    elseif (is_tax('location')) {
      $location_term = get_queried_object(); // Get the current location term

      $items[] = [
        'label' => 'Veterinary Clinics', // Label for Listings archive page
        'url'   => '/clinic',
      ];

      $items[] = [
        'label' => $location_term->name, // Set the label to the name of the current location term
        'url'   => get_term_link($location_term),
      ];
    } else {
      $items[] = [
        'label' => post_type_archive_title('', false),
        'url'   => '',
      ];
    }
  }

  return $items;
}
