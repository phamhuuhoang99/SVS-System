<!-- js -->
    <script type="text/javascript" src={{ asset("templates/eliteshoppy/js/jquery-2.1.4.min.js") }}></script>
    <!-- //js -->
    <script src={{ asset("templates/eliteshoppy/js/responsiveslides.min.js") }}></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
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
    <script src={{ asset("templates/eliteshoppy/js/modernizr.custom.js") }}></script>
    <!-- Custom-JavaScript-File-Links -->
    <!-- cart-js -->
    <script src={{ asset("templates/eliteshoppy/js/minicart.min.js") }}></script>
    <script>
        // Mini Cart
        paypal.minicart.render({
            action: '#'
        });

        if (~window.location.search.indexOf('reset=true')) {
            paypal.minicart.reset();
        }
    </script>

    <!-- //cart-js -->
    <!-- script for responsive tabs -->
    <script src={{ asset("templates/eliteshoppy/js/easy-responsive-tabs.js") }}></script>
    <script>
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
    <!-- //script for responsive tabs -->
    <!-- stats -->
    <script src={{ asset("templates/eliteshoppy/js/jquery.waypoints.min.js") }}></script>
    <script src={{ asset("templates/eliteshoppy/js/jquery.countup.js") }}></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!---->
    <script type='text/javascript'>//<![CDATA[
	    $(window).load(function(){
	    $( "#slider-range" ).slider({
				    range: true,
				    min: 0,
				    max: 9000,
				    values: [ 1000, 7000 ],
				    slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
				    }
	    });
	    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

	    });//]]>

	</script>
    <script type="text/javascript" src={{ asset("templates/eliteshoppy/js/jquery-ui.js") }}></script>
<!---->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src={{ asset("templates/eliteshoppy/js/move-top.js") }}></script>
    <script type="text/javascript" src={{ asset("templates/eliteshoppy/js/jquery.easing.min.js") }}></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- here stars scrolling icon -->
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

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //here ends scrolling icon -->

    <!-- FlexSlider -->
    <script src={{ asset("templates/eliteshoppy/js/jquery.flexslider.js") }}></script>
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
    <!-- //FlexSlider-->
    <!-- single -->
    <script src={{ asset("templates/eliteshoppy/js/imagezoom.js") }}></script>
    <!-- single -->


    <!-- for bootstrap working -->
    <script type="text/javascript" src={{ asset("templates/eliteshoppy/js/bootstrap.js") }}></script>