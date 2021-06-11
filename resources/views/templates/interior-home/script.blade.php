<!-- js -->
<script type="text/javascript" src={{ asset("templates/interior-home/js/jquery-2.1.4.min.js") }}></script>
<!-- //js -->

<!-- banner-type-text -->
<script src={{ asset("templates/interior-home/js/typed.js") }} type="text/javascript"></script>
<script>
    $(function() {

        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 30,
            backDelay: 500,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function() {
                foo();
            },
            resetCallback: function() {
                newTyped();
            }
        });

        $(".reset").click(function() {
            $("#typed").typed('reset');
        });

    });

    function newTyped() { /* A new typed object */ }

    function foo() {
        console.log("Callback");
    }
</script>
<!-- //banner-type-text -->

<!-- flexSlider -->
<script defer src={{ asset("templates/interior-home/js/jquery.flexslider.js") }}></script>
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
<!-- //flexSlider -->

<!-- swipe box js -->
<script src={{ asset("templates/interior-home/js/jquery.adipoli.min.js") }} type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $('.row2').adipoli({
            'startEffect': 'overlay',
            'hoverEffect': 'sliceDown'
        });
    });
</script>
<script src={{ asset("templates/interior-home/js/jquery.swipebox.min.js") }}></script>
<script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });
</script>
<!-- //swipe box js -->

<!-- Numscroller -->
<script type="text/javascript" src={{ asset("templates/interior-home/js/numscroller-1.0.js") }}></script>
<!-- //Numscroller -->

<!-- Responsive Slider script -->
<script src={{ asset("templates/interior-home/js/responsiveslides.min.js") }}></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function() {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            manualControls: '#slider3-pager',
        });
    });
</script>
<!-- //Responsive Slider script -->

<script src={{ asset("templates/interior-home/js/SmoothScroll.min.js") }}></script>
<!-- start-smoth-scrolling -->
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
<!-- move to top-js-files -->
<script type="text/javascript" src={{ asset("templates/interior-home/js/move-top.js") }}></script>
<script type="text/javascript" src={{ asset("templates/interior-home/js/easing.js") }}></script>
<!-- //move to top-js-files -->

<script type="text/javascript" src={{ asset("templates/interior-home/js/bootstrap-3.1.1.min.js") }}></script>
<!-- bootstrap js file -->