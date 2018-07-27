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

		<div class="col-12 col-md-4 col-lg-3 order-2 order-md-1">
			<div class="section-menu">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<div class="col-12 col-md-8 col-lg-9 mb-5 order-1 order-md-2 the-page">
			<div class="mb-3"><?php get_template_part( 'template-parts/pageheader' ); ?></div>
			<div class="row">

				<?php 
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array(
					'post_type' => 'evento',
				  'posts_per_page' => 6,
				  'paged'          => $paged
				);
				$the_query = new WP_Query( $args ); 
				if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<div class="col-12 col-sm-6 col-xl-4 blog-item">
						<?php if (has_post_thumbnail()): ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
						<?php else : ?>
						<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/default_thumbnail.jpg" alt=""></a>
						<?php endif ?>
						<div class="meta">
							<a href="<?php the_permalink(); ?>"><h2 class="title"><?php the_title(); ?></h2></a>
							<p><?php the_excerpt(); ?> - <strong><a href="<?php the_permalink(); ?>">Leia Mais</a></strong></p>
						</div>
					</div>

				<?php endwhile; wp_reset_postdata(); ?>
					<div class="col-12">
						<?php if (function_exists("pagination")) {
				      pagination($the_query->max_num_pages);
				    } ?>	
					</div>
				<?php endif; ?>			

			</div>
		</div>
	</div>
</div>
<?php get_footer();
