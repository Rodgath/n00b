<?php

/**
 * Constants
 *
 * @since 1.0
 */
defined('N00B_PROTOCAL') || define('N00B_PROTOCAL', is_ssl() ? 'https' : 'http');
defined('N00B_META_PREFIX') || define('N00B_META_PREFIX', 'n00b_');

/**
 * Include custom functions file if it exists
 */
if (file_exists(get_template_directory() .'/includes/functions/functions-custom.php')) {
	include_once get_template_directory() .'/includes/functions/functions-custom.php';
}

/**
 * n00b functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package    WordPress
 * @subpackage n00b
 * @since      1.0
 * @version    1.0
 */
require_once 'Dilaz-Panel-Options/admin.php';
require_once 'Dilaz-Metabox-Options/metabox.php';
require_once 'includes/functions/customizer.php';

/**
 * Maximum allowed content width
 */
if (!isset($content_width)) {
    $content_width = 770;
}

/**
 * Theme setup
 *
 * @since 1.0
 */
add_action('after_setup_theme', 'n00b_theme_setup');
if (!function_exists('n00b_theme_setup')) {
	
	function n00b_theme_setup() {
		
		/* Hook before n00b theme setup */
		do_action('n00b_before_theme_setup');
		
		/* Enable theme translation */
		load_theme_textdomain('n00b', get_template_directory() . '/languages');
		
		/* Posts and comments feed links in head */
		add_theme_support('automatic-feed-links');
		
		/* Image thumbnails */
		add_theme_support('post-thumbnails');
		
		/* Post formats */
		add_theme_support('post-formats', apply_filters('n00b_post_formats', array('aside', 'image', 'gallery', 'link', 'quote', 'status', 'video', 'audio', 'chat')));
		
		/* HTML5 output */
		add_theme_support('html5', apply_filters('n00b_html5_output', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption')));
		
		/* Title tag output */
		add_theme_support('title-tag');
		
		/* Menu location */
		register_nav_menus(apply_filters('n00b_nav_menus', array(
			'main-menu'    => __('Main Header Menu', 'n00b'),
			'sidebar-menu' => __('Sidebar Menu', 'n00b'),
			'other-menu'   => __('Other Menu', 'n00b'), 
		)));
		
		/* load custom walker menu class file */
		// require 'includes/class-n00b_walker_nav_menu.php';

		/* TinyMCE editor custom stylesheet */
		add_editor_style('/assets/css/editor-style.css');
		
		/* Hook after n00b theme setup */
		do_action('n00b_after_theme_setup');
	}
}

/**
 * Register widget areas
 *
 * @since 1.0
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
add_action('widgets_init', 'n00b_widgets_init');
if (!function_exists('n00b_widgets_init')) {
	
	function n00b_widgets_init() {
		
		if (function_exists('register_sidebar')) {
			
			/* Register sidebar widget main */
			register_sidebar(apply_filters('n00b_sidebar_widget_main', array(
				'name'          => __('Sidebar Widget Main', 'n00b'),
				'id'            => 'sidebar-widget-main',
				'description'   => 'Main sidebar widget description should be added here',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title font-weight-light">',
				'after_title'   => '</h3>',
			)));
			
			/* Register sidebar widget right */
			register_sidebar(apply_filters('n00b_sidebar_widget_right', array(
				'name'          => __('Sidebar Widget Right', 'n00b'),
				'id'            => 'sidebar-widget-right',
				'description'   => 'Sidebar widget right description should be added here',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title font-weight-light">',
				'after_title'   => '</h3>',
			)));
			
			/* Register sidebar widget left */
			register_sidebar(apply_filters('n00b_sidebar_widget_left', array(
				'name'          => __('Sidebar Widget Left', 'n00b'),
				'id'            => 'sidebar-widget-left',
				'description'   => 'Sidebar widget left description should be added here',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title font-weight-light">',
				'after_title'   => '</h3>',
			)));
		}
	}
}

/**
 * Add scripts
 *
 * @since 1.0
 */
