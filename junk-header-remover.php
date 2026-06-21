<?php
/*
Plugin Name: Junk Header Remover for WordPress
Plugin URI: https://avocadoweb.net
Description: Removes unnecessary clutter from the WP Header.
Version: 1.0.2
Author: Joseph Brzezowski / AvocadoWeb Services LLC
Author URI: https://avocadoweb.net
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// =========================================================================
// THE OPTIMIZATION CODE
// =========================================================================

// 1. Core Header and Emoji Clean up
add_action('init', 'ultimate_overhead_cleaner');
function ultimate_overhead_cleaner() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'rest_output_link_wp_head', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
    
    // Optional: Delete these 2 lines if you use RSS readers
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    
    // Complete Emoji Removal
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles'); 
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji'); 
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}

// 2. Remove Version Strings
add_filter('script_loader_src', 'remove_wp_version_strings', 15);
add_filter('style_loader_src', 'remove_wp_version_strings', 15);
function remove_wp_version_strings($src) {
    if (strpos($src, 'ver=' . get_bloginfo('version'))) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}

// 3. Remove WooCommerce Generator Tag
add_action('get_header', 'remove_woocommerce_overhead');
function remove_woocommerce_overhead() {
    if (class_exists('WooCommerce')) {
        remove_action('wp_head', 'wc_generator_tag');
    }
}

// 4. Remove Block Editor Global Styles (Optional: Clear this if you use Gutenberg)
add_action('wp_enqueue_scripts', 'remove_gutenberg_global_styles', 100);
function remove_gutenberg_global_styles() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style'); 
    wp_dequeue_style('global-styles'); 
}

// 5. Unregister Default Widgets
add_action('widgets_init', 'remove_default_core_widgets', 11);
function remove_default_core_widgets() {
    unregister_widget('WP_Widget_Meta');      
    unregister_widget('WP_Widget_Archives');  
}
