<article id="page-<?php the_ID() ?>">

<div class="container">

<div class="row">
<div class="col-md-12">
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

</div>
<div class="row">
<div class="col-md-12">
			<?php 
			$args = array('post_type' => 'work', 'posts_per_page' => -1);

			$query = new WP_Query($args);

			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post(); ?>
					<div class="medarbetare col-sm-6 col-md-4">
					<div class="medarbetare-img" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>');"></div>
					<?php the_title('<h3>','</h3>'); ?>
					<?php the_content(); ?>
					</div>
			<?php	} // end while
			} // end if
?>

	</div>

</div>

</div>
</article>