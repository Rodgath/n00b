<?php
/**
 * The template for displaying embed pages
 *
 * This is the custom post type embed template. If you edit the custom post type name,
 * you've got to change the name of this template to reflect that name change.
 *
 * @param string {post_type}   The post type.
 * @param string {post_format} The post format.
 *
 * @example embed-post-audio.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    WordPress
 * @subpackage n00b
 * @since      1.1
 * @version    1.0
 */

get_header();

$sidebar_pos = n00b_get_option('n00b_options', 'sidebar_position', get_queried_object_id(), array('metabox_prefix' => N00B_META_PREFIX));
$layout_cols = n00b_get_option('n00b_options', 'layout_cols', get_queried_object_id(), array('metabox_prefix' => N00B_META_PREFIX));
$layout_obj  = n00b_custom_col_class($layout_cols);

extract($layout_obj); // Returns ($sl_custom_class, $sr_custom_class, $a_custom_class) variables

$sidebar_left_col  = n00b_get_col_class($sidebar_pos, 'sidebar_left_col', $sl_custom_class);
$sidebar_right_col = n00b_get_col_class($sidebar_pos, 'sidebar_right_col', $sr_custom_class);
$article_col       = n00b_get_col_class($sidebar_pos, 'article_col', $a_custom_class);

?>