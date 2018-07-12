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

<div class="container mt-5">
	<div class="row">
		<div class="col-12 col-md-4 col-lg-3">
			<div class="section-menu">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<div class="col-12 col-md-8 col-lg-9 mb-5">
			<?php while ( have_posts() ) : the_post(); ?>

				
				<div class="the-page">
					<div class="page-header" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
						<div class="shadow"></div>
						<div class="meta">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>

<?php get_footer();
