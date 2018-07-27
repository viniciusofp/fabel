<h2>Edições</h2>
<?php if(have_rows('edicoes')) : while (have_rows('edicoes')) : the_row(); ?>
	<div class="row mb-3">
		<div class="col-12 col-sm-6">
			<img src="<?php the_sub_field('capa') ?>" alt="" class="img-fluid">
		</div>
		<div class="col-12 col-sm-6">
			<h3><?php the_sub_field('titulo') ?></h3>
			<?php the_sub_field('conteudo') ?>
		</div>
	</div>
<?php endwhile; endif; ?>