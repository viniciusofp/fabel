<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fabel
 */

?>
<?php if( have_rows('projetos') ): ?>
<h2>Projetos</h2>
<div id="accordion">

	<?php while( have_rows('projetos') ): the_row(); 

		// vars
		$nome = get_sub_field('nome');
		$conteudo = get_sub_field('conteudo');
		$slug = slugify($nome);
		?>

	<div class="card">
   	<div class="card-header" id="headingOne" data-toggle="collapse" data-target="#<?php echo $slug ?>" aria-expanded="true" aria-controls="collapseOne">
			<h2 class="mb-0 mt-0"><?php echo $nome ?></h2>
    </div>
    <div id="<?php echo $slug ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      	<?php echo $conteudo ?>

      </div>
    </div>
  </div>
	<?php endwhile; ?>

</div>

<?php endif; ?>

