<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fabel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

<nav id="header-superior">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php wp_nav_menu( array( 'theme_location' => 'header-superior' ) ); ?>
			</div>
		</div>
	</div>
</nav>
<div class="header-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header-bg.jpg')">
	<a href="<?php echo home_url('/') ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/header-logo.png" alt=""></a>
</div>
<nav id="header-main">
	<?php wp_nav_menu( array( 'theme_location' => 'header-main' ) ); ?>
</nav>

	<div id="content" class="site-content">
