<?php 
/**
 * The template for displaying single post content
 *
 * @package    WordPress
 * @subpackage n00b
 * @since      1.0
 * @version    1.0
 * @link       https://codex.wordpress.org/Template_Hierarchy
 */
 
get_header(); 

$metabox_prefix = 'n00b_';
$container   = n00b_get_option('n00b_options', 'container_type', get_queried_object_id(), array('metabox_prefix' => $metabox_prefix));
$sidebar_pos = n00b_get_option('n00b_options', 'sidebar_position', get_queried_object_id(), array('metabox_prefix' => $metabox_prefix));
$meta_cols   = get_post_meta(get_queried_object_id(), $metabox_prefix .'layout_cols', true);
$layout_cols = $meta_cols === '' ? n00b_get_option('n00b_options', 'layout_cols', get_queried_object_id(), array('metabox_prefix' => $metabox_prefix)) : '';
$layout_cols_object = n00b_custom_col_class($layout_cols);
extract($layout_cols_object);
$sidebar_left_col  = n00b_get_col_class($sidebar_pos, 'sidebar_left_col', $sl_custom_class);
$sidebar_right_col = n00b_get_col_class($sidebar_pos, 'sidebar_right_col', $sr_custom_class);
$article_col       = n00b_get_col_class($sidebar_pos, 'article_col', $a_custom_class);

?>

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
					<?php get_template_part('template-parts/post/content', get_post_format()); ?>
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