add_action('wp_enqueue_scripts', 'n00b_enqueue_assets', 100);
if (!function_exists('n00b_enqueue_assets')) {
	
	function n00b_enqueue_assets() {
		
		/* STYLES
		 * ========================================================= */
			
			/* Hook before n00b styles enqueue */
			do_action('n00b_before_styles_enqueue');
			
			/* Bootstrap CSS */
			wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3');
			wp_enqueue_style('bootstrap-css');
			
			/* Google fonts */
			wp_enqueue_style('google-fonts', N00B_PROTOCAL . '://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
			
			/* n00b styles */
			wp_register_style('n00b_css', get_template_directory_uri() . '/assets/css/style.css', '', '1.0');
			wp_enqueue_style('n00b_css');
			
			/* Conditional styles for specific page - OPTIONAL */
			if (is_page('pagenamehere')) {
				wp_register_style('stylename', get_template_directory_uri() . '/assets/css/stylename.css', array(), '1.0');
				wp_enqueue_style('stylename');
			}
			
			/* Hook after n00b styles enqueue */
			do_action('n00b_after_styles_enqueue');
		
		/* SCRIPTS
		 * ========================================================= */
			
			/* Hook before n00b scripts enqueue */
			do_action('n00b_before_scripts_enqueue');
			
			if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
				
				/* jQuery */
				wp_enqueue_script('jquery');
				
				/* Modernizr */
				// wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', false, null, true);
				// wp_enqueue_script('modernizr');

				/* Bootstrap */
				wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', false, '4.0.0.alpha5', true);
				wp_enqueue_script('bootstrap-js');

				/* Bootstrap Demo */
				// wp_register_script('bootstrap-demo', get_template_directory_uri() . '/assets/js/bootstrap.demo.js', false, null, true);
				// wp_enqueue_script('bootstrap-demo');
			
				/* n00b scripts */
				// wp_register_script('n00b-js', get_template_directory_uri() . '/assets/js/scripts.js', array('modernizr', 'jquery'), '1.0');
				wp_register_script('n00b-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0');
				wp_enqueue_script('n00b-js');
				
				if (is_singular() && comments_open() && get_option('thread_comments')) {
					wp_enqueue_script('comment-reply');
				}
			}
			
			/* Conditional scripts for specific page - OPTIONAL */
			if (is_page('pagenamehere')) {
				wp_register_script('scriptname', get_template_directory_uri() . '/assets/js/scriptname.js', array('jquery'), '1.0');
				wp_enqueue_script('scriptname');
			}
			
			/* Hook before n00b scripts enqueue */
			do_action('n00b_after_scripts_enqueue');
			
	}
}

/**
 * n00b main menu navigation
 *
 * @since 1.0
 */
if (!function_exists('n00b_main_nav')) {
	
	function n00b_main_nav() {
		
		$n00b_nav = array(
			'theme_location'  => 'main-menu',
			'menu'            => '',
			'container'       => 'div',
			'container_class' => 'collapse navbar-collapse',
			'container_id'    => 'main-menu-container',
			'menu_class'      => 'navbar-nav ml-auto',
			'menu_id'         => 'main-menu',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu', // '__return_false',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 3,
			'walker'          => new n00b_nav_walker()
		);
		
		wp_nav_menu(apply_filters('n00b_main_nav_filter', $n00b_nav));
	}
}

/**
 * n00b nav walker
 *
 * @since 1.0
 */
