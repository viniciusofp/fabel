<div class="col-12 col-lg-8">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

		<ol class="carousel-indicators">
	  	<?php 
	  	$count = -1;
	  	if(have_rows('slider')) : while (have_rows('slider')) : the_row();
  		$count++;
  		if ($count == 0) {
  			$class = 'active';
  		} else {
  			$class = '';
  		} ?>

	  	<li data-target="#carouselExampleControls" data-slide-to="<?php echo $count ?>" class="<?php echo $class ?>"></li>

		  <?php endwhile; endif; ?>
		</ol>

	  <div class="carousel-inner">
	  	<?php 
	  	$count = 0;
	  	if(have_rows('slider')) : while (have_rows('slider')) : the_row();
  		$count++;
  		if ($count == 1) {
  			$class = 'active';
  		} else {
  			$class = '';
  		}
  		$image = get_sub_field('imagem');
	  	?>

	    <div class="carousel-item <?php echo $class ?>">
	    	<a href="<?php the_sub_field('link') ?>">
	    		<div class="carousel-item-container" style="background-image: url('<?php echo $image ?>');">
		    		<div class="meta">
			    		<h2><?php the_sub_field('titulo') ?></h2>
				      <p><?php the_sub_field('linha_fina') ?></p>
			    	</div>
				    <div class="shadow"></div> 
		    	</div>
	    	</a>
	    </div>

	  	<?php endwhile; endif; ?>
	  </div>
	</div>
</div>

<div class="col-12 col-lg-4">
	<div class="row">

		<div class="col-12 col-sm-6 col-lg-12">
			<?php
				$destaque_1 = get_field('destaque_1');
			?>
			<a href="<?php echo $destaque_1['link'] ?>">
				<div class="destaque" style="background-image: url('<?php echo $destaque_1['imagem'] ?>');">
					<div class="meta">
						<h2><?php echo $destaque_1['titulo'] ?></h2>
						<p><?php echo $destaque_1['linha_fina'] ?></p>
					</div>
					<div class="shadow"></div>
				</div>
			</a>
		</div>

		<div class="col-12 col-sm-6 col-lg-12">				
			<?php
				$destaque_2 = get_field('destaque_2');
			?>
			<a href="<?php echo $destaque_2['link'] ?>">
				<div class="destaque" style="background-image: url('<?php echo $destaque_2['imagem'] ?>');">
					<div class="meta">
						<h2><?php echo $destaque_2['titulo'] ?></h2>
						<p><?php echo $destaque_2['linha_fina'] ?></p>
					</div>
					<div class="shadow"></div>
				</div>
			</a>
		</div>

	</div>
</div>