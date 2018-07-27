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
		<div class="col-12">
			<?php while ( have_posts() ) : the_post(); ?>

				
				<div class="the-page">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>	
		</div>
	</div>
</div>
<div class="contato-mapa">
	<iframe src="<?php the_field('mapa') ?>" width="100%" height="450" frameborder="0" style="border:0; margin-bottom: -6px;" allowfullscreen></iframe>
</div>

<?php get_footer();