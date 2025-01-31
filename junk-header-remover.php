<?php
/*
Plugin Name: Junk Header Remover for WordPress
Plugin URI: https://avocadoweb.net
Description: Removes unnecessary clutter from the WP Header.
Version: 1.0.1
Author: Joseph Brzezowski
Author URI: https://avocadoweb.net
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function aw_remove_junk_headers() {
    remove_action('wp_head', 'rsd_link'); // Remove Really Simple Discovery link
    remove_action('wp_head', 'wp_generator'); // Remove WordPress version
    remove_action('wp_head', 'feed_links', 2); // Remove RSS feed links
    remove_action('wp_head', 'feed_links_extra', 3); // Remove extra RSS feed links
    remove_action('wp_head', 'index_rel_link'); // Remove index page link
    remove_action('wp_head', 'wlwmanifest_link'); // Remove wlwmanifest.xml (Windows Live Writer)
    remove_action('wp_head', 'start_post_rel_link', 10, 0); // Remove random post link
    remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Remove parent post link
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Remove adjacent post links
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
}
add_action('init', 'aw_remove_junk_headers');

?>
