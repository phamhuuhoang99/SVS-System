<!-- js -->
<script type="text/javascript" src={{ asset('templates/amenity/js/jquery-2.2.3.min.js') }}></script>
<!-- //menu -->
<script src={{ asset('templates/amenity/js/modernizr-2.6.2.min.js') }}></script>
<script src={{ asset('templates/amenity/js/classie.js') }}></script>
<script src={{ asset('templates/amenity/js/demo7.js') }}></script>
<!-- //menu -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src={{ asset('templates/amenity/js/move-top.js') }}></script>
<script type="text/javascript" src={{ asset('templates/amenity/js/easing.js') }}></script>
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
<!-- start-smoth-scrolling -->
<!-- stats -->
<script src={{ asset('templates/amenity/js/jquery.waypoints.min.js') }}></script>
<script src={{ asset('templates/amenity/js/jquery.countup.js') }}></script>
<script>
    $('.counter').countUp();

</script>
<!-- //stats -->

<!--gallery -->
<script src={{ asset('templates/amenity/js/jquery.chocolat.js') }}></script>
<script type="text/javascript">
    $(function () {
        $('.gallery-grid1 a').Chocolat();
    });
</script>
<!-- //gallery -->

<script src={{ asset('templates/amenity/js/responsiveslides.min.js') }}></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function() {
        // Slideshow 3
        $("#slider3").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function() {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function() {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });

</script>
<!-- FlexSlider -->
<script defer src={{ asset('templates/amenity/js/jquery.flexslider.js') }}></script>
<script type="text/javascript">
    $(function() {

    });
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script>
<!-- FlexSlider -->

<!-- smooth scrolling -->
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


<a href="#home" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"> </span>
</a>
<!-- //smooth scrolling -->
<script type="text/javascript" src={{ asset('templates/amenity/js/bootstrap.js') }}></script>
