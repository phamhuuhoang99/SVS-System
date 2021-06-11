<!-- js -->
<script src={{ URL::asset("templates/inwardly/js/jquery-2.2.3.min.js") }}></script>
<script src={{ URL::asset("templates/inwardly/js/search.js") }}></script>
<!-- /dropdown nav -->
<script>
    $(document).ready(function() {
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->
<!-- Banner Responsiveslides -->
<script src={{ URL::asset("templates/inwardly/js/responsiveslides.min.js") }}></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function() {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
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
<!-- // Banner Responsiveslides -->
<!-- stats -->
<script src={{ URL::asset("templates/inwardly/js/jquery.waypoints.min.js") }}></script>
<script src={{ URL::asset("templates/inwardly/js/jquery.countup.js") }}></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->
<!-- carousel -->
<script src={{ URL::asset("templates/inwardly/js/owl.carousel.js") }}></script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: false
                },
                900: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false,
                    margin: 0
                }
            }
        })
    })
</script>
<!-- //carousel -->
<!-- Smooth-Scrolling-JavaScript -->
<script src={{ URL::asset("templates/inwardly/js/easing.js") }}></script>
<script src={{ URL::asset("templates/inwardly/js/move-top.js") }}></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll, .navbar li a, .footer li a").click(function(event) {
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //Smooth-Scrolling-JavaScript -->
<script>
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

<!-- //Smooth-Scrolling-JavaScript -->
<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
<!--// end-smoth-scrolling -->
<script src={{ URL::asset("templates/inwardly/js/jquery-1.7.2.js") }}></script>
<script src={{ URL::asset("templates/inwardly/js/jquery.quicksand.js") }}></script>
<script src={{ URL::asset("templates/inwardly/js/script.js") }}></script>
<script src={{ URL::asset("templates/inwardly/js/jquery.prettyPhoto.js") }}></script>
<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->


<!-- //js -->
<script src={{ URL::asset("templates/inwardly/js/bootstrap.js") }}></script>