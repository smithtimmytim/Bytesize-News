<?php

// jQuery Insert From Google
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

// Media Element Js
wp_register_script( 'mediaelement-js', get_template_directory_uri() . '/assets/js/mediaelement-and-player.min.js');
wp_enqueue_script( 'mediaelement-js', 'true', 'true', 'true', 'true');

//Time Jump
wp_register_script( 'time-jump', get_template_directory_uri() . '/assets/js/timeJump.js');
wp_enqueue_script( 'time-jump', 'true', 'true', 'true', 'true' );

//Stuff
wp_register_script( 'global-stuff', get_template_directory_uri() . '/assets/js/stuff-ck.js');
wp_enqueue_script( 'global-stuff', 'true', 'true', 'true', 'true' );


// Episodes Post Type
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

// Adding Markdown support to case studies
add_action( 'init', 'ts_add_markdown_support' );
function ts_add_markdown_support(){
    add_post_type_support( 'episodes', 'markdown-osi' );
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


// Adding 'Episodes' Post Type to Main Loop

add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {

    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'episodes' ) );

    return $query;
}

// Adding Episode Number to Title

function bytesize_titlerss ($content) {
  global $wp_query;
  $episodeNumber = get_field('episode_number');
  if(is_feed()) {
    $content = "Bytesize #".$episodeNumber.": ".$content;
  }
  return $content;
}
add_filter('the_title_rss', 'bytesize_titlerss');

/**
 *  Install Add-ons
 *  
 *  The following code will include all 4 premium Add-Ons in your theme.
 *  Please do not attempt to include a file which does not exist. This will produce an error.
 *  
 *  All fields must be included during the 'acf/register_fields' action.
 *  Other types of Add-ons (like the options page) can be included outside of this action.
 *  
 *  The following code assumes you have a folder 'add-ons' inside your theme.
 *
 *  IMPORTANT
 *  Add-ons may be included in a premium theme as outlined in the terms and conditions.
 *  However, they are NOT to be included in a premium / free plugin.
 *  For more information, please read http://www.advancedcustomfields.com/terms-conditions/
 */ 

// Fields 
add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
    //include_once('add-ons/acf-repeater/repeater.php');
    //include_once('add-ons/acf-gallery/gallery.php');
    //include_once('add-ons/acf-flexible-content/flexible-content.php');
}

// Options Page 
//include_once( 'add-ons/acf-options-page/acf-options-page.php' );


/**
 *  Register Field Groups
 *
 *  The register_field_group function accepts 1 array which holds the relevant data to register a field group
 *  You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 */

if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_episode-stuff',
        'title' => 'Episode Stuff',
        'fields' => array (
            array (
                'key' => 'field_51e9f7a0905b9',
                'label' => 'Episode Number',
                'name' => 'episode_number',
                'type' => 'number',
                'default_value' => '',
                'min' => 1,
                'max' => '',
                'step' => '',
            ),
            array (
                'key' => 'field_51ea2c8f059b4',
                'label' => 'Episode Length',
                'name' => 'episode_length',
                'type' => 'number',
                'required' => 1,
                'default_value' => '',
                'min' => 1,
                'max' => 60,
                'step' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'episodes',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
                0 => 'custom_fields',
                1 => 'discussion',
                2 => 'comments',
                3 => 'revisions',
                4 => 'slug',
                5 => 'author',
                6 => 'format',
                7 => 'featured_image',
                8 => 'tags',
                9 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));
}
