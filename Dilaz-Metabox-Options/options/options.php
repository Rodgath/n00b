<?php 
/*
|| --------------------------------------------------------------------------------------------
|| Metabox Config
|| --------------------------------------------------------------------------------------------
||
|| @package		Dilaz Metabox
|| @subpackage	Config
|| @since		Dilaz Metabox 2.5.1
|| @author		Rodgath, https://github.com/Rodgath
|| @copyright	Copyright (C) 2017, Rodgath LTD
|| @link		https://github.com/Rodgath/Dilaz-Metabox-Plugin
|| @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
|| 
|| NOTE: Rename this file from "config-sample.php" to "config.php". If you
||       don't rename it, all your config and settings will be overwritten
||       when updating Dilaz Metabox Options.
|| 
*/

defined('ABSPATH') || exit;


# Columns Settings
# =============================================================================================
$dilaz_meta_boxes[] = array(
	'id'	   => $prefix .'page_layout',
	'title'	   => __('Page Layout', 'dilaz-metabox'),
	'pages'    => array('post', 'page'),
	'context'  => 'normal',
	'priority' => 'high',
	'type'     => 'metabox_set'
);
	
	# TAB - Sample 1 Tab 1
	# *****************************************************************************************
	$dilaz_meta_boxes[] = array(
		'id'    => $prefix .'layout_tab',
		'title' => __('Layout Options', 'dilaz-metabox'),
		'icon'  => 'fa-bank',
		'type'  => 'metabox_tab'
	);
		
		# FIELDS - Sample 1 Tab 1
		# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
		$dilaz_meta_boxes[] = array(
			'id'      => $prefix .'container_type',
			'name'    => __('Container Type:', 'dilaz-metabox'),
			'desc'    => __('Choose the type of content container.', 'dilaz-metabox'),
			'type'    => 'radio',
			'options' => array(
				'default_width' => __('Default Width', 'dilaz-metabox'),
				'full_width' => __('Full Width', 'dilaz-metabox'),
				'custom_width' => __('Custom Width', 'dilaz-metabox')
			),
			'std'   => 'default_width',
			'args'  => array('inline' => true),
		);
		$dilaz_meta_boxes[] = array(
			'id'     => $prefix .'custom_width',
			'name'   => __('Custom Width:', 'dilaz-metabox'),
			'desc'   => __('Enter the custom width in px. Example, 1000px', 'dilaz-metabox'),
			'type'   => 'text',
			'std'   => '1000px',
			'req_args' => array(
				$prefix .'container_type' => 'custom_width'
			),
			'req_action' => 'show',
		);
		$dilaz_meta_boxes[] = array(
			'id'	  => $prefix .'sidebar_position',
			'name'	  => __('Sidebar Position:', 'dilaz-metabox'),
			'desc'	  => '',
			'type'	  => 'radio',
			'options' => array(
				'default'    => __('Default', 'dilaz-metabox'),
				'right'      => __('Right sidebar', 'dilaz-metabox'),
				'left'       => __('Left sidebar', 'dilaz-metabox'),
				'both'       => __('Left & Right sidebars', 'dilaz-metabox'),
				'both_left'  => __('Both Left sidebars', 'dilaz-metabox'),
				'both_right' => __('Both Right sidebars', 'dilaz-metabox'),
				'none'       => __('No sidebar', 'dilaz-metabox'),
			),
			'std'     => 'default'
		);
		$dilaz_meta_boxes[] = array(
			'id'	  => $prefix .'layout_cols',
			'name'	  => __('Layout Columns (Optional):', 'dilaz-metabox'),
			'desc'	  => __('Set preferred column width classes, space-separated.', 'dilaz-metabox'),
			'type'	  => 'multitext',
			'options' => array(
				'sl_custom_class' => array('name' => __('Sidebar Left Custom Class', 'dilaz-metabox'), 'default' => ''),
				'sr_custom_class' => array('name' => __('Sidebar Right Custom Class', 'dilaz-metabox'), 'default' => ''),
				'a_custom_class' => array('name' => __('Article Custom Class', 'dilaz-metabox'), 'default' => '')
			),
			'args' => array(),
			'req_args' => array(
				$prefix .'sidebar_position' => array('right', 'left', 'both', 'both_left', 'both_right')
			),
			'req_cond'   => 'OR',
			'req_action' => 'show',
		);


# BOX - Sample Set 1
# =============================================================================================
$dilaz_meta_boxes[] = array(
	'id'	   => $prefix .'samp_set_1',
	'title'	   => __('Sample Set 1', 'dilaz-metabox'),
	'pages'    => array('post', 'page'),
	'context'  => 'normal',
	'priority' => 'high',
	'type'     => 'metabox_set'
);
	
	# TAB - Sample 1 Tab 1
	# *****************************************************************************************
	$dilaz_meta_boxes[] = array(
		'id'    => $prefix .'samp_1_tab_1',
		'title' => __('Sample 1 - Tab 1', 'dilaz-metabox'),
		'icon'  => 'fa-bank',
		'type'  => 'metabox_tab'
	);
		
		# FIELDS - Sample 1 Tab 1
		# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
		$dilaz_meta_boxes[] = array(
			'id'	  => $prefix .'samp_1_tab_1_opt_1',
			'name'	  => __('Tab 1 - Option 1:', 'dilaz-metabox'),
			'desc'	  => '',
			'type'	  => 'radio',
			'options' => DilazMetaboxFunction::choice('yes_no'),
			'std'     => 'no'
		);
		
		
	# TAB - Sample 1 Tab 2
	# *****************************************************************************************
	$dilaz_meta_boxes[] = array(
		'id'    => $prefix .'samp_1_tab_2',
		'title' => __('Sample 1 - Tab 2', 'dilaz-metabox'),
		'icon'  => 'fa-automobile',
		'type'  => 'metabox_tab'
	);
		
		# FIELDS - Sample 1 Tab 2
		# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
		$dilaz_meta_boxes[] = array(
			'id'	  => $prefix .'samp_1_tab_1_opt_2',
			'name'	  => __('Tab 2 - Option 1:', 'dilaz-metabox'),
			'desc'	  => '',
			'type'	  => 'radio',
			'options' => DilazMetaboxFunction::choice('yes_no'),
			'std'     => 'no'
		);
		
		
		
		
# BOX - Sample Set 2
# =============================================================================================
$dilaz_meta_boxes[] = array(
	'id'	   => $prefix .'samp_set_2',
	'title'	   => __('Sample Set 2', 'dilaz-metabox'),
	'pages'    => array('post', 'page'),
	'context'  => 'normal',
	'priority' => 'high',
	'type'     => 'metabox_set'
);
	
	# TAB - Sample 2 Tab 1
	# *****************************************************************************************
	$dilaz_meta_boxes[] = array(
		'id'    => $prefix .'samp_2_tab_1',
		'title' => __('Sample 2 - Tab 1', 'dilaz-metabox'),
		'icon'  => 'fa-bank',
		'type'  => 'metabox_tab'
	);
		
		# FIELDS - Sample 2 Tab 1
		# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
		$dilaz_meta_boxes[] = array(
			'id'	  => $prefix .'samp_2_tab_1_opt_1',
			'name'	  => __('Tab 1 - Option 1:', 'dilaz-metabox'),
			'desc'	  => '',
			'type'	  => 'radio',
			'options' => DilazMetaboxFunction::choice('yes_no'),
			'std'     => 'no'
		);
		
		
		
return $dilaz_meta_boxes;