<?php
/**
 * AccessPress Pro Custom Post Types
 *
 * @package Accesspress Pro
 */
function accesspress_pro_create_carsoul() {
    $labels = array(
        'name'               => _x( 'Logos', 'post type general name' , 'accesspress_pro'),
        'singular_name'      => _x( 'Logo', 'post type singular name' , 'accesspress_pro'),
        'add_new'            => _x( 'Add New', 'Logo' , 'accesspress_pro'),
        'add_new_item'       => __( 'Add New Logo' , 'accesspress_pro'),
        'edit_item'          => __( 'Edit Logo' , 'accesspress_pro' ),
        'new_item'           => __( 'New Logo' , 'accesspress_pro' ),
        'all_items'          => __( 'All Logo' , 'accesspress_pro' ),
        'view_item'          => __( 'View Logo' , 'accesspress_pro' ),
        'search_items'       => __( 'Search Logo' , 'accesspress_pro' ),
        'not_found'          => __( 'No Logo found' , 'accesspress_pro' ),
        'not_found_in_trash' => __( 'No Logo found in the Trash' , 'accesspress_pro' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Clients Logo'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Logos and Logo specific data',
        'public'        => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'thumbnail' ),
        'has_archive'   => false,
        'menu_icon' => 'dashicons-images-alt2'
    );
    register_post_type( 'logo', $args );    
}

add_action( 'init', 'accesspress_pro_create_carsoul' );

function accesspress_pro_create_events() {
    $labels = array(
        'name'               => _x( 'Events', 'post type general name' , 'accesspress_pro' ),
        'singular_name'      => _x( 'Event', 'post type singular name' , 'accesspress_pro' ),
        'add_new'            => _x( 'Add New', 'Event' , 'accesspress_pro' ),
        'add_new_item'       => __( 'Add New Event' , 'accesspress_pro' ),
        'edit_item'          => __( 'Edit Event' , 'accesspress_pro' ),
        'new_item'           => __( 'New Event' , 'accesspress_pro' ),
        'all_items'          => __( 'All Event' , 'accesspress_pro' ),
        'view_item'          => __( 'View Event' , 'accesspress_pro' ),
        'search_items'       => __( 'Search Event' , 'accesspress_pro' ),
        'not_found'          => __( 'No Event found' , 'accesspress_pro' ),
        'not_found_in_trash' => __( 'No Event found in the Trash' , 'accesspress_pro' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Event'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Posts and Post specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail'),
        'has_archive'   => false,
        'menu_icon' => 'dashicons-calendar'
    );
    register_post_type( 'events', $args );    
}

add_action( 'init', 'accesspress_pro_create_events' );

function accesspress_pro_create_faqs() {
    $labels = array(
        'name'               => _x( 'FAQ', 'post type general name' , 'accesspress_pro' ),
        'singular_name'      => _x( 'FAQ', 'post type singular name' , 'accesspress_pro' ),
        'add_new'            => _x( 'Add New', 'FAQ' , 'accesspress_pro' ),
        'add_new_item'       => __( 'Add New FAQ' , 'accesspress_pro' ),
        'edit_item'          => __( 'Edit FAQ' , 'accesspress_pro' ),
        'new_item'           => __( 'New FAQ' , 'accesspress_pro' ),
        'all_items'          => __( 'All FAQ' , 'accesspress_pro' ),
        'view_item'          => __( 'View FAQ' , 'accesspress_pro' ),
        'search_items'       => __( 'Search FAQ' , 'accesspress_pro' ),
        'not_found'          => __( 'No FAQ found' , 'accesspress_pro' ),
        'not_found_in_trash' => __( 'No FAQ found in the Trash'  , 'accesspress_pro'),
        'parent_item_colon'  => '',
        'menu_name'          => 'FAQ'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our FAQs and FAQ specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor'),
        'has_archive'   => false,
        'menu_icon' => 'dashicons-megaphone'
    );
    register_post_type( 'faqs', $args );    
}

add_action( 'init', 'accesspress_pro_create_faqs' );

function accesspress_pro_create_portfolio() {
    $labels = array(
        'name'               => _x( 'Portfolios', 'post type general name' , 'accesspress_pro' ),
        'singular_name'      => _x( 'Portfolio', 'post type singular name' , 'accesspress_pro' ),
        'add_new'            => _x( 'Add New', 'Portfolio' , 'accesspress_pro' ),
        'add_new_item'       => __( 'Add New Portfolio' , 'accesspress_pro' ),
        'edit_item'          => __( 'Edit Portfolio' , 'accesspress_pro' ),
        'new_item'           => __( 'New Portfolio' , 'accesspress_pro' ),
        'all_items'          => __( 'All Portfolio' , 'accesspress_pro'),
        'view_item'          => __( 'View Portfolio' , 'accesspress_pro'),
        'search_items'       => __( 'Search Portfolio' , 'accesspress_pro'),
        'not_found'          => __( 'No Portfolio found' , 'accesspress_pro'),
        'not_found_in_trash' => __( 'No Portfolio found in the Trash' , 'accesspress_pro'),
        'parent_item_colon'  => '',
        'menu_name'          => 'Portfolio'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Testimonials and Portfolio specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail'),
        'has_archive'   => false,
        'menu_icon' => 'dashicons-portfolio',
    );
    register_post_type( 'portfolio', $args );    
}

add_action( 'init', 'accesspress_pro_create_portfolio' );

function create_portfolio_category() {
    $labels = array(
        'name'              => _x( 'Portfolio Categories', 'taxonomy general name', 'accesspress_pro' ),
        'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name', 'accesspress_pro' ),
        'search_items'      => __( 'Search Portfolio Categories', 'accesspress_pro' ),
        'all_items'         => __( 'All Portfolio Categories', 'accesspress_pro' ),
        'parent_item'       => __( 'Parent Portfolio Category', 'accesspress_pro' ),
        'parent_item_colon' => __( 'Parent Portfolio Category:', 'accesspress_pro' ),
        'edit_item'         => __( 'Edit Portfolio Category', 'accesspress_pro' ),
        'update_item'       => __( 'Update Portfolio Category', 'accesspress_pro' ),
        'add_new_item'      => __( 'Add New Portfolio Category', 'accesspress_pro' ),
        'new_item_name'     => __( 'New Portfolio Category', 'accesspress_pro' ),
        'menu_name'         => __( 'Portfolio Categories', 'accesspress_pro' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );
    register_taxonomy( 'portfolio-category', 'portfolio', $args );
}
add_action( 'init', 'create_portfolio_category', 0 );