if (!class_exists('n00b_nav_walker')) {
	
	class n00b_nav_walker extends Walker_Nav_menu {
		
		function start_lvl( &$output, $depth = 0, $args = array() ) { // ul
			$indent  = str_repeat("\t",$depth); // indents the outputted HTML
			$submenu = ($depth > 0) ? ' sub-menu' : '';
			$output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\" data-depth=\"$depth\">\n";
		}
		
		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) { // li a span
		
			$indent = ( $depth ) ? str_repeat("\t",$depth) : '';
			
			$li_attributes = '';
			$class_names = $value = '';
			
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			
			$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
			$classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
			$classes[] = 'nav-item';
			$classes[] = 'nav-item-' . $item->ID;
			if( $depth && $args->walker->has_children ){
				// $classes[] = 'dropdown-menu';
			}
			
			$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
			$class_names = ' class="' . esc_attr($class_names) . '"';
			
			$id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
			$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
			
			$output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';
			
			$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
			$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
			$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
			$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
			
			$attributes .= ( $args->walker->has_children ) ? ' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : '';
			
			$item_output = $args->before;
			if ( $depth > 0 && $args->walker->has_children ) {
				$item_output .= '<a class="dropdown-item dropdown-toggle" ' . $attributes . '>';
			} else {
				if ( $depth == 0 && $args->walker->has_children ) {
					$item_output .= '<a class="dropdown-item dropdown-toggle" ' . $attributes . '>';
				} else {
					$item_output .= '<a class="dropdown-item" ' . $attributes . '>';
				}
			}
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;
			
			$output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			
		}
	}
}

/**
 * Custom Comments Callback
 *
 * @since  1.0
 * @param  string $comment
 * @param  array  $args
 * @param  int    $depth
 * @return string Updated comment form fields html
 *
 */
if (!function_exists('n00b_comments')) {
	
	function n00b_comments($comment, $args, $depth) {
		
		$GLOBALS['comment'] = $comment;
		
		if ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) { ?>
		
			<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
				<div class="comment-body">
					<?php esc_html_e('Pingback:', 'n00b'); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__('Edit', 'n00b'), '<span class="edit-link">', '</span>' ); ?>
				</div>
				
		<?php } else { ?>
			
			<li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
				<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
					<footer class="comment-meta">
						<div class="comment-author vcard">
							<?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
							<?php printf( esc_html_x('%1$s %2$s', '1: cite, 2: says', 'n00b'), sprintf('<cite class="fn">%s</cite>', get_comment_author_link()), sprintf('<span class="says">%s</span>', __('says:', 'n00b')) ); ?>
						</div>
						
						<?php if ('0' == $comment->comment_approved) { ?>
						<p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'n00b'); ?></p>
						<?php } ?>
						
						<div class="comment-metadata">
							<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
								<time datetime="<?php comment_time( 'c' ); ?>">
									<?php printf( _x('%1$s at %2$s', '1: date, 2: time', 'n00b'), get_comment_date(), get_comment_time() ); ?>
								</time>
							</a>
							<?php edit_comment_link( esc_html__('Edit', 'n00b'), '<span class="edit-link">', '</span>' ); ?>
						</div>
					</footer>
					
					<div class="comment-content">
						<?php comment_text(); ?>
					</div>
					
					<?php
						comment_reply_link( array_merge( $args, array(
							'add_below' => 'div-comment',
							'depth'     => $depth,
							'max_depth' => $args['max_depth'],
							'before'    => '<div class="reply">',
							'after'     => '</div>',
						) ) );
					?>
				</article>
				
			<?php
		}
	}
}

/**
 * Update default form fields and add "required" span
 *
 * @since  1.0
 * @param  array  $fields The default comment fields
 * @return string         Updated comment form fields html
 *
 */
add_filter('comment_form_fields', 'n00b_comment_form_default_fields');
if (!function_exists('n00b_comment_form_default_fields')) {
	function n00b_comment_form_default_fields($fields) {
		
		$commenter = wp_get_current_commenter();
		$req       = get_option('require_name_email');
		$aria_req  = $req ? " aria-required='true'" : '';
		
		$fields['author'] = '<div class="comment-form-author"><label for="author">' . esc_html__('Name', 'n00b') . ($req ? ' <span class="required">*</span>' : '') . '</label><br />  <input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></div>';
		
		$fields['email'] = '<div class="comment-form-email"><label for="email">' . esc_html__('Email', 'n00b') . ($req ? ' <span class="required">*</span>' : '') . '</label><br />  <input id="email" email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></div>';
		
		$fields['url'] = '<div class="comment-form-url"><label for="url">' . esc_html__('Website', 'n00b') . '</label><br />' . '<input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></div>';
		
		$fields['comment'] = '<div class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun', 'n00b') . ' <span class="required">*</span></label><br /><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="col-md-12"></textarea></div>';
		
		return $fields;
	}
}

