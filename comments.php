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


/*
The comments page
*/

// Do not delete these lines
	if ( ! empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) )
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<div class="alert alert-help">
			<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'n00b' ); ?></p>
		</div>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<?php if ( have_comments() ) { ?>

	<h3 id="comments" class="h2"><?php comments_number( __( '<span>No</span> Responses', 'n00b' ), __( '<span>One</span> Response', 'n00b' ), _n( '<span>%</span> Response', '<span>%</span> Responses', get_comments_number(), 'n00b' ) );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

	<nav id="comment-nav">
		<ul class="clearfix">
			<li><?php previous_comments_link() ?></li>
			<li><?php next_comments_link() ?></li>
		</ul>
	</nav>

	<ol class="commentlist">
		<?php wp_list_comments( 'type=comment&callback=n00b_comments' ); ?>
	</ol>

	<nav id="comment-nav">
		<ul class="clearfix">
				<li><?php previous_comments_link() ?></li>
				<li><?php next_comments_link() ?></li>
		</ul>
	</nav>

<?php } else { // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) { ?>

		<!-- If comments are open, but there are no comments. -->

	<?php } else { // comments are closed ?>

		<!-- If comments are closed. -->
		<!--p class="nocomments"><?php _e( 'Comments are closed.', 'n00b' ); ?></p-->

	<?php } ?>

<?php } ?>


<?php if ( comments_open() ) { ?>

	<section id="respond" class="respond-form row">

		<h3 id="comment-form-title" class="h2 col-md-12"><?php comment_form_title( __( 'Leave a Reply', 'n00b' ), __( 'Leave a Reply to %s', 'n00b' )); ?></h3>

		<div id="cancel-comment-reply" class="col-md-12">
			<p class="small"><?php cancel_comment_reply_link(); ?></p>
		</div>

		<?php if ( get_option('comment_registration') && !is_user_logged_in() ) { ?>

			<div class="alert alert-help col-md-12">
				<p><?php printf( __( 'You must be %1$slogged in%2$s to post a comment.', 'n00b' ), '<a href="<?php echo wp_login_url( get_permalink() ); ?>">', '</a>' ); ?></p>
			</div>

		<?php } else { ?>

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

				<?php if ( is_user_logged_in() ) { ?>

					<div class="comment-form-logged-in comments-logged-in-as col-md-12">
						<?php _e( 'Logged in as', 'n00b' ); ?> <a href="<?php echo get_option( 'siteurl' ); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="<?php _e( 'Log out of this account', 'n00b' ); ?>"><?php _e( 'Log out', 'n00b' ); ?> <?php _e( '&raquo;', 'n00b' ); ?></a>
					</div>

				<?php } else { ?>

					<div id="comment-form-elements" class="clearfix">

						<?php $aria_req = $req ? " aria-required='true'" : ''; ?>

						<div class="comment-form-author col-md-4">
							<label for="author"><?php esc_html_e('Name', 'n00b'); echo ($req ? ' <span class="required">*</span>' : ''); ?></label>
							<input id="author" name="author" type="text" value="<?php esc_attr($comment_author); ?>" size="20" tabindex="1"<?php echo $aria_req; ?> />
						</div>

						<div class="comment-form-email col-md-4">
							<label for="email"><?php esc_html_e('Email', 'n00b'); echo ($req ? ' <span class="required">*</span>' : ''); ?></label><small> <?php _e("(will not be published)", 'n00b' ); ?></small>
							<input id="email" name="email" type="text" value="<?php esc_attr($comment_author_email); ?>" size="20" tabindex="2"<?php echo $aria_req; ?> />
						</div>

						<div class="comment-form-url col-md-4">
							<label for="url"><?php esc_html_e('Website', 'n00b'); ?></label><br />
							<input id="url" name="url" type="text" value="<?php esc_attr($comment_author_url); ?>" size="20" tabindex="3" />
						</div>

					</div>

				<?php } ?>

				<div class="comment-form-comment col-md-12">
					<label for="comment"><?php _ex('Comment', 'noun', 'n00b'); ?> <span class="required">*</span></label>
					<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" tabindex="4"></textarea>
				</div>

				<div class="comment-form-submit col-md-12">
					<input name="submit" type="submit" id="submit" class="button" tabindex="5" value="<?php _e( 'Submit', 'n00b' ); ?>" />
					<?php comment_id_fields(); ?>
				</div>

				<div class="comment-form-alert col-md-12">
					<div class="alert alert-info">
						<p id="allowed_tags" class="small"><strong>XHTML:</strong> <?php _e( 'You can use these tags', 'n00b' ); ?>: <code><?php echo allowed_tags(); ?></code></p>
					</div>
				</div>

				<?php do_action( 'comment_form', $post->ID ); ?>

			</form>

		<?php } // If registration required and not logged in ?>

	</section>

<?php } ?>
