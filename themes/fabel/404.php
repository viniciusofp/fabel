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

<?php
$uri = $_SERVER['REQUEST_URI']; 
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<div class="container error404">
	<div class="row">
		<div class="col-12 text-center">
			<h1 class=""><small>Erro 404</small><br>Ops!</h1>
			<h3>Página não encontrada.</h3>
			<p>O endereço abaixo não existe neste site:<br><strong><?php echo $url; ?></strong></p>
			<a href="<?php echo home_url() ?>"><button class="btn btn-primary mb-3">Volte para a <strong>página inicial</strong></button></a>
			<p>Ou pesquise abaixo:</p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer();