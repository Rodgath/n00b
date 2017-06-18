<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage n00b
 * @since 1.0
 * @version 1.0
 */

if (!is_active_sidebar('sidebar-widget-main')) {
	return;
}
?>

<!-- START Sidebar Left -->
<div class="sidebar-content">

	<?php do_action('n00b_sidebar_top'); ?>
	
	<div class="sidebar-widget">
		<?php if (!function_exists('dynamic_sidebar')) { dynamic_sidebar('sidebar-widget-main'); } ?>
	</div>

	<?php do_action('n00b_sidebar_bottom'); ?>

</div>
<!-- END Sidebar Left -->
