<article id="no-results" class="nothing-found" role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">
		<h1 class="page-title"><?php _e('Nothing Found', 'n00b'); ?></h1>
	</header>
	
	<section class="entry-content">
		<p><?php _e('Uh Oh. Something is missing. Try double checking things.', 'n00b'); ?></p>
		
		<?php if (is_home() && current_user_can('publish_posts')) { ?>
		
			<p><?php printf( __('Ready to publish your first post? %1$sGet started here%2$s.', 'n00b'), '<a href="'. esc_url(admin_url('post-new.php')) .'">', '</a>' ); ?></p>

		<?php } else if (is_search()) { ?>
			
			<p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'n00b'); ?></p>
			<?php get_search_form(); ?>
			
		<?php } else { ?>
			
			<p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'n00b'); ?></p>
			<?php get_search_form(); ?>
			
		<?php } ?>
	</section>
	
</article>