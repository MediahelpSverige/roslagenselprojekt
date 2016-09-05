		<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/vendor/Swiper/dist/js/swiper.min.js"></script>
		</div>

		<footer id="page-footer">
		<div class="footer-top"></div>
		<div class="container">
			<p class="footer-copyright">Copyright &copy; <?= date('Y') ?> <?php bloginfo('name') ?></p>
			</div>
		</footer>

			<script type="text/javascript">
			console.log('test');

		 jQuery(function($) {
		 	$(document).ready(function(){


		 						$('.fa-search').click(function(){
					console.log('klick');
					$('.searchbar').slideToggle();
				})



		 			$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $(this).addClass('animated ' + 'fadeInUp').one(animationEnd, function() {
            $(this).removeClass('animated ' + 'fadeInUp');
        });
    }
});


		 		$('.btn-white')
		 			.mouseover(function(){
		 			$(this).addClass('jello');

		 			})

		 			 .mouseout(function() {
		 			 	$(this).removeClass('jello').delay( 800 );
		 			 });

		 		var i = 0;

    //initialize swiper when document ready  
	//initialize swiper when document ready
	var mySwiper = new Swiper ('.swiper-container', {
	// Optional parameters
	loop: true,
	autoplay: 6000,
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	pagination: '.swiper-pagination',
	paginationClickable: true,
	parallax: false,
        speed: 600,

    onSlideChangeStart: function(swiper) {
    	$('.swiper-text').css({

			display: "none",

		})
    },

	onSlideChangeEnd: function(swiper) {

		$('.swiper-text').css({

			display: "block",

		}),

		$('.swiper-text').animateCss('fadeInUp');
		

	}

	})






	$('.swiper-text').animateCss('fadeInUp');






    		 	});    
  });

	</script>

		<?php wp_footer() ?>

		
	</body>



</html>
