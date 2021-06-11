<!-- header -->
     <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

<!-- for gallery js -->
    <script src={{ URL::asset("templates/food-chef/js/lightbox-plus-jquery.min.js") }}></script>

<!-- js -->
	<script src={{ URL::asset("templates/food-chef/js/jquery-2.1.4.min.js") }} type="text/javascript"></script>
	<!-- for bootstrap working -->
	<script src={{ URL::asset("templates/food-chef/js/bootstrap.js") }}></script>
	<!-- //for bootstrap working -->
<!-- //js -->

 <!-- /Responsive slides js -->
    <script src={{ URL::asset("templates/food-chef/js/responsiveslides.min.js") }}></script>

	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
	        // Slideshow 4
		    $("#slider4").responsiveSlides({
			    auto: true,
				pager:true,
				nav:false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
			        $('.events').append("<li>before event fired.</li>");
				},
				after: function () {
				    $('.events').append("<li>after event fired.</li>");
				}
		    });
		});
    </script>

	<script>
	    // You can also use "$(window).load(function() {"
		$(function () {
		    // Slideshow 4
		    $("#slider3").responsiveSlides({
				auto: true,
				pager:false,
				nav:true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
				    $('.events').append("<li>before event fired.</li>");
				},
				after: function () {
				    $('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
 <!-- Responsive slides js -->

<!-- animation effects-js files-->
	<script src={{ URL::asset("templates/food-chef/js/aos.js") }}></script><!-- //animation effects-js-->
	<script src={{ URL::asset("templates/food-chef/js/aos1.js") }}></script><!-- //animation effects-js-->
<!-- animation effects-js files-->

<!-- //here starts scrolling icon -->
	<script src={{ URL::asset("templates/food-chef/js/SmoothScroll.min.js") }}></script>
	<script src={{ URL::asset("templates/food-chef/js/move-top.js") }} type="text/javascript"></script>
    <script src={{ URL::asset("templates/food-chef/js/easing.js") }} type="text/javascript"></script>

	<!-- here stars scrolling script -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
    <script type="text/javascript">
	    jQuery(document).ready(function($) {
		    $(".scroll").click(function(event){
			    event.preventDefault();
			    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		    });
	    });
    </script>
<!-- //scrolling script -->

<!--banner Slider starts Here-->
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
	  		// Slideshow 4
	  		$("#slider3").responsiveSlides({
				auto: true,
				pager:true,
				nav:false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
				    $('.events').append("<li>before event fired.</li>");
				},
				after: function () {
		  			$('.events').append("<li>after event fired.</li>");
				}
	  		});
		});
 	</script>