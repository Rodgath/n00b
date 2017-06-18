<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	
	<header class="entry-header">
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
		<span class="date">
			<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>" itemprop="datePublished">
				<?php the_date(); ?> <?php the_time(); ?>
			</time>
		</span>
		<span class="author"><?php _e('Published by', 'n00b'); ?> <?php the_author_posts_link(); ?></span>
	</header>
	
	<?php if (has_post_thumbnail()) { ?>
	<div class="entry-image">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail(array(120, 120)); ?>
		</a>
	</div>
	<?php } ?>
	
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	
	<footer class="entry-meta">
		<?php if ('post' == get_post_type()) { ?>
			
			<?php $categories_list = get_the_category_list( __(', ', 'n00b') ); ?>
			<?php if ($categories_list) {  ?>
			<span class="category-links"><?php printf( __('Posted in %1$s', 'n00b'), $categories_list ); ?></span>
			<?php } ?>
			
			<?php $tags_list = get_the_tag_list( '', __(', ', 'n00b') ); ?>
			<?php if ($tags_list) { ?>
			<span class="tag-links"><?php printf( __('Tagged %1$s', 'n00b'), $tags_list ); ?></span>
			<?php } ?>
			
		<?php } ?>

		<?php if (!post_password_required() && (comments_open() || '0' != get_comments_number())) { ?>
			<span class="comments-link"><?php comments_popup_link( __('Leave a comment', 'n00b'), __('1 Comment', 'n00b'), __('% Comments', 'n00b') ); ?></span>
		<?php } ?>

		<?php edit_post_link( __('Edit', 'n00b'), '<span class="edit-link">', '</span>' ); ?>
	</footer>
	
	<?php get_template_part('pagination'); ?>

</article>