<?php
    if(!function_exists('active_menu')){
        function active_menu($currentRouteName,$requestName) {
            if($currentRouteName==$requestName){
                return "show";
            } else {
                return "hide";
            }
        }
    }
?>
<script src={{ URL::asset("templates/fashion-hub/js/jquery-2.2.3.min.js") }}></script>
<script>
     $x = "{{ active_menu(Route::currentRouteName(),"temp.fashion-hub.index") }}";
    $(document).ready(function () {
        $("#myModal_btn").modal($x);
    });
</script>
<!-- //script for show signin and signup modal -->
<!-- smooth dropdown -->
<script>
    $(document).ready(function () {
        $('ul li.dropdown').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
        });
    });
</script>
<!-- //smooth dropdown -->
<!-- script for password match -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- script for password match -->
<!-- Banner Responsiveslides -->
<script src={{ URL::asset("templates/fashion-hub/js/responsiveslides.min.js") }}></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: false,
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
<!-- // Banner Responsiveslides -->
<!-- Product slider Owl-Carousel-JavaScript -->
<script src={{ URL::asset("templates/fashion-hub/js/owl.carousel.js") }}></script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 4,
        loop: false,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        responsive: {
            320: {
                items: 1,
            },
            568: {
                items: 2,
            },
            991: {
                items: 3,
            },
            1050: {
                items: 4
            }
        }
    });
</script>
<!-- //Product slider Owl-Carousel-JavaScript -->
<!-- cart-js -->
<script src={{ URL::asset("templates/fashion-hub/js/minicart.js") }}>
</script>
<script>
    hub.render();

    hub.cart.on('new_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->
<!-- start-smooth-scrolling -->
<script src={{ URL::asset("templates/fashion-hub/js/move-top.js") }}></script>
<script src={{ URL::asset("templates/fashion-hub/js/easing.js") }}></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
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
<script src={{ URL::asset("templates/fashion-hub/js/SmoothScroll.min.js") }}></script>
<script src={{ URL::asset("templates/fashion-hub/js/imagezoom.js") }}></script>
<script src={{ URL::asset("templates/fashion-hub/js/creditly.js") }}></script>
<script src={{ URL::asset("templates/fashion-hub/js/easy-responsive-tabs.js") }}></script>
<script src={{ URL::asset("templates/fashion-hub/js/jquery-ui.js") }}></script>
<script src={{ URL::asset("templates/fashion-hub/js/jquery.flexslider.js") }}></script>


<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src={{ URL::asset("templates/fashion-hub/js/bootstrap.js") }}></script>