<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes() ?>><!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title( '|', true, 'right' ) ?></title>
		<meta name="author" content="">
		<link rel="author" href="<?php bloginfo('templare_url');?>/js/vendor/swiper/dist/swiper.css">
		<?php wp_head() ?>
		<script src="https://use.typekit.net/qvv2adn.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
    </head>
    <body <?php body_class() ?>>
		<header id="page-header">
		<div class="container">
			<h1 id="page-logo">
				<?php if (!is_front_page()): ?>
					<a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?> - <?php bloginfo('description') ?>">
						
						<img src="<?php bloginfo('url') ?>/wp-content/uploads/2016/05/elprojekt.png" alt="<?php bloginfo('name') ?>">
					</a>
				<?php else: ?>
					<img src="<?php bloginfo('url') ?>/wp-content/uploads/2016/05/elprojekt.png" alt="<?php bloginfo('name') ?>">
				<?php endif; ?>
			</h1>
			<?php wp_nav_menu(array(
				'theme_location' => 'main-nav',
				'container'      => 'nav',
				'container_id'   => 'primary-nav'
			)) ?>
			<div class="clearfix"></div>
			</div>
		</header>
		<div id="fullpage-wrap">
