<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    WordPress
 * @subpackage n00b
 * @since      1.0
 * @version    1.0
 */


?>

<div id="comments" class="comments">
	<?php 
	/*
	 * If the current post is protected by a password and
	 * the visitor has not yet entered the password we will
	 * return early without loading the comments.
	 */
	if (post_password_required()) : ?>
	<p><?php _e('Post is password protected. Enter the password to view any comments.', 'n00b'); ?></p>
</div>
	<?php return; endif; ?>

<?php if (have_comments()) { ?>

	<h2 class="comments-title"><?php comments_number(); ?></h2>

	<?php if ( get_comment_pages_count() > 1 && get_option('page_comments') ) : ?>
	<nav id="comment-nav-above" class="comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e('Comment navigation', 'n00b'); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __('&larr; Older Comments', 'n00b') ); ?></div>
		<div class="nav-next"><?php next_comments_link( __('Newer Comments &rarr;', 'n00b') ); ?></div>
	</nav>
	<?php endif; ?>

	<ol class="comment-list">
		<?php wp_list_comments('callback=n00b_comments'); ?>
	</ul>

	<?php if ( get_comment_pages_count() > 1 && get_option('page_comments') ) : ?>
	<nav id="comment-nav-below" class="comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e('Comment navigation', 'n00b'); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __('&larr; Older Comments', 'n00b') ); ?></div>
		<div class="nav-next"><?php next_comments_link( __('Newer Comments &rarr;', 'n00b') ); ?></div>
	</nav>
	<?php endif; ?>

<?php } ?>

<?php if ( !comments_open() && !is_page()&& '0' != get_comments_number() && post_type_supports(get_post_type(), 'comments') ) { ?>

	<p class="no-comments"><?php _e( 'Comments are closed.', 'n00b' ); ?></p>

<?php } ?>

<?php comment_form(); ?>

</div>
