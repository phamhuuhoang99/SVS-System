<script src={{ asset("templates/classicstyle/js/owl.carousel.js") }}></script>

<!-- requried-jsfiles-for owl -->
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            items: 2,
            lazyLoad: false,
            autoPlay: true,
            navigation: true,
            navigationText: true,
            pagination: false,
        });
    });
</script>
<!-- //requried-jsfiles-for owl -->
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo2").flexisel({
            visibleItems: 1,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 5000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 1
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 1
                }
            }
        });
    });
</script>

<script>
    $(document).ready(function(c) {
        $('.close1').on('click', function(c) {
            $('.cross').fadeOut('slow', function(c) {
                $('.cross').remove();
            });
        });
    });
</script>
<script>
    $(document).ready(function(c) {
        $('.close2').on('click', function(c) {
            $('.cross1').fadeOut('slow', function(c) {
                $('.cross1').remove();
            });
        });
    });
</script>
<script>
    $(document).ready(function(c) {
        $('.close3').on('click', function(c) {
            $('.cross2').fadeOut('slow', function(c) {
                $('.cross2').remove();
            });
        });
    });
</script>
<!--quantity-->
<script>
    $('.value-plus').on('click', function() {
        var divUpd = $(this).parent().find('.value'),
            newVal = parseInt(divUpd.text(), 10) + 1;
        divUpd.text(newVal);
    });

    $('.value-minus').on('click', function() {
        var divUpd = $(this).parent().find('.value'),
            newVal = parseInt(divUpd.text(), 10) - 1;
        if (newVal >= 1) divUpd.text(newVal);
    });
</script>
<!--quantity-->
<script src={{ asset("templates/classicstyle/js/imagezoom.js") }}></script>

    <script defer src={{ asset("templates/classicstyle/js/jquery.flexslider.js") }}></script>
    <link rel="stylesheet" href={{ asset("templates/classicstyle/css/flexslider.css") }} type="text/css" media="screen" />

    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
    <script src={{ asset("templates/classicstyle/js/easyResponsiveTabs.js") }} type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true // 100% fit in a container
            });
        });
    </script>
    <!---->
<script type="text/javascript" src={{ asset("templates/classicstyle/js/jquery.flexisel.js") }}></script>