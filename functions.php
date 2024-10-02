<?php

function paw_post_types()
{
    $labels = array(
        'name'                  => 'Vet Clinics',
        'singular_name'         => 'Vet Clinic',
        'menu_name'             => 'Vet Clinics',
        'name_admin_bar'        => 'Vet Clinic', // Appears in the admin toolbar
        'add_new'               => 'Add New Vet Clinic',
        'add_new_item'          => 'Add New Vet Clinic',
        'new_item'              => 'New Vet Clinic',
        'edit_item'             => 'Edit Vet Clinic',
        'view_item'             => 'View Vet Clinic',
        'all_items'             => 'All Vet Clinics',
        'search_items'          => 'Search Vet Clinics',
        'not_found'             => 'No Vet Clinics found',
        'not_found_in_trash'    => 'No Vet Clinics found in Trash',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'show_in_rest'       => true, // For Gutenberg editor
        'supports'           => array('title', 'editor', 'thumbnail'),
        'rewrite'            => array('slug' => 'vet-clinic'),
        'menu_icon'          => 'dashicons-pets',
    );

    register_post_type('vet_clinic', $args);


    $listingLabels = array(
        'name'                  => 'Listings',
        'singular_name'         => 'Listing',
        'menu_name'             => 'Listings',
        'name_admin_bar'        => 'Listing',
        'add_new'               => 'Add New Listing',
        'add_new_item'          => 'Add New Listing',
        'new_item'              => 'New Listing',
        'edit_item'             => 'Edit Listing',
        'view_item'             => 'View Listing',
        'all_items'             => 'All Listings',
        'search_items'          => 'Search Listings',
        'not_found'             => 'No Listings found',
        'not_found_in_trash'    => 'No Listings found in Trash',
    );

    $listingArgs = array(
        'labels'                => $listingLabels,
        'public'                => true,
        'has_archive'           => true,
        'show_in_rest'          => true, // For Gutenberg editor
        'supports'              => array('title', 'editor', 'thumbnail'),
        'rewrite'               => array('slug' => 'listing'),
        'menu_icon'             => 'dashicons-admin-home', // Choose an icon that fits
    );


    $Locationlabels = array(
        'name'                       => 'Locations',
        'singular_name'              => 'Location',
        'search_items'               => 'Search Locations',
        'all_items'                  => 'All Locations',
        'parent_item'                => 'Parent Location',
        'parent_item_colon'          => 'Parent Location:',
        'edit_item'                  => 'Edit Location',
        'update_item'                => 'Update Location',
        'add_new_item'               => 'Add New Location',
        'new_item_name'              => 'New Location Name',
        'menu_name'                  => 'Locations',
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true, // This makes it hierarchical, like categories
        'public'            => true,
        'show_in_rest'      => true, // For Gutenberg editor
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'location'),
    );

    register_taxonomy('location', array('listing'), $args);

    register_post_type('listing', $listingArgs);
}

add_action('init', 'paw_post_types');




/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (! function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });
