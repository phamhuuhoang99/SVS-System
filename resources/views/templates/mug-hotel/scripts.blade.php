<!-- js -->
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0,1);
        }
    </script>

	<script src={{ URL::asset("templates/mug-hotel/js/jquery-2.1.4.min.js") }} type="text/javascript"></script>
	<script src={{ URL::asset("templates/mug-hotel/js/main.js") }}></script>
<!-- //js -->

<!-- start-smooth-scrolling -->
    <script type="text/javascript" src={{ URL::asset("templates/mug-hotel/js/move-top.js") }}></script>
    <script type="text/javascript" src={{ URL::asset("templates/mug-hotel/js/easing.js") }}></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
            });
        });
    </script>
<!-- start-smooth-scrolling -->

<!-- for bootstrap working -->
    <script src={{ URL::asset("templates/mug-hotel/js/bootstrap.js") }}></script>
<!-- //for bootstrap working -->

<!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
                };
            */
            if (typeof $().UItoTop === 'function')
                $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
<!-- //here ends scrolling icon -->

    <script src={{ URL::asset("templates/mug-hotel/js/jquery.typer.js") }}></script>
    <script>
        var win = $(window),
            foo = $('#typer');

        foo.typer(['Khách sạn cao cấp', 'Khách sạn và Resort', 'Resort cao cấp']);

        // unneeded...
        win.resize(function () {
            var fontSize = Math.max(Math.min(win.width() / (1 * 10), parseFloat(Number.POSITIVE_INFINITY)), parseFloat(Number.NEGATIVE_INFINITY));

            foo.css({
                fontSize: fontSize * .8 + 'px'
            });
        }).resize();
    </script>

<!--tabs-->
    <script src={{ URL::asset("templates/mug-hotel/js/easy-responsive-tabs.js") }}></script>
    <script>
        $(document).ready(function () {
            if (typeof $('#horizontalTab').easyResponsiveTabs === 'function')
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion
                    width: 'auto', //auto or any width like 600px
                    fit: true,   // 100% fit in a container
                    closed: 'accordion', // Start closed if in accordion view
                    activate: function (event) { // Callback function if tab is switched
                        var $tab = $(this);
                        var $info = $('#tabInfo');
                        var $name = $('span', $info);
                        $name.text($tab.text());
                        $info.show();
                    }
                });

            if (typeof $('#verticalTab').easyResponsiveTabs === 'function')
                $('#verticalTab').easyResponsiveTabs({
                    type: 'vertical',
                    width: 'auto',
                    fit: true
                });
        });
    </script>
<!--//tabs-->

    <script src={{ URL::asset("templates/mug-hotel/js/lightbox-plus-jquery.min.js") }}></script>

<!-- header-active-js -->
    <script src={{ URL::asset("templates/mug-hotel/js/header.js") }}></script>
<!-- //header-active-js -->