/**
 * Display navigation to next/previous pages when applicable
 *
 * @since 1.0
 */
if (!function_exists('n00b_adjacent_posts')) {
	
	function n00b_adjacent_posts() {
		
		global $post;
		
		/* Don't print empty markup on single pages if there's nowhere to navigate */
		$previous = is_attachment() ? get_post($post->post_parent) : get_adjacent_post(false, '', true);
		$next     = get_adjacent_post(false, '', false);
		
		/* don't show anything if there are adjacent posts */
		if (!$next && !$previous)
			return;
		
		?>
		<nav id="content-nav" class="post-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php _e('Post navigation', 'n00b'); ?></h2>
			
			<?php previous_post_link('<div class="nav-previous">%link</div>', '<span class="meta-nav">'. _x('&larr;', 'Previous post link', 'n00b') .'</span> %title'); ?>
			<?php next_post_link('<div class="nav-next">%link</div>', '%title <span class="meta-nav">'. _x('&rarr;', 'Next post link', 'n00b') .'</span>'); ?>
			
		</nav><!-- #content-nav -->
		<?php
	}
}

/**
 * Paginated link for archive post pages.
 *
 * @since 1.0
 */
if (!function_exists('n00b_pages_navigation')) {
	
	function n00b_pages_navigation() {
		
		global $wp_query;
		
		$bignum = 999999999;
		
		if ($wp_query->max_num_pages <= 1)
			return;
		
		echo '<nav id="content-nav" class="paging-navigation" role="navigation">';
		
			echo paginate_links(array(
				'base'      => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
				'format'    => '',
				'current'   => max( 1, get_query_var('paged') ),
				'total'     => $wp_query->max_num_pages,
				'prev_text' => '&larr;',
				'next_text' => '&rarr;',
				'type'      => 'list',
				'end_size'  => 3,
				'mid_size'  => 3
			));
		
		echo '</nav>';
	}
}

/**
 * Displays page links for paginated posts (i.e. includes the <!--nextpage-->.
 * Quicktag one or more times). This tag must be within The Loop.
 *
 * @since 1.0
 */
if (!function_exists('n00b_content_pages')) {
	
	function n00b_content_pages() {
		wp_link_pages(apply_filters('n00b_content_link_pages', array(
			'before'      => '<nav id="content-pages" class="content-pages" role="navigation"><h3 class="content-pages-title">'. __('Pages:', 'n00b') .'</h3><ul>',
			'after'       => '</ul></nav>',
			'link_before' => '<li class="page-link">',
			'link_after'  => '</li>',
		)));
	}
}

/**
 * Sidebar columns class
 *
 * @since 1.0
 */
