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

$container   = n00b_get_option('n00b_options', 'container_type', get_queried_object_id());
$sidebar_pos = n00b_get_option('n00b_options', 'sidebar_position', get_queried_object_id());

$sidebar_left_col  = n00b_get_col_class($sidebar_pos, 'sidebar_left_col', 'col-md-2', '');
$sidebar_right_col = n00b_get_col_class($sidebar_pos, 'sidebar_right_col', 'col-md-2', 'col-md-pull-8');
$article_col       = n00b_get_col_class($sidebar_pos, 'article_col', 'col-md-8', 'col-md-push-2');

?>

	<!-- START Title section -->
	<section id="title">
		<div class="container">
			<div class="row">
				<h1><?php _e('Error', 'n00b'); ?> 404</h1>
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