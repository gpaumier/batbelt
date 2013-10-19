<?php

/*
 * Implementation of custom content types for gpc

 */

####################################################################
#
# Declare 'Project' custom content type
#
####################################################################

add_action( 'init', 'register_cpt_batbelt_project' );

function register_cpt_batbelt_project() {

    $labels = array( 
        'name' => _x( 'Projects', 'batbelt_project' ),
        'singular_name' => _x( 'Project', 'batbelt_project' ),
        'add_new' => _x( 'Add New', 'batbelt_project' ),
        'add_new_item' => _x( 'Add New Project', 'batbelt_project' ),
        'edit_item' => _x( 'Edit Project', 'batbelt_project' ),
        'new_item' => _x( 'New Project', 'batbelt_project' ),
        'view_item' => _x( 'View Project', 'batbelt_project' ),
        'search_items' => _x( 'Search Projects', 'batbelt_project' ),
        'not_found' => _x( 'No projects found', 'batbelt_project' ),
        'not_found_in_trash' => _x( 'No projects found in Trash', 'batbelt_project' ),
        'parent_item_colon' => _x( 'Parent Project:', 'batbelt_project' ),
        'menu_name' => _x( 'Projects', 'batbelt_project' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Pages for projects and accomplishments',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions', 'page-attributes' ),
        'taxonomies' => array( 'category', 'post_tag', 'batbelt_roles', 'batbelt_locations' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 'slug' => 'project' ),
        'capability_type' => 'post'
    );

    register_post_type( 'batbelt_project', $args );
}

####################################################################
#
# Declare 'Event' custom content type
#
####################################################################

add_action( 'init', 'register_cpt_batbelt_event' );

function register_cpt_batbelt_event() {

    $labels = array( 
        'name' => _x( 'Events', 'batbelt_event' ),
        'singular_name' => _x( 'Event', 'batbelt_event' ),
        'add_new' => _x( 'Add New', 'batbelt_event' ),
        'add_new_item' => _x( 'Add New Event', 'batbelt_event' ),
        'edit_item' => _x( 'Edit Event', 'batbelt_event' ),
        'new_item' => _x( 'New Event', 'batbelt_event' ),
        'view_item' => _x( 'View Event', 'batbelt_event' ),
        'search_items' => _x( 'Search Events', 'batbelt_event' ),
        'not_found' => _x( 'No events found', 'batbelt_event' ),
        'not_found_in_trash' => _x( 'No events found in Trash', 'batbelt_event' ),
        'parent_item_colon' => _x( 'Parent Event:', 'batbelt_event' ),
        'menu_name' => _x( 'Events', 'batbelt_event' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Events',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions' ),
        'taxonomies' => array( 'category', 'post_tag', 'batbelt_roles', 'batbelt_locations' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 'slug' => 'calendar' ),
        'capability_type' => 'post'
    );

    register_post_type( 'batbelt_event', $args );
}

?>