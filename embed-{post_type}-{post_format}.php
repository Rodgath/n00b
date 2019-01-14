<?php
/**
 * The template for displaying embed pages
 *
 * This is the custom post type embed template. If you edit the custom post type name,
 * you've got to change the name of this template to reflect that name change.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    WordPress
 * @subpackage n00b
 * @since      1.1
 * @version    1.0
 */
 
get_header(); 

$container   = n00b_get_option('n00b_options', 'container_type', get_queried_object_id());
$sidebar_pos = n00b_get_option('n00b_options', 'sidebar_position', get_queried_object_id());

$sidebar_left_col  = n00b_get_col_class($sidebar_pos, 'sidebar_left_col');
$sidebar_right_col = n00b_get_col_class($sidebar_pos, 'sidebar_right_col');
$article_col       = n00b_get_col_class($sidebar_pos, 'article_col');

?>