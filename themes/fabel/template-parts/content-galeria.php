<?php $galeria = get_field('galeria'); ?>
<button data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-light btn-lg w-100 mt-3"><h2><i class="far fa-images mr-3"></i>Galeria de Imagens</h2></button>
<!-- Button trigger modal -->
<!-- 						<button type="button" class="btn btn-dark">
  Abrir Galeria
</button> -->

<!-- Modal -->
<div class="modal fade galeriadeimagens" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			  	<?php 
			  	$count = 0;
			  	$class = '';
			  	foreach( $galeria as $image ): if ($count == 0) $class = 'active'?>
			    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $count ?>" class="<?php echo $class ?>">
			    	<img class="img-fluid" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="">
			    </li>
			    <?php $class = ''; $count++; endforeach; ?>
			  </ol>
			  <div class="carousel-inner">
			  	<?php 
			  	$count = 0;
			  	$class = '';
			  	foreach( $galeria as $image ): $count++; if ($count == 1) $class = 'active'?>
						<div class="carousel-item <?php echo $class ?>">
			      	<img class="d-block w-100" src="<?php echo $image['sizes']['large']; ?>" alt="First slide">
		      	  <div class="carousel-caption d-none d-md-block">
								<p><?php echo $image['caption']; ?></p>
							</div>
			    	</div>
					<?php $class = ''; endforeach; ?>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Próxima</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Anterior</span>
			  </a>
			</div>
    </div>
  </div>
</div>