if (!function_exists('n00b_get_col_class')) {
	
	function n00b_get_col_class($sidebar_pos = '', $column_type, $custom_class = '') {
		
		if ('both' === $sidebar_pos || 'both_left' === $sidebar_pos || 'both_right' === $sidebar_pos) {
			
			$article_last       = ' order-1 order-md-1 order-lg-2';
			$sidebar_left_last  = ' order-2 order-md-2 order-lg-1';
			$sidebar_right_last = ' order-3 order-md-3 order-lg-3';
			if ('both_left' == $sidebar_pos) {
				$article_last       = ' order-1 order-md-1 order-lg-3';
				$sidebar_left_last  = ' order-2 order-md-2 order-lg-1';
				$sidebar_right_last = ' order-3 order-md-3 order-lg-2';
			} else if ('both_right' == $sidebar_pos) {
				$article_last       = ' order-1';
				$sidebar_left_last  = ' order-2';
				$sidebar_right_last = ' order-3';
			}
			
			$sidebar_left_col  = 'col-12 col-md-8 col-lg-3'. $sidebar_left_last;
			$sidebar_right_col = 'col-12 col-md-8 col-lg-3'. $sidebar_right_last;
			$article_col       = 'col-12 col-md-8 col-lg-6'. $article_last;
			
		} else if ('left' === $sidebar_pos || 'right' === $sidebar_pos) {
			
			if ('left' === $sidebar_pos) {
				$article_last       = ' order-1 order-md-1 order-lg-2';
				$sidebar_left_last  = ' order-2 order-md-2 order-lg-1';
				$sidebar_right_last = '';
			} else {
				$article_last       = '';
				$sidebar_left_last  = '';
				$sidebar_right_last = '';
			}
			
			$sidebar_left_col  = 'col-12 col-md-4'. $sidebar_left_last;
			$sidebar_right_col = 'col-12 col-md-4'. $sidebar_right_last;
			$article_col       = 'col-12 col-md-8'. $article_last;
			
		} else if ('none' === $sidebar_pos) {
			
			$sidebar_left_col  = '';
			$sidebar_right_col = '';
			$article_col       = 'col-12';
			
		} else {
			
			$sidebar_left_col  = '';
			$sidebar_right_col = '';
			$article_col       = 'col-12';
			
		}
		
		if ($column_type == 'sidebar_left_col')  return ($custom_class != '') ? $custom_class : $sidebar_left_col;
		if ($column_type == 'sidebar_right_col') return ($custom_class != '') ? $custom_class : $sidebar_right_col;
		if ($column_type == 'article_col')       return ($custom_class != '') ? $custom_class : $article_col;
		
		return false;
	}
}

/**
 * Get requested layout columns object
 *
 * @since 1.0
 */
if (!function_exists('n00b_custom_col_class')) {
	
	function n00b_custom_col_class($layout_cols = array()) {
		
		return array(
			'sl_custom_class' => isset($layout_cols['sl_custom_class']) ? $layout_cols['sl_custom_class'] : '', // Sidebar Left Custom Class
			'sr_custom_class' => isset($layout_cols['sr_custom_class']) ? $layout_cols['sr_custom_class'] : '', // Sidebar Right Custom Class
			'a_custom_class'  => isset($layout_cols['a_custom_class']) ? $layout_cols['a_custom_class'] : ''    // Article Custom Class
		);
	}
}

/**
 * Get option
 *
 * @since 1.0
 */
if (!function_exists('n00b_get_option')) {

	function n00b_get_option($option_name = '', $option_id = '', $object_id = 0, $args = array()) {
		
		extract($args);
		
		$prefix   = isset($metabox_prefix) ? $metabox_prefix : '';
		$use_type = isset($use_type) ? $use_type : 'theme';
		
		if (!empty($option_name) && empty($option_id)) {
			
			return class_exists('DilazPanel') ? DilazPanel::getOptions($option_name) : false;
			
		} else if (!empty($option_name) && !empty($option_id) && $object_id === 0) {
			
			return class_exists('DilazPanel') ? DilazPanel::getOption($option_name, $option_id) : false;
			
		} else if (!empty($option_id) && !empty($object_id) && $object_id > 0) {
			
			$metabox_setting = ($prefix != '') ? get_post_meta($object_id, $prefix.$option_id, true) : false;
			
			return (class_exists('DilazPanel') && ($metabox_setting == 'default' || !$metabox_setting)) ? DilazPanel::getOption($option_name, $option_id) : $metabox_setting;
		}
		
		return false;
	}
}

/**
 * Get layout container class
 *
 * @since 1.0
 */
if (!function_exists('n00b_container_class')) {
	
	function n00b_container_class($container_type = '') {
		
		switch($container_type) {
			case 'default_width':
				return 'container';
				break;
			
			case 'full_width':
				return 'container-fluid';
				break;
			
			case 'custom_width':
				add_action('wp_head', function() {
					$custom_width = n00b_get_option('n00b_options', 'custom_width', get_queried_object_id(), array('metabox_prefix' => N00B_META_PREFIX));
					if ($custom_width > 0) {
						echo '<style type="text/css">.wrapper { max-width: '. $custom_width .'}</style>';
					}
				}, 100);
				return 'container';
				break;
			
			default:
				return '';
				break;
		}
	}
}
