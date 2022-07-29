<?php
/**
 * Template for displaying search forms in n00b theme
 *
 * @package    WordPress
 * @subpackage n00b
 * @since      1.0
 * @version    1.0
 */
 
$unique_id = uniqid('search-form-');
 
?>
<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" role="search">
	<label class="assistive-text" for="<?php echo esc_attr($unique_id); ?>"><?php echo _x('Search', 'label', 'n00b'); ?></label>
	<div class="input-group">
		<input class="field form-control" id="<?php echo esc_attr($unique_id); ?>" name="s" type="text" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'n00b'); ?>">
		<span class="input-group-btn">
			<input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit" value="<?php echo _x('Search', 'submit button', 'n00b'); ?>">
		</span>
	</div>
</form>