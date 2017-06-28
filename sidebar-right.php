<?php
/**
 * The sidebar containing the right widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage n00b
 * @since 1.0
 * @version 1.0
 */

if (!is_active_sidebar('sidebar-widget-right')) {
	return;
}
?>

<!-- START Sidebar Right -->
<div class="sidebar-content">

	<?php do_action('n00b_right_sidebar_top_hook'); ?>
	
	<div class="sidebar-widget">
		<?php if (function_exists('dynamic_sidebar')) { dynamic_sidebar('sidebar-widget-right'); } ?>
	</div>
	
	<?php do_action('n00b_right_sidebar_bottom_hook'); ?>

</div>
<!-- END Sidebar Right -->
