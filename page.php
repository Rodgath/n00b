<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    WordPress
 * @subpackage n00b
 * @since      1.0
 * @version    1.0
 */

get_header(); 

$metabox_prefix = 'n00b_';
$object_id = get_queried_object_id();
$container = n00b_get_option('n00b_options', 'container_type', $object_id, $args = array('metabox_prefix' => $metabox_prefix));
$sidebar_pos = n00b_get_option('n00b_options', 'sidebar_position', $object_id, $args = array('metabox_prefix' => $metabox_prefix));
$layout_cols = get_post_meta($object_id, $metabox_prefix .'layout_cols', true);
$layout_cols = (get_post_meta($object_id, $metabox_prefix .'sidebar_position', true) == 'default') ? n00b_get_option('n00b_options', 'layout_cols', $object_id) : $layout_cols;
$layout_cols_object = n00b_custom_col_class($layout_cols);
extract($layout_cols_object);
$sidebar_left_col = n00b_get_col_class($sidebar_pos, 'sidebar_left_col', $req_cols_slc, $req_last_slc);
$sidebar_right_col = n00b_get_col_class($sidebar_pos, 'sidebar_right_col', $req_cols_src, $req_last_src);
$article_col = n00b_get_col_class($sidebar_pos, 'article_col', $req_cols_ac, $req_last_ac);

?>

	<!-- START Title section -->
	<section id="title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>		
	</section>
	<!-- END Title section -->

	<!-- START Content section -->
	<section id="content">
		<div class="container">
			<div class="row">
				
				<?php if ('left' === $sidebar_pos || 'both' === $sidebar_pos || 'both_left' === $sidebar_pos || 'both_right' === $sidebar_pos) { ?>
				<aside class="sidebar sidebar-left <?php echo $sidebar_left_col; ?>" role="complementary">
					<?php get_sidebar('left'); ?>
				</aside>
				<?php } ?>
				
				<?php while (have_posts()) : the_post(); ?>
				<div class="content <?php echo $article_col; ?>">
					<?php get_template_part('template-parts/page/content', 'page'); ?>
				</div>
				<?php endwhile; ?>
				
				<?php if ('right' === $sidebar_pos || 'both' === $sidebar_pos || 'both_left' === $sidebar_pos || 'both_right' === $sidebar_pos) { ?>
				<aside class="sidebar sidebar-right <?php echo $sidebar_right_col; ?>" role="complementary">
					<?php get_sidebar('right'); ?>
				</aside>
				<?php } ?>
				
			</div>
		</div>
	</section>
	<!-- END Content section -->

<?php get_footer(); ?>