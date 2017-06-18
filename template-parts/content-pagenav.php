<?php if (function_exists('n00b_pages_navigation')) { ?>
	<?php n00b_pages_navigation(); ?>
<?php } else { ?>
	<nav id="content-nav" class="paging-navigation" role="navigation">
		<ul class="page-nav">
			<?php if (get_next_posts_link()) { ?>
			<li class="nav-previous"><?php next_posts_link( __('<span class="meta-nav">&larr;</span> Older Posts', 'n00b') ); ?></li>
			<?php } ?>

			<?php if (get_previous_posts_link()) { ?>
			<li class="nav-next"><?php previous_posts_link( __('Newer Posts <span class="meta-nav">&rarr;</span>', 'n00b') ); ?></li>
			<?php } ?>
		</ul>
	</nav><!-- #content-nav -->
<?php } ?>