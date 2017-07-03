<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <section id="breadcrumb">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package    WordPress
 * @subpackage n00b
 * @since      1.0
 * @version    1.0
 */

?><!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php
		// if (true == of_get_option('meta_author'))
			// echo '<meta name="author" content="' . of_get_option("meta_author") . '" />';

		// if (true == of_get_option('meta_google'))
			// echo '<meta name="google-site-verification" content="' . of_get_option("meta_google") . '" />';
	?>

	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	
	<?php //if(of_get_option('favicon') != ''){ ?>
	<link rel="icon" href="<?php //echo of_get_option('favicon', '' ); ?>" type="image/x-icon" />
	<?php //} else { ?>
	<link rel="icon" href="<?php //echo CHILD_URL; ?>/favicon.ico" type="image/x-icon" />
	<?php //} ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- Application-specific meta tags -->
	<?php
		// Windows 8
		// if (true == of_get_option('meta_app_win_name')) {
			// echo '<meta name="application-name" content="' . of_get_option("meta_app_win_name") . '" /> ';
			// echo '<meta name="msapplication-TileColor" content="' . of_get_option("meta_app_win_color") . '" /> ';
			// echo '<meta name="msapplication-TileImage" content="' . of_get_option("meta_app_win_image") . '" />';
		// }
		
		// Twitter
		// if (true == of_get_option('meta_app_twt_card')) {
			// echo '<meta name="twitter:card" content="' . of_get_option("meta_app_twt_card") . '" />';
			// echo '<meta name="twitter:site" content="' . of_get_option("meta_app_twt_site") . '" />';
			// echo '<meta name="twitter:title" content="' . of_get_option("meta_app_twt_title") . '">';
			// echo '<meta name="twitter:description" content="' . of_get_option("meta_app_twt_description") . '" />';
			// echo '<meta name="twitter:url" content="' . of_get_option("meta_app_twt_url") . '" />';
		// }
		
		// Facebook
		// if (true == of_get_option('meta_app_fb_title')) {
			// echo '<meta property="og:title" content="' . of_get_option("meta_app_fb_title") . '" />';
			// echo '<meta property="og:description" content="' . of_get_option("meta_app_fb_description") . '" />';
			// echo '<meta property="og:url" content="' . of_get_option("meta_app_fb_url") . '" />';
			// echo '<meta property="og:image" content="' . of_get_option("meta_app_fb_image") . '" />';
		// }
	?>
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<!-- START wrapper -->
<div class="wrapper">

<!-- START header -->
<header id="header" class="header" role="banner">

	<?php if (has_nav_menu('main-menu')) { ?>

		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">
						<span class="sr-only"><?php _e('Toggle navigation', 'n00b'); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="logo">
						<?php if (!has_custom_logo()) { ?>
							<a class="navbar-brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>">
							</a>
						<?php } else {
							the_custom_logo();
						} ?>
					</div>
				</div>
				<?php n00b_main_nav(); ?>
			</div>
		</nav>
		
	<?php } ?>
	
</header>
<!-- END #header -->

<!-- START main -->
<main role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

	<!-- START breadcrumb -->
	<section id="breadcrumb">
		<div class="container">
			<div class="row">
				
			</div>
		</div>
	</section>
	<!-- END #breadcrumb -->
	