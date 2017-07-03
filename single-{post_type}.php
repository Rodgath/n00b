<?php
/**
 * The template for displaying single custom post type post content
 *
 * @package    WordPress
 * @subpackage n00b
 * @since      1.1
 * @version    1.0
 * @link       https://codex.wordpress.org/Template_Hierarchy
 */
 
get_header(); 

$container   = get_theme_mod('n00b_container_type');
$sidebar_pos = get_theme_mod('n00b_sidebar_position');

$sidebar_left_col  = n00b_get_sidebar_col_class($sidebar_pos, 'sidebar_left_col');
$sidebar_right_col = n00b_get_sidebar_col_class($sidebar_pos, 'sidebar_right_col');
$article_col       = n00b_get_sidebar_col_class($sidebar_pos, 'article_col');

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
					<?php get_template_part('template-parts/content', 'single'); ?>
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