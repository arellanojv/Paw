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


  // Check if it's a single post or page
  if (is_single() || is_page()) {


    if (get_post_type() === 'listing') {

      $location_term = get_assigned_location_term(get_the_ID(), 'location');
      if ($location_term) {
        // Add the location term to your breadcrumb items or display it
        $items[] = [
          'label' => $location_term['label'],
          'url'   => $location_term['url'],
        ];
      }
    }



    // Add the single post title
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


function get_parent_taxonomy_term($post_id, $taxonomy)
{
  // Get the terms of the current post for the specified taxonomy
  $terms = get_the_terms($post_id, $taxonomy);

  // Check if terms exist and there is at least one
  if (!empty($terms) && !is_wp_error($terms)) {
    // Assuming you want to get the first term (if multiple terms are assigned)
    $term = $terms[0];

    // Check if the term has a parent
    if ($term->parent) {
      // Get the parent term
      $parent_term = get_term($term->parent, $taxonomy);

      // Return the parent term's name and URL
      return [
        'label' => $parent_term->name,
        'url'   => get_term_link($parent_term),
      ];
    }
  }

  return null; // No parent term found
}

function get_assigned_location_term($post_id, $taxonomy)
{
  // Get the terms of the current post for the specified taxonomy
  $terms = get_the_terms($post_id, $taxonomy);

  // Check if terms exist and there is at least one
  if (!empty($terms) && !is_wp_error($terms)) {
    // Return the first term's name and URL (you can modify this if you expect multiple terms)
    $term = $terms[0];
    return [
      'label' => $term->name,
      'url'   => get_term_link($term),
    ];
  }

  return null; // No terms found
}
