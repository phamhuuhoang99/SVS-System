<!-- js -->
    <script type="text/javascript" src={{ asset("templates/pedicure/js/jquery-2.1.4.min.js") }}></script>
    <!-- for bootstrap working -->
    <script src={{ asset("templates/pedicure/js/bootstrap.js") }}></script>
    <!-- //for bootstrap working -->
    <!-- //js -->
    <!-- for banner js file-->
    @if(Route::currentRouteName()=="temp.pedicure.index")
    <script type="text/javascript" src={{ asset("templates/pedicure/js/jquery.zoomslider.min.js") }}></script>
    @endif

    <!-- zoomslider js -->
    <!-- //for banner js file-->
    <!-- for smooth scrolling -->
    <script src={{ asset("templates/pedicure/js/SmoothScroll.min.js") }}></script>
    <script type="text/javascript" src={{ asset("templates/pedicure/js/move-top.js") }}></script>
    <script type="text/javascript" src={{ asset("templates/pedicure/js/easing.js") }}></script>
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
    <!-- //for smooth scrolling -->
    <!-- scrolling script -->
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
    <!-- //scrolling script -->
    <!-- FlexSlider-JavaScript -->
    <script defer src={{ asset("templates/pedicure/js/jquery.flexslider.js") }}></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //FlexSlider-JavaScript -->
    <script src={{ asset("templates/pedicure/js/simpleLightbox.js") }}></script>
	<script>
		$('.w3_agile_gallery_grid a').simpleLightbox();
	</script>