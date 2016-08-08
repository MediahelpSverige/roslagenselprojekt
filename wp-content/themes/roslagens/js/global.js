require.config({
	baseUrl: "wp-content/themes/roslagens/js",
	paths: {
		jquery: "\\vendor\\jquery\\jquery",
		Swiper: "\\vendor\\Swiper\\dist\\js\\swiper",
		parallax: "\\vendor\\parallax.js",
		"parallax.js": "\\vendor\\parallax.js\\parallax"
	}
});

require(['jquery'], function($) {
	console.log('Working!!');
});
