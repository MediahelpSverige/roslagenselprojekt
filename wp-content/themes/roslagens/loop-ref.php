<article id="page-<?php the_ID() ?>">

<div class="container">


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
<div class="row">
<div class="col-md-8">
			<?php

$query8 = new WP_Query(array( 'post_type' => 'referens', 'post_per_page' => -1) );
			//print_r($query8);
			while ( $query8->have_posts() ) : $query8->the_post(); ?>
			<div class="tips-item">
			<div class="border-wrap">
			<?php the_title('<h2 class="small-title">', '</h2>');  ?>
			<?php the_content();?>
			<?php the_post_thumbnail('large'); ?>
<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
<!--<a href="#" class="print">skriv ut</a>-->
			</div>
			</div>
			<?php endwhile;?>


	</div>
	<div class="col-md-4">
		<div class="border-wrap">
		<h2 class="small-title">Kontaktuppgifter</h2>
			<p>Kontakt
Telefon: 0176-22 90 01
E-post: info@roslagenselprojekt.se
Roslagens Elprojekt AB
Box 77
761 21 NORRTÄLJE</p>
		</div>
	</div>
</div>
</div>
</article>