<article id="page-<?php the_ID() ?>">

<div class="container">

<div class="row">
<div class="col-md-12">
	<div class="map"><?php the_field('karta');?></div>
</div>
<div class="col-md-6 col-sm-6">
			<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					//
					// Post Content here
					the_title('<h1>','</h1>');
					the_content();
					//
				} // end while
			} // end if
?>

	</div>
	<div class="col-md-6 col-sm-6">
		<?php the_field('kontaktformular');?>
	</div>
</div>

</div>
</article>