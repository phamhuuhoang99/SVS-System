<!-- flexisel (for special offers) -->
<script src={{ URL::asset("templates/cake-bakery/js/jquery.flexisel.js") }}></script>
<script>
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 1,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            // responsiveBreakpoints: {
            // 	portrait: {
            // 		changePoint: 480,
            // 		visibleItems: 1
            // 	},
            // 	landscape: {
            // 		changePoint: 640,
            // 		visibleItems: 2
            // 	},
            // 	tablet: {
            // 		changePoint: 768,
            // 		visibleItems: 2
            // 	}
            // }
        });

    });
</script>
<!-- //flexisel (for special offers) -->

<!-- script for tabs -->
<script>
    $(function () {

        var menu_ul = $('.faq > li > ul'),
            menu_a = $('.faq > li > a');

        menu_ul.hide();

        menu_a.click(function (e) {
            e.preventDefault();
            if (!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true, true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true, true).slideUp('normal');
            }
        });

    });
</script>
<!-- script for tabs -->

<!-- stats -->
<script src={{ URL::asset("templates/cake-bakery/js/jquery.waypoints.min.js") }}></script>
<script src={{ URL::asset("templates/cake-bakery/js/jquery.countup.js") }}></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->

<!-- banner slider -->
<script src={{ URL::asset("templates/cake-bakery/js/image-slider.js") }}></script>
<!-- //banner slider -->

<!-- header nav-item -->
<script>
    showTabs(1);
</script>
<!-- //header nav-item -->