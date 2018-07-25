<?php 
$portarias = get_field('portarias'); ?>

<h3>Portarias</h3>

<?php if( have_rows('portarias') ): while( have_rows('portarias') ): the_row(); ?>

<p class="mb-1"><a href="<?php echo get_sub_field('link'); ?>" target="_blank"><strong><i class="fas fa-link mr-2"></i><?php echo get_sub_field('nome') ?></strong></a></p>
<p><small><?php echo get_sub_field('descricao') ?></small></p>

<?php endwhile; endif; ?>