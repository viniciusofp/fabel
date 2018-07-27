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
<?php while ( have_posts() ) : the_post(); ?>

<div class="container">
	<div class="row">

		
		<div class="col-12 col-md-8 col-xl-9">
				<div class="the-page mt-5 mb-5">
					<?php get_template_part( 'template-parts/pageheader' ); ?>
					<p><small><?php the_date(); ?></small></p>
					<ul class="list-inline share-menu">
						<li class="list-inline-item">
							<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a target="_blank" href="https://twitter.com/home?status=a<?php the_title(); echo ' - '; the_permalink(); ?>"><i class="fab fa-twitter"></i>
							</a>
						</li>
					</ul>
					<?php the_content() ?>

					<!-- Galeria de Imagens -->
					<?php $galeria = get_field('galeria');
					if ($galeria): ?>
						<?php get_template_part( 'template-parts/content', 'galeria' ); ?>
					<?php endif ?>
				</div>
		</div>

		<div class="col-12 col-md-4 col-xl-3 mt-5 the-page section-menu">
			<?php get_sidebar('sidebar-adicional') ?>
			<h3>Eventos Recentes</h3>
			<?php 
			$args = array(
				'post_type' => 'evento',
			  'posts_per_page' => 3,
			  'post__not_in' => array($post->ID),
			);
			$the_query = new WP_Query( $args ); 
			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="blog-item">
					<?php if (has_post_thumbnail()): ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
					<?php else : ?>
					<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/default_thumbnail.jpg" alt=""></a>
					<?php endif ?>
					<div class="meta">
						<a href="<?php the_permalink(); ?>"><h2 class="title"><?php the_title(); ?></h2></a>
						<?php the_excerpt(); ?> - <strong><a href="<?php the_permalink(); ?>">Leia Mais</a></strong>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata(); endif; ?>
		</div>

	</div>
</div>
<?php endwhile; ?>
<?php get_footer();
