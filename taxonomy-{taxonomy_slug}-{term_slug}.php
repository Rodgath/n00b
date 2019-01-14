<?php
/**
 * The template for displaying custom post type taxonomy
 *
 * This is the custom post type taxonomy template. If you edit the custom taxonomy name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom taxonomy is called "register_taxonomy('location')",
 * and you have category named "Texas", then your template name should 
 * be taxonomy-location-texas.php
 *
 * @link http://codex.wordpress.org/Post_Type_Templates#Displaying_Custom_Taxonomies
 *
 * @package WordPress
 * @subpackage n00b
 * @since 1.0
 * @version 1.0
 */

get_header();

$container   = n00b_get_option('n00b_options', 'container_type', get_queried_object_id());
$sidebar_pos = n00b_get_option('n00b_options', 'sidebar_position', get_queried_object_id());

$sidebar_left_col  = n00b_get_col_class($sidebar_pos, 'sidebar_left_col');
$sidebar_right_col = n00b_get_col_class($sidebar_pos, 'sidebar_right_col');
$article_col       = n00b_get_col_class($sidebar_pos, 'article_col');

?>

	<!-- START Title section -->
	<section id="title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php _e('Posts Categorized:', 'n00b'); ?> <?php single_cat_title(); ?></h1>
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
				
				<div class="content <?php echo $article_col; ?>">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part('template-parts/content', 'category'); ?>
				<?php endwhile; ?>
					<?php get_template_part('template-parts/content', 'pagenav'); ?>
				<?php else : ?>
					<?php get_template_part('template-parts/content', 'none'); ?>
				<?php endif; ?>
				</div>
				
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