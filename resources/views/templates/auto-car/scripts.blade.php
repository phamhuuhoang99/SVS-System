
<!-- js-scripts -->
<!-- js -->
<script type="text/javascript" src="{{ asset('templates/auto-car/js/jquery-2.1.4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('templates/auto-car/js/bootstrap.js') }}"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js -->

<script src="{{ asset('templates/auto-car/js/responsiveslides.min.js') }}"></script>
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



<!-- Starts-Number-Scroller-Animation-JavaScript -->
<script type="text/javascript" src="{{ asset('templates/auto-car/js/numscroller-1.0.js') }}"></script>
<!-- //Starts-Number-Scroller-Animation-JavaScript -->



<!-- particles-JavaScript -->
<script src="{{ asset('templates/auto-car/js/particles.min.js') }}"></script>
<script>
    window.onload = function() {
        Particles.init({
            selector: '#myCanvas',
            color: '#b3b3b3',
            connectParticles: true,
            minDistance: 100
        });
    };

</script>

<!-- //particles-JavaScript -->

<!-- team-plugin -->
<script src="{{ asset('templates/auto-car/js/mislider.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(function($) {
        var slider = $('.mis-stage').miSlider({
            //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
            stageHeight: 380,
            //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
            slidesOnStage: false,
            //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
            slidePosition: 'center',
            //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
            slideStart: 'mid',
            //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
            slideScaling: 150,
            //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
            offsetV: -5,
            //  Center slide contents vertically - Boolean. Default: false
            centerV: true,
            //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
            navButtonsOpacity: 1,
        });
    });

</script>
<!-- //team-plugin -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('templates/auto-car/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('templates/auto-car/js/easing.js') }}"></script>
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


<!-- //js-scripts -->