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
	'id'	   => $prefix .'page_columns',
	'title'	   => __('Page Columns', 'dilaz-metabox'),
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
			'id'	  => $prefix .'sidebar_position',
			'name'	  => __('Sidebar Position:', 'dilaz-metabox'),
			'desc'	  => '',
			'type'	  => 'radio',
			'options' => array(
				'right'      => __('Right sidebar', 'dilaz-panel'),
				'left'       => __('Left sidebar', 'dilaz-panel'),
				'both'       => __('Left & Right sidebars', 'dilaz-panel'),
				'both_left'  => __('Both Left sidebars', 'dilaz-panel'),
				'both_right' => __('Both Right sidebars', 'dilaz-panel'),
				'none'       => __('No sidebar', 'dilaz-panel'),
			),
			'std'     => 'right'
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