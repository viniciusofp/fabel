<?php
/**
 * Template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="search-field" name="s" id="s" placeholder="Pesquisar" />
		<button type="submit" class="submit" name="submit" id="searchsubmit" ><i class="fas fa-search"></i></button>
	</form>