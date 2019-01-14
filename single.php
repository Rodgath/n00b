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

$container   = n00b_get_option('n00b_options', 'container_type', get_queried_object_id(), $args = array('metabox_prefix'=>'my_prefix_'));
$sidebar_pos = n00b_get_option('n00b_options', 'sidebar_position', get_queried_object_id(), $args = array('metabox_prefix'=>'my_prefix_'));
$layout_cols = get_post_meta(get_queried_object_id(), 'my_prefix_layout_cols', true);
$layout_cols = $layout_cols === '' ? n00b_get_option('n00b_options', 'layout_cols', get_queried_object_id(), $args = array('metabox_prefix'=>'my_prefix_')) : '';
$layout_cols_object = n00b_req_col_object($layout_cols);
extract($layout_cols_object);
$sidebar_left_col  = n00b_get_col_class($sidebar_pos, 'sidebar_left_col', $req_cols_slc, $req_last_slc);
$sidebar_right_col = n00b_get_col_class($sidebar_pos, 'sidebar_right_col', $req_cols_src, $req_last_src);
$article_col       = n00b_get_col_class($sidebar_pos, 'article_col', $req_cols_ac, $req_last_ac);

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