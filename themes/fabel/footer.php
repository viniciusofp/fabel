<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fabel
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php the_custom_logo(); ?>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-6 col-sm-6 col-md-4 col-lg-2">
					<h5>A Fabel</h5>
					<?php wp_nav_menu( array( 'theme_location' => 'fabel' ) ); ?>
				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-2">
					<h5>Cursos</h5>
					<?php wp_nav_menu( array( 'theme_location' => 'cursos' ) ); ?>
				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-2">
					<h5>Serviços</h5>
					<?php wp_nav_menu( array( 'theme_location' => 'servicos' ) ); ?>
				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-2">
					<h5>Processo Seletivo</h5>
					<?php wp_nav_menu( array( 'theme_location' => 'processo-seletivo' ) ); ?>
				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-2">
					<h5>Portal Acadêmico</h5>
					<?php wp_nav_menu( array( 'theme_location' => 'portal-academico' ) ); ?>
				</div>
				<div class="col-6 col-sm-6 col-md-4 col-lg-2">
					<?php wp_nav_menu( array( 'theme_location' => 'outros' ) ); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<?php if ( is_active_sidebar( 'social-footer' ) ) : ?>
					<?php dynamic_sidebar( 'social-footer' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
