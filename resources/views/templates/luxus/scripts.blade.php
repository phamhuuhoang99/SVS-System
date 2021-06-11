<!-- js -->
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0,1);
        }
    </script>

    <script src={{ URL::asset("templates/luxus/js/modernizr.custom.js") }}></script>
    <script src={{ URL::asset("templates/luxus/js/jquery-1.11.1.min.js") }}></script>
<!-- //js -->

<!-- start-smoth-scrolling -->
    <script type="text/javascript" src={{ URL::asset("templates/luxus/js/move-top.js") }}></script>
    <script type="text/javascript" src={{ URL::asset("templates/luxus/js/easing.js") }}></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
<!-- start-smoth-scrolling -->

<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
    <script src={{ URL::asset("templates/luxus/js/classie.js") }}></script>
    <script>
        var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
            showLeftPush = document.getElementById( 'showLeftPush' ),
            showRightPush = document.getElementById( 'showRightPush' ),
            body = document.body;

        showLeftPush.onclick = function() {
            classie.toggle( this, 'active' );
            classie.toggle( body, 'cbp-spmenu-push-toright' );
            classie.toggle( menuLeft, 'cbp-spmenu-open' );
            disableOther( 'showLeftPush' );
        };

        function disableOther( button ) {
            if( button !== 'showLeftPush' ) {
                classie.toggle( showLeftPush, 'disabled' );
            }
            if( button !== 'showRightPush' ) {
                classie.toggle( showRightPush, 'disabled' );
            }
        }
    </script>

    <script type="text/javascript">
        $('.search').hide();
        $('button').click(function() {
            $('.search').show();
            $('.text').focus();
        });
        $('.close-in').click( function() {
            $('.search').hide();
        });
    </script>

    <script src={{ URL::asset("templates/luxus/js/responsiveslides.min.js") }}></script>

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

    <script src={{ URL::asset("templates/luxus/js/lightbox.js") }}></script>

<!-- Bootstrap core JavaScript-->
<!-- Placed at the end of the document so the pages load faster -->
<!-- js -->
    <script src={{ URL::asset("templates/luxus/js/bootstrap.js") }}></script>
<!-- js -->

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
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
<!-- //smooth scrolling -->

<!-- header-active-js -->
    <script src={{ URL::asset("templates/luxus/js/header.js") }}></script>
<!-- //header-active-js -->