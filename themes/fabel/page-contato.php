<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fabel
 */

get_header(); ?>

<div class="container mt-3">
	<div class="row">
		<div class="col-12 col-md-8 col-lg-9 mb-5">
			<?php while ( have_posts() ) : the_post(); ?>

				
				<div class="the-page">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>	
		</div>
	</div>
</div>
<script>
	var breadcrumbs = jQuery('#breadcrumb');
	var section = jQuery('.section-menu h2.widget-title').html();
	var title = jQuery('.bread-title').html();
	var home = jQuery('.bread-home').html();
	var sep = "<i class='fas fa-arrow-right'></i>"

	breadcrumbs.empty().append(home + sep + section + sep + title);
</script>
<?php get_footer();
