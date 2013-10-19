<?php

/*
 * Implementation of custom content types for gpc

 */

####################################################################
#
# Declare custom taxonomy for 'People' (to be applied -mostly- to Image posts)
#
####################################################################

add_action( 'init', 'register_taxonomy_batbelt_people' );

function register_taxonomy_batbelt_people() {

    $labels = array( 
        'name' => _x( 'People', 'batbelt_people' ),
        'singular_name' => _x( 'Person', 'batbelt_people' ),
        'search_items' => _x( 'Search People', 'batbelt_people' ),
        'popular_items' => _x( 'Popular People', 'batbelt_people' ),
        'all_items' => _x( 'All People', 'batbelt_people' ),
        'edit_item' => _x( 'Edit Person', 'batbelt_people' ),
        'update_item' => _x( 'Update Person', 'batbelt_people' ),
        'add_new_item' => _x( 'Add New Person', 'batbelt_people' ),
        'new_item_name' => _x( 'New Person', 'batbelt_people' ),
        'separate_items_with_commas' => _x( 'Separate people with commas', 'batbelt_people' ),
        'add_or_remove_items' => _x( 'Add or remove People', 'batbelt_people' ),
        'choose_from_most_used' => _x( 'Choose from most used People', 'batbelt_people' ),
        'menu_name' => _x( 'People', 'batbelt_people' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => false,
        'hierarchical' => false,
        'rewrite' => array( 
            'slug' => 'person', 
            'hierarchical' => false
        ),
        'query_var' => true
    );

    register_taxonomy( 'batbelt_people', array('post'), $args );
}


####################################################################
#
# Declare custom taxonomy for 'Locations'
# (to be applied to Image posts, events, projects)
#
####################################################################

add_action( 'init', 'register_taxonomy_batbelt_locations' );

function register_taxonomy_batbelt_locations() {

    $labels = array( 
        'name' => _x( 'Locations', 'batbelt_locations' ),
        'singular_name' => _x( 'Location', 'batbelt_locations' ),
        'search_items' => _x( 'Search Locations', 'batbelt_locations' ),
        'popular_items' => _x( 'Popular Locations', 'batbelt_locations' ),
        'all_items' => _x( 'All Locations', 'batbelt_locations' ),
        'parent_item' => _x( 'Parent Location', 'batbelt_locations' ),
        'parent_item_colon' => _x( 'Parent Location:', 'batbelt_locations' ),
        'edit_item' => _x( 'Edit Location', 'batbelt_locations' ),
        'update_item' => _x( 'Update Location', 'batbelt_locations' ),
        'add_new_item' => _x( 'Add New Location', 'batbelt_locations' ),
        'new_item_name' => _x( 'New Location', 'batbelt_locations' ),
        'separate_items_with_commas' => _x( 'Separate Locations with commas', 'batbelt_locations' ),
        'add_or_remove_items' => _x( 'Add or remove locations', 'batbelt_locations' ),
        'choose_from_most_used' => _x( 'Choose from the most used locations', 'batbelt_locations' ),
        'menu_name' => _x( 'Locations', 'batbelt_locations' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => false,
        'hierarchical' => true,

        'rewrite' => array( 
            'slug' => 'location', 
            'hierarchical' => true
        ),
        'query_var' => true
    );

    register_taxonomy( 'batbelt_locations', array('post'), $args );
}


####################################################################
#
# Declare custom taxonomy for 'Roles'
# (to be applied to events, projects)
#
####################################################################

add_action( 'init', 'register_taxonomy_batbelt_roles' );

function register_taxonomy_batbelt_roles() {

    $labels = array( 
        'name' => _x( 'Roles', 'batbelt_roles' ),
        'singular_name' => _x( 'Role', 'batbelt_roles' ),
        'search_items' => _x( 'Search Roles', 'batbelt_roles' ),
        'popular_items' => _x( 'Popular Roles', 'batbelt_roles' ),
        'all_items' => _x( 'All Roles', 'batbelt_roles' ),
        'edit_item' => _x( 'Edit Role', 'batbelt_roles' ),
        'update_item' => _x( 'Update Role', 'batbelt_roles' ),
        'add_new_item' => _x( 'Add New Role', 'batbelt_roles' ),
        'new_item_name' => _x( 'New Role', 'batbelt_roles' ),
        'separate_items_with_commas' => _x( 'Separate roles with commas', 'batbelt_roles' ),
        'add_or_remove_items' => _x( 'Add or remove Roles', 'batbelt_roles' ),
        'choose_from_most_used' => _x( 'Choose from most used Roles', 'batbelt_roles' ),
        'menu_name' => _x( 'Roles', 'batbelt_roles' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => false,
        'hierarchical' => false,

        'rewrite' => array( 
            'slug' => 'role', 
            'hierarchical' => false
        ),
        'query_var' => true
    );

    register_taxonomy( 'batbelt_roles', array('batbelt_project'), $args );
}

?>
