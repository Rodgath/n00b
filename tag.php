<?php 

get_header(); 

$container   = get_theme_mod('n00b_container_type');
$sidebar_pos = get_theme_mod('n00b_sidebar_position');

$sidebar_left_col  = n00b_get_sidebar_col_class($sidebar_pos, 'sidebar_left_col');
$sidebar_right_col = n00b_get_sidebar_col_class($sidebar_pos, 'sidebar_right_col');
$article_col       = n00b_get_sidebar_col_class($sidebar_pos, 'article_col');

?>

	<!-- START Title section -->
	<section id="title">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php _e('Tag Archive: ', 'n00b');  single_tag_title(); ?></h1>
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
					<?php get_template_part('template-parts/content', 'tag'); ?>
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