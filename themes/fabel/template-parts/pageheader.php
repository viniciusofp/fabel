<?php if (has_post_thumbnail()): ?>
	<div class="page-header" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
		<div class="shadow"></div>
		<div class="meta">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
<?php else: ?>
	<h1 class="mb-4"><?php the_title(); ?></h1>
<?php endif ?>