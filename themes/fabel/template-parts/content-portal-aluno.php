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
<div>
	<h3>Autenticação</h3>
	<form action="" class="form" style="max-width: 300px;">
		<div class="form-group">
			<label for="" class="form-label">Matrícula</label>
			<input type="text" class="form-control" placeholder="Matrícula">
		</div>
		<div class="form-group">
			<label for="" class="form-label">Senha</label>
			<input type="text" class="form-control" placeholder="Senha">
		</div>
		<button class="btn btn-primary mt-3">Entrar</button>
	</form>
</div>