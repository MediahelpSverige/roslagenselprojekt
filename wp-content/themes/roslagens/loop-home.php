<article id="page-<?php the_ID() ?>">

	<?php

	$args = array( 'post_type' => 'bildspel', 'posts_per_page' => -1);
	$query = new WP_Query($args);

	?>
	<?php if($query->have_posts()){ ?>

		<div class="swiper-container" >
			<div class="swiper-wrapper">
<?php
		while($query->have_posts()){
			$query->the_post(); ?>
				<div id="homebanner" class="swiper-slide" style="background-image:linear-gradient(rgba(43, 43, 43, 0.2), rgba(105, 0, 0, 0.2)),  url('<?php the_post_thumbnail_url(); ?>')">
					<div class="container">
		<span class="slider-title"><?php 	the_title(); ?></span>
	</div>
	</div>

	<?php	}
		wp_reset_postdata(); ?>
</div>
<!-- If we need navigation buttons -->
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>
</div>
<?php	}?>
	<div class="container page-content">
		<div class="row">
			<div class="col-md-12">
				<h1 class="title">Välkommen till Roslagens Elprojekt AB</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-sm-8 ">

				<div class="border-wrap">
					<div class="article-section text">
							<?php the_content(); ?>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-md-offset-1 col-sm-offset-0">
				<div class="sidebar-fp">
					<h2 class="sidebar-title">Aktuellt</h2>
					<div class="border-wrap">
						<div class="news-item">
							<h4 class="news-title">Vi har en ny partner</h4>
							<?php the_field('aktuellt'); ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>
<script type="text/javascript">

</script>
