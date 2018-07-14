<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fabel
 */

?>
<?php get_template_part( 'template-parts/pageheader' ); ?>
<?php the_content(); ?>
<?php if( have_rows('diretoria') ): 
	while ( have_rows('diretoria') ) : the_row(); ?>

		<div class="row diretor">
			<div class="col-4 col-md-3">
				<img class="img-fluid" src="<?php  echo get_sub_field('foto')['url'];?>" alt="">
			</div>
			<div class="col-8 col-md-9">
				<h3><?php  the_sub_field('nome');?></h3>
				<p class="cargo"><?php  the_sub_field('cargo');?></p>
				<div class="descricao">
					<?php  the_sub_field('descricao');?>
				</div>
			
			</div>
		</div>
       
	<?php endwhile; 
endif;?>