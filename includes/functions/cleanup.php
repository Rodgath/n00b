<?php

/**
 * Clean up wp_head()
 */
remove_action('wp_head', 'wp_generator'); // WP version
remove_action('wp_head', 'rsd_link'); // EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // windows live writer
remove_action('wp_head', 'feed_links', 2); // post and comment feeds
remove_action('wp_head', 'feed_links_extra', 3); // category feeds
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // links for adjacent posts
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); // Remove rel=shortlink if a shortlink is defined for the current page
add_filter('style_loader_src', 'bones_remove_wp_ver_css_js', 9999); // remove WP version from css
add_filter('script_loader_src', 'bones_remove_wp_ver_css_js', 9999); // remove Wp version from scripts


/**
 * Do not generate and display WordPress version
 */
add_filter('the_generator', 'no_generator');
function no_generator()  {
	return '';
}