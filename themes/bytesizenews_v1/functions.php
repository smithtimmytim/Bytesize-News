<?php

// Media Element Js
wp_register_script( 'mediaelement-js', get_template_directory_uri() . '/assets/js/mediaelement-and-player.min.js');
wp_enqueue_script( 'mediaelement-js', 'true', 'true', 'true', 'true');

//Time Jump
wp_register_script( 'time-jump', get_template_directory_uri() . '/assets/js/timeJump.js');
wp_enqueue_script( 'time-jump', 'true', 'true', 'true', 'true' );

// Off Air Post Type
add_action( 'init', 'create_post_type');
function create_post_type() {
  register_post_type( 'episodes',
    array(
      'labels' => array(
        'name' => 'Episodes',
        'singular_name' => 'Episode',
        'menu_name' => 'Episodes',
        'add_new' => 'Add Episode',
        'add_new_item' => 'Add New Episode',
        'edit' => 'Edit',
        'edit_item' => 'Edit Episode',
        'new_item' => 'New Episode',
        'view' => 'View Episode',
        'view_item' => 'View Episode',
        'search_items' => 'Search Episodes',
        'not_found' => 'No Episodes Found',
        'not_found_in_trash' => 'No Episodes Found in Trash',
        'parent' => 'Parent Episode',
      ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 5,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'ep', 'with_front' => '' ),
    'query_var' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'supports' => array( 'title','editor','excerpt','custom-fields','thumbnail', 'revisions' ),
    'taxonomies' => array( 'category' ),
    )
  );
}

// Messing with WP Admin Bar


function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    // we can remove a menu item, like the Comments link, just by knowing the right $id
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('wpseo-menu');
    // or we can remove a submenu, like New Link.
    $wp_admin_bar->remove_menu('new-link', 'new-content');
    $wp_admin_bar->remove_menu('new-media', 'new-content');
    $wp_admin_bar->remove_menu('new-user', 'new-content');
}
// and we hook our function via
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );