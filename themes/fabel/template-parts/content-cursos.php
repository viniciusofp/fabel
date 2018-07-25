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
<?php if( have_rows('cursos') ): ?>
<div id="accordion">

	<?php while( have_rows('cursos') ): the_row(); 

		// vars
		$nome = get_sub_field('nome');
		$objetivo = get_sub_field('objetivo');
		$portaria = get_sub_field('portaria');
		$slug = slugify($nome);
		$total_geral = 0;
		?>

	<div class="card">
   	<div class="card-header" id="headingOne" data-toggle="collapse" data-target="#<?php echo $slug ?>" aria-expanded="true" aria-controls="collapseOne">
			<h2 class="mb-0 mt-0"><?php echo $nome ?></h2>
    </div>
    <div id="<?php echo $slug ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      	<p><small><?php echo $portaria ?></small></p>
      	<h3>Objetivo</h3>
        <?php echo $objetivo ?>
      	<h3>Ementa</h3>
				<button  class="ementa-button btn btn-primary mb-3" data-toggle="collapse" data-target="#<?php echo $slug . '-ementa' ?>">Exibir relação de disciplinas<i class="ml-2 fas fa-caret-down"></i></button>
				<div id="<?php echo $slug . '-ementa' ?>" class="semestres collapse">
      	<?php if ( have_rows('semestre') ) : while ( have_rows('semestre') ) : the_row();?>
					<div class="semestre">
						
						<?php if (get_sub_field('numero') == 0): ?>
	    				<h4>Componentes Optativos</h4>
						<?php else : ?>
	    				<h4><?php echo get_sub_field('numero') ?><i class="fas fa-genderless"></i> Semestre</h4>
						<?php endif ?>
						<ul>
						<?php $horas_total = 0;
						 ?>
						<?php if ( have_rows('disciplinas') ) : while ( have_rows('disciplinas') ) : the_row();?>
						<?php 
							$nome_da_disciplina = get_sub_field('nome_da_disciplina');
							$ementa = get_sub_field('ementa');
							$carga_horaria = get_sub_field('carga_horaria');
							$horas_total = $horas_total + $carga_horaria;
						?>
							<?php if ($ementa) :?>
							<a href="<?php echo $ementa ?>" target="_blank"><li><i class="fas fa-file-pdf mr-2"></i><?php echo $nome_da_disciplina ?> <span class="float-right">Carga horária: <?php echo $carga_horaria; ?></span></li></a>
							<?php else: ?>
							<li><?php echo $nome_da_disciplina ?> <span class="float-right">Carga horária: <?php echo $carga_horaria; ?></span></li>
							<?php endif; ?>
						<?php endwhile; endif; ?>

						</ul>
						<?php if (get_sub_field('numero') != 0): $total_geral = $total_geral + $horas_total?>
							<p class="text-right"><strong>Subtotal:</strong> <?php echo $horas_total; ?> horas/aula</p>
						<?php endif ?>
					</div>

      	<?php endwhile; endif; ?>
      		<h5 class="ml-3 mt-3 mb-3">Total Geral: <?php echo $total_geral ?></h5>
				</div> <!-- end semestres -->

				<?php 
				$informacoes_adicionais = get_sub_field('informacoes_adicionais');
				if ($informacoes_adicionais) :?>
				<h3 class="mt-4">Informações Adicionais</h3>
				<?php echo $informacoes_adicionais ?>
				<?php endif ?>
      </div>
    </div>
  </div>
	<?php endwhile; ?>

</div>
<script>
	jQuery('.ementa-button').click(function() {
		console.log('alo')
		jQuery(this).children('i').toggleClass('fa-caret-down');
		jQuery(this).children('i').toggleClass('fa-caret-up');
	})
</script>
<?php endif; ?>
<?php if( have_rows('cursos_externos') ): ?>
<div id="accordion2">

	<?php while( have_rows('cursos_externos') ): the_row(); 

		// vars


		$curso = get_sub_field('curso_externo');
		$nome = $curso['nome'];
		$link = $curso['link'];
		$informacoes_adicionais = $curso['informacoes_adicionais'];
		$slug = slugify($nome);

		?>

	<div class="card">
   	<div class="card-header" id="headingOne" data-toggle="collapse" data-target="#<?php echo $slug ?>" aria-expanded="true" aria-controls="collapseOne">
			<h2 class="mb-0 mt-0"><?php echo $nome ?></h2>
    </div>
    <div id="<?php echo $slug ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      	<a href="<?php echo $link ?>" target="_blank"><button class="btn-primary btn">Visitar página do curso <strong><?php echo $nome; ?></strong></button></a>
        

				<?php 
				if ($informacoes_adicionais) :?>
				<h3 class="mt-4">Informações Adicionais</h3>
				<?php echo $informacoes_adicionais ?>
				<?php endif ?>
      </div>
    </div>
  </div>
	<?php endwhile; ?>

</div>
<script>
	jQuery('.ementa-button').click(function() {
		console.log('alo')
		jQuery(this).children('i').toggleClass('fa-caret-down');
		jQuery(this).children('i').toggleClass('fa-caret-up');
	})
</script>
<?php endif; ?>
