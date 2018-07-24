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
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png" sizes="16x16" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '837685653089439'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=837685653089439&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

	<!-- Global site tag (gtag.js) - AdWords: 802921756 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-802921756"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-802921756'); </script>
	
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
