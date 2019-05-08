<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package    WordPress
 * @subpackage n00b
 * @since      1.0
 * @version    1.0
 * @link       https://codex.wordpress.org/Creating_an_Error_404_Page
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

	<!-- START Title section -->
	<section id="title" class="pb-4 mb-5 border-bottom">
		<div class="container">
			<div class="row">
				<h1><?php _e('Error', 'n00b'); ?> 404</h1>
			</div>
		</div>		
	</section>
	<!-- END Title section -->
	
	<!-- START breadcrumb -->
	<section id="breadcrumb">
		<div class="container-fluid">
			<div class="row">
				
			</div>
		</div>
	</section>
	<!-- END #breadcrumb -->

	<!-- START Content section -->
	<section id="content">
		<div class="container">
			<div class="row">
				
				<?php if ('left' === $sidebar_pos || 'both' === $sidebar_pos || 'both_left' === $sidebar_pos || 'both_right' === $sidebar_pos) { ?>
				<aside class="sidebar sidebar-left <?php echo $sidebar_left_col; ?>" role="complementary">
					<?php get_sidebar('left'); ?>
				</aside>
				<?php } ?>
				
				<article id="post-404" class="content <?php echo $article_col; ?>">
					<h2><?php _e('Page not found', 'n00b'); ?></h2>
					<p><?php _e('The page you were looking for does not exist.', 'n00b'); ?></p>
					<p><?php _e('Perhaps searching can help.', 'n00b'); ?></p>
					<?php get_search_form(); ?>
					<h3><a href="<?php echo home_url(); ?>"><?php _e('Return home?', 'n00b'); ?></a></h3>
				</article>
				
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