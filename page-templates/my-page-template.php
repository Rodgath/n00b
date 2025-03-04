<?php

/* Template Name: n00b Custom Page */

get_header();

$sidebar_pos = n00b_get_option('n00b_options', 'sidebar_position', get_queried_object_id(), array('metabox_prefix' => N00B_META_PREFIX));
$layout_cols = n00b_get_option('n00b_options', 'layout_cols', get_queried_object_id(), array('metabox_prefix' => N00B_META_PREFIX));
$layout_obj  = n00b_custom_col_class($layout_cols);

extract($layout_obj); // Returns ($sl_custom_class, $sr_custom_class, $a_custom_class) variables

$sidebar_left_col  = n00b_get_col_class($sidebar_pos, 'sidebar_left_col', $sl_custom_class);
$sidebar_right_col = n00b_get_col_class($sidebar_pos, 'sidebar_right_col', $sr_custom_class);
$article_col       = n00b_get_col_class($sidebar_pos, 'article_col', $a_custom_class);
$sidebar_pos = n00b_get_option('n00b_options', 'sidebar_position', get_queried_object_id());

$sidebar_left_col  = n00b_get_col_class($sidebar_pos, 'sidebar_left_col');
$sidebar_right_col = n00b_get_col_class($sidebar_pos, 'sidebar_right_col');
$article_col       = n00b_get_col_class($sidebar_pos, 'article_col');

?>

	<!-- START Title section -->
	<section id="title" class="pb-4 mb-5 border-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php //the_title(); ?></h1>
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
					<?php get_template_part('template-parts/content', 'page'); ?>
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