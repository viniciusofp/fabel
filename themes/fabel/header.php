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
<!-- <nav id="header-main">
	<?php wp_nav_menu( array( 'theme_location' => 'header-main' ) ); ?>
</nav> -->

<nav class="navbar navbar-expand-md navbar-dark navwalker-main container-fluid" role="navigation">
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<?php 
	wp_nav_menu( array(
		'theme_location'  => 'header-main',
		'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
		'container'       => 'div',
		'container_class' => 'collapse navbar-collapse',
		'container_id'    => 'bs-example-navbar-collapse-1',
		'menu_class'      => 'navbar-nav mr-auto',
		'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
		'walker'          => new WP_Bootstrap_Navwalker(),
	) );
	?>	
	</div>
</nav>





	<div id="content" class="site-content">
