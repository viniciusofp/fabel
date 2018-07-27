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
<div class="home-main">
	<div class="container">
		<div class="row the-page">
			<div class="col-12">
				<?php if ( is_active_sidebar( 'home-banner' ) ) : ?>
					<?php dynamic_sidebar( 'home-banner' ); ?>
				<?php endif; ?>
			</div>



			<?php get_template_part( 'template-parts/content', 'destaques' ); ?>

		</div>
	</div>
</div>


<div class="container mt-5 mb-5">
	<div class="row the-page">
		<div class="col-12 mb-3">
			<h1>Blog 	<a href="<?php home_url('/blog'); ?>"><button class="btn btn-light ml-2">Ver mais</button></a></h1>
		</div>
		<?php 
		$args = array(
			'post_type' => 'post',
		  'posts_per_page' => 8,
		);
		$the_query = new WP_Query( $args ); 
		if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="col-12 col-sm-6 col-lg-3 blog-item">
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
		<?php endif; ?>
	</div>
</div>
<?php get_footer();
