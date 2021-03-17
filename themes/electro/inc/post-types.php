<?php

/** 
 * Registering Custom Post Types
*/

function electro_init() {
    $labels = array(
        'name'                  => _x( 'Computers and Laptops', 'Post type general name', 'computer_and_laptop' ),
        'singular_name'         => _x( 'Computers and Laptop', 'Post type singular name', 'computer_and_laptop' ),
        'menu_name'             => _x( 'Computers and Laptops', 'Admin Menu text', 'computer_and_laptop' ),
        'name_admin_bar'        => _x( 'Computers and Laptop', 'Add New on Toolbar', 'computer_and_laptop' ),
        'add_new'               => __( 'Add New', 'Computers and Laptop' ),
        'add_new_item'          => __( 'Add New Computers and Laptop', 'computer_and_laptop' ),
        'new_item'              => __( 'New Computers and Laptop', 'computer_and_laptop' ),
        'edit_item'             => __( 'Edit Computers and Laptop', 'computer_and_laptop' ),
        'view_item'             => __( 'View Computers and Laptop', 'computer_and_laptop' ),
        'all_items'             => __( 'All Computers and Laptops', 'computer_and_laptop' ),
        'search_items'          => __( 'Search Computers and Laptops', 'computer_and_laptop' ),
        'parent_item_colon'     => __( 'Parent Computers and Laptops:', 'computer_and_laptop' ),
        'not_found'             => __( 'No Computers and Laptops found.', 'computer_and_laptop' ),
        'not_found_in_trash'    => __( 'No Computers and Laptops found in Trash.', 'computer_and_laptop' ),
        'featured_image'        => _x( 'Computers and Laptop Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'computer_and_laptop' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'computer_and_laptop' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'computer_and_laptop' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'computer_and_laptop' ),
        'archives'              => _x( 'Computers and Laptop archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'computer_and_laptop' ),
        'insert_into_item'      => _x( 'Insert into Computers and Laptop', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'computer_and_laptop' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Computers and Laptop', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'computer_and_laptop' ),
        'filter_items_list'     => _x( 'Filter Computers and Laptops list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'computer_and_laptop' ),
        'items_list_navigation' => _x( 'Computers and Laptops list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'computer_and_laptop' ),
        'items_list'            => _x( 'Computers and Laptops list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'computer_and_laptop' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'computer and laptop custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'computer and laptop' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
    register_post_type( 'computer_and_laptop', $args );
}
add_action( 'init', 'electro_init' );
?>