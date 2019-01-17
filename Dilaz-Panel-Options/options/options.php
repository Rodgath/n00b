<?php
/*
|| --------------------------------------------------------------------------------------------
|| Theme/Plugin Panel Options
|| --------------------------------------------------------------------------------------------
||
|| @package		Dilaz Panel
|| @subpackage	Main Options
|| @since		Dilaz Panel 1.1
|| @author		WebDilaz Team, http://webdilaz.com
|| @copyright	Copyright (C) 2017, WebDilaz LTD
|| @link		http://webdilaz.com/panel
|| @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
|| 
|| NOTE 1: Rename this file from "options-sample.php" to "options.php". If you
||         don't rename it, all your options and settings will be overwritten
||         when updating Dilaz Panel.
|| 
|| NOTE 2: Add all your theme/plugin options in this file
|| 
*/

defined('ABSPATH') || exit;



# Layout Options
# =============================================================================================
$options[] = array(
	'name' => __('Layout Options', 'dilaz-panel'),
	'type' => 'heading',
	'icon' => 'fa-cog'
);
	
	# SUB TAB - Simple Options Set
	# *****************************************************************************************
	// $options[] = array(
		// 'name' => __('General', 'dilaz-panel'),
		// 'type' => 'subheading',
	// );
		
		# FIELDS - Alpha Tab 1
		# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
		$options[] = array(
			'id'   => 'container_type',
			'name' => __('Container Type:', 'dilaz-panel'),
			'desc' => __('Choose the type of content container.', 'dilaz-panel'),
			'type' => 'radio',
			'options' => array(
				'full_width' => __('Full Width', 'dilaz-panel'),
				'fixed_width' => __('Fixed Width', 'dilaz-panel')
			),
			'std'   => 'full_width',
			'class' => '',
			'args'  => array('inline' => true),
		);
		$options[] = array(
			'id'   => 'sidebar_position',
			'name' => __('Sidebar Position:', 'dilaz-panel'),
			'desc' => __('Choose sidebar position.', 'dilaz-panel'),
			'type' => 'radio',
			'options' => array(
				'right'      => __('Right sidebar', 'dilaz-panel'),
				'left'       => __('Left sidebar', 'dilaz-panel'),
				'both'       => __('Left & Right sidebars', 'dilaz-panel'),
				'both_left'  => __('Both Left sidebars', 'dilaz-panel'),
				'both_right' => __('Both Right sidebars', 'dilaz-panel'),
				'none'       => __('No sidebar', 'dilaz-panel'),
			),
			'std'   => 'right',
			'class' => '',
			'args'  => array('inline' => false),
		);
		$options[] = array(
			'id'	  => 'layout_cols',
			'name'	  => __('Layout Columns (Optional):', 'dilaz-panel'),
			'desc'	  => __('Set preferred column widths.', 'dilaz-panel'),
			'type'	  => 'multitext',
			'options' => array(
				'sl_custom_class' => array('name' => __('Sidebar Left Custom Class', 'dilaz-panel'), 'default' => ''),
				'sr_custom_class' => array('name' => __('Sidebar Right Custom Class', 'dilaz-panel'), 'default' => ''),
				'a_custom_class'  => array('name' => __('Article Custom Class', 'dilaz-panel'), 'default' => ''),
			),
			'args'     => array('inline' => false, 'cols' => 2),
			'req_args' => array(
				'sidebar_position' => array('right', 'left', 'both', 'both_left', 'both_right')
			),
			'req_cond'   => 'OR',
			'req_action' => 'show',
		);
		
		
return wp_parse_args($options, $options);