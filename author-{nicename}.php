<?php
/**
 * The template for displaying specific author page using author nicename
 *
 * @param string {nicename} The author nicename.
 * 
 * @example author-john.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    WordPress
 * @subpackage n00b
 * @since      1.0
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

	<!-- START Title section -->
	<section id="title" class="pb-4 mb-4 border-bottom">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
				
					<?php global $post; $author_id = $post->post_author; ?>
					<h1><?php _e('Posts By:', 'n00b'); ?> <?php the_author_meta('display_name', $author_id); ?></h1>
					
					<?php if (get_the_author_meta('description')) { ?>

						<?php echo get_avatar(get_the_author_meta('user_email')); ?>
						<h2><?php _e('About ', 'n00b'); the_author_meta('display_name', $author_id); ?></h2>
						<?php echo wpautop(get_the_author_meta('description')); ?>

					<?php } ?>

				</div>
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
		<div class="container-fluid">
			<div class="row">
				
				<?php if ('left' === $sidebar_pos || 'both' === $sidebar_pos || 'both_left' === $sidebar_pos || 'both_right' === $sidebar_pos) { ?>
				<aside class="sidebar sidebar-left <?php echo $sidebar_left_col; ?>" role="complementary">
					<?php get_sidebar('left'); ?>
				</aside>
				<?php } ?>
				
				<div class="content <?php echo $article_col; ?>">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part('template-parts/content', 'author'); ?>
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
