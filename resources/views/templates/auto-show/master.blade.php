<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <link href="{{asset('templates/auto-show/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="{{asset('templates/auto-show/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{asset('templates/auto-show/css/component.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Auto Show Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--webfont-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{asset('templates/auto-show/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{asset('templates/auto-show/js/bootstrap.min.js') }}"></script>
    <!-- start menu -->
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
    <!-- start menu -->
    <script src="{{asset('templates/auto-show/js/imagezoom.js') }}"></script>
    <script defer src="{{asset('templates/auto-show/js/jquery.flexslider.js') }}"></script>
    <link rel="stylesheet" href="{{asset('templates/auto-show/css/flexslider.css') }}" type="text/css" media="screen" />
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>

    <script src="{{asset('templates/auto-show/js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true // 100% fit in a container
            });
        });
    </script>
</head>

<body>
    @yield('content')
    @include('templates.auto-show.footer')
</body>
</html>