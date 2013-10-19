<?php

/*
 * Implementation of custom content types and taxonomies for gpc
 * 
 */

####################################################################
#
# Declare 'Project' custom content type
#
####################################################################

add_action( 'init', 'register_cpt_gpc_project' );

function register_cpt_gpc_project() {

    $labels = array( 
        'name' => _x( 'Projects', 'gpc_project' ),
        'singular_name' => _x( 'Project', 'gpc_project' ),
        'add_new' => _x( 'Add New', 'gpc_project' ),
        'add_new_item' => _x( 'Add New Project', 'gpc_project' ),
        'edit_item' => _x( 'Edit Project', 'gpc_project' ),
        'new_item' => _x( 'New Project', 'gpc_project' ),
        'view_item' => _x( 'View Project', 'gpc_project' ),
        'search_items' => _x( 'Search Projects', 'gpc_project' ),
        'not_found' => _x( 'No projects found', 'gpc_project' ),
        'not_found_in_trash' => _x( 'No projects found in Trash', 'gpc_project' ),
        'parent_item_colon' => _x( 'Parent Project:', 'gpc_project' ),
        'menu_name' => _x( 'Projects', 'gpc_project' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Pages for projects and accomplishments',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions', 'page-attributes' ),
        'taxonomies' => array( 'category', 'post_tag', 'role', 'location', 'start_date', 'end_date' ),
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
        'rewrite' => array( 'slug' => 'projects' ),
        'capability_type' => 'post'
    );

    register_post_type( 'gpc_project', $args );
}

####################################################################
#
# Declare 'Event' custom content type
#
####################################################################

add_action( 'init', 'register_cpt_gpc_event' );

function register_cpt_gpc_event() {

    $labels = array( 
        'name' => _x( 'Events', 'gpc_event' ),
        'singular_name' => _x( 'Event', 'gpc_event' ),
        'add_new' => _x( 'Add New', 'gpc_event' ),
        'add_new_item' => _x( 'Add New Event', 'gpc_event' ),
        'edit_item' => _x( 'Edit Event', 'gpc_event' ),
        'new_item' => _x( 'New Event', 'gpc_event' ),
        'view_item' => _x( 'View Event', 'gpc_event' ),
        'search_items' => _x( 'Search Events', 'gpc_event' ),
        'not_found' => _x( 'No events found', 'gpc_event' ),
        'not_found_in_trash' => _x( 'No events found in Trash', 'gpc_event' ),
        'parent_item_colon' => _x( 'Parent Event:', 'gpc_event' ),
        'menu_name' => _x( 'Events', 'gpc_event' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Events',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions' ),
        'taxonomies' => array( 'category', 'post_tag', 'role', 'location', 'start_date', 'end_date' ),
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

    register_post_type( 'gpc_event', $args );
}

?>
