<?php
/**
 * n00b Theme Customizer
 *
 * @package understrap
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
add_action( 'customize_register', 'n00b_customize_register' );
if ( ! function_exists( 'n00b_customize_register' ) ) {
	/**
	 * Register basic customizer support.
	 *
	 * @param object $wp_customize Customizer reference.
	 */
	function n00b_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	}
}

add_action('customize_register', 'n00b_theme_customizer', 1);
if (!function_exists('n00b_theme_customizer')) {

	function n00b_theme_customizer($wp_customize) {

		// Uncomment the below lines to remove the default customize sections

		// $wp_customize->remove_section('title_tagline');
		// $wp_customize->remove_section('colors');
		// $wp_customize->remove_section('background_image');
		// $wp_customize->remove_section('static_front_page');
		// $wp_customize->remove_section('nav');

		// Uncomment the below lines to remove the default controls
		// $wp_customize->remove_control('blogdescription');

		// Uncomment the following to change the default section titles
		// $wp_customize->get_section('colors')->title = __( 'Theme Colors' );
		// $wp_customize->get_section('background_image')->title = __( 'Images' );

		$wp_customize->add_section('n00b_theme_slider_options', array(
			'title' => __( 'Slider Settings', 'n00b' ),
		));

		$wp_customize->add_setting('n00b_theme_slider_count_setting', array(
			'default'           => '1',
			'sanitize_callback' => 'absint',
		));

		$wp_customize->add_control('n00b_theme_slider_count', array(
			'label'    => __( 'Number of slides displaying at once', 'n00b' ),
			'section'  => 'n00b_theme_slider_options',
			'type'     => 'text',
			'settings' => 'n00b_theme_slider_count_setting',
		));

		$wp_customize->add_setting('n00b_theme_slider_time_setting', array(
			'default'           => '5000',
			'sanitize_callback' => 'absint',
		));

		$wp_customize->add_control('n00b_theme_slider_time', array(
			'label'    => __( 'Slider Time (in ms)', 'n00b' ),
			'section'  => 'n00b_theme_slider_options',
			'type'     => 'text',
			'settings' => 'n00b_theme_slider_time_setting',
		));

		$wp_customize->add_setting('n00b_theme_slider_loop_setting', array(
			'default'           => 'true',
			'sanitize_callback' => 'esc_textarea',
		));

		$wp_customize->add_control('n00b_theme_loop', array(
			'label'    => __( 'Loop Slider Content', 'n00b' ),
			'section'  => 'n00b_theme_slider_options',
			'type'     => 'radio',
			'choices' => array(
				'true'  => 'yes',
				'false' => 'no',
			),
			'settings' => 'n00b_theme_slider_loop_setting',
		));

		// Theme layout settings.
		$wp_customize->add_section('n00b_theme_layout_options', array(
			'title'       => __( 'Layout Settings', 'n00b' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Container width and sidebar defaults', 'n00b' ),
			'priority'    => 160,
		));

		$wp_customize->add_setting('n00b_container_type', array(
			'default'           => 'container',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'esc_textarea',
			'capability'        => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'container_type', array(
					'label'       => __( 'Container Width', 'n00b' ),
					'description' => __( "Choose between Bootstrap's container and container-fluid", 'n00b' ),
					'section'     => 'n00b_theme_layout_options',
					'settings'    => 'n00b_container_type',
					'type'        => 'select',
					'choices'     => array(
						'container'       => __( 'Fixed width container', 'n00b' ),
						'container-fluid' => __( 'Full width container', 'n00b' ),
					),
					'priority'    => '10',
				)
			));

		$wp_customize->add_setting('n00b_sidebar_position', array(
			'default'           => 'right',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'esc_textarea',
			'capability'        => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'n00b_sidebar_position', array(
				'label'       => __( 'Sidebar Position', 'n00b' ),
				'description' => __( 'Choose sidebar position.', 'n00b' ),
				'section'     => 'n00b_theme_layout_options',
				'settings'    => 'n00b_sidebar_position',
				'type'        => 'select',
				'choices'     => array(
					'right'      => __( 'Right sidebar', 'n00b' ),
					'left'       => __( 'Left sidebar', 'n00b' ),
					'both'       => __( 'Left & Right sidebars', 'n00b' ),
					'both_left'  => __( 'Both Left sidebars', 'n00b' ),
					'both_right' => __( 'Both Right sidebars', 'n00b' ),
					'none'       => __( 'No sidebar', 'n00b' ),
				),
				'priority' => '20',
				)
			)
		);

		// How to display posts index page (home.php).
		$wp_customize->add_setting('n00b_posts_index_style', array(
			'default'           => 'default',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'esc_textarea',
			'capability'        => 'edit_theme_options',
		));

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'n00b_posts_index_style', array(
					'label'       => __( 'Posts Index Style', 'n00b' ),
					'description' => __( 'Choose how to display latest posts', 'n00b' ),
					'section'     => 'n00b_theme_layout_options',
					'settings'    => 'n00b_posts_index_style',
					'type'        => 'select',
					'choices'     => array(
						'default' => __( 'Default', 'n00b' ),
						'masonry' => __( 'Masonry', 'n00b' ),
						'grid'    => __( 'Grid', 'n00b' ),
					),
					'priority'    => '30',
				)
			) );

		// Columns setup for grid posts.
		/**
		 * Function and callback to check when grid is enabled.
		 *
		 * @return bool
		 */
		function is_grid_enabled() {
			return 'grid' == get_theme_mod( 'n00b_posts_index_style' );
		}

		// How many columns to use each grid post.
		$wp_customize->add_setting( 'n00b_grid_post_columns', array(
			'default'    => '6',
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport'  => 'refresh',
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'n00b_grid_post_columns', array(
					'label'       => __( 'Grid Post Columns', 'n00b' ),
					'description' => __( 'Choose how many columns to use', 'n00b' ),
					'section'     => 'n00b_theme_layout_options',
					'settings'    => 'n00b_grid_post_columns',
					'type'        => 'select',
					'choices' => array(
					'6' => '2',
					'4' => '3',
					'3' => '4',
					'2' => '6',
					'12' => '1',
					),
					'default'     => 2,
					'priority'    => '30',
					'transport'   => 'refresh',
				)
			) );

		// hook to auto-hide/show depending the n00b_posts_index_style option.
		$wp_customize->get_control( 'n00b_grid_post_columns' )->active_callback = 'is_grid_enabled';

	}
} // endif function_exists( 'n00b_theme_customizer' ).

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
add_action( 'customize_preview_init', 'n00b_customize_preview_js' );
if ( ! function_exists( 'n00b_customize_preview_js' ) ) {
	/**
	 * Setup JS integration for live previewing.
	 */
	function n00b_customize_preview_js() {
		wp_enqueue_script( 'n00b_customizer', get_template_directory_uri() . '/js/customizer.js',
			array( 'customize-preview' ), '20130508', true );
	}
}
