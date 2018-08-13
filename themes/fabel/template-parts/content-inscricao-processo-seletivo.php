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
<div class="row">
	<div class="col-sm-6 col-md-12 col-lg-6 col-xl-8">
		<?php the_content(); ?>
	</div>
	<div class="col-sm-6 col-md-12 col-lg-6 col-xl-4">
		<h2>Login</h2>
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
</div>
