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
		<div class="col-12 breadcrumbs mb-3">
			<div id="breadcrumb"></div>
		</div>
		<div class="col-12 col-md-4 col-lg-3">
			<div class="section-menu">
				<div class="bread-title d-none"><?php the_title(); ?></div>
				<div class="bread-home d-none"><a href="<?php echo home_url('/'); ?>">Início</a></div>
				<?php get_sidebar(); ?>
			</div>
		</div>
		<div class="col-12 col-md-8 col-lg-9 mb-5">
			<?php while ( have_posts() ) : the_post(); ?>

				
				<div class="the-page">

					<!-- Conteúdo -->
					<?php 
					if ($post->post_name == 'diretoria' || $post->post_name == 'assessoria-pedagogica' ): ?>
						<?php get_template_part( 'template-parts/content', 'diretoria' ); ?>
					<?php elseif  ($post->post_name == 'graduacao' || $post->post_name == 'pos-graduacao' ): ?>
						<?php get_template_part( 'template-parts/content', 'cursos' ); ?>
					<?php elseif  ($post->post_name == 'avaliacao-institucional' ): ?>
						<?php get_template_part( 'template-parts/content', 'avaliacao-institucional' ); ?>
					<?php else: ?>
						<?php get_template_part( 'template-parts/content' ); ?>
					<?php endif ?>

					<!-- Galeria de Imagens -->
					<?php $galeria = get_field('galeria');
					if ($galeria): ?>
						<?php get_template_part( 'template-parts/content', 'galeria' ); ?>
					<?php endif ?>

					<!-- Portarias -->
					<?php
					if ($post->post_name == 'enade' ): ?>
						<?php get_template_part( 'template-parts/content', 'portarias-enade' ); ?>
					<?php endif ?>

					<!-- Projetos -->
					<?php
					if ($post->post_name == 'responsabilidade-social' ): ?>
						<?php get_template_part( 'template-parts/content', 'projetos' ); ?>
					<?php endif ?>



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
