<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="icon" href={{ URL::asset('favicon.png') }} type="image/png">
    <link href={{ asset('templates/lighting/css/bootstrap.css') }} rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href={{ URL::asset('templates/lighting/css/jquery-ui.css') }}>
    <!-- Custom Theme files -->
    <!--theme style-->
    <link href={{ asset('templates/lighting/css/style.css') }} rel="stylesheet" type="text/css" media="all" />
    <script src={{ asset('templates/lighting/js/jquery.min.js') }}></script>

    <!--//theme style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- start menu -->
    <script src={{ asset('templates/lighting/js/simpleCart.min.js') }}> </script>
    <!-- start menu -->
    <link href={{ URL::asset('templates/lighting/css/memenu.css') }} rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src={{ asset('templates/lighting/js/memenu.js') }}></script>
    <script>
        $(document).ready(function() {
            $(".memenu").memenu();
        });

    </script>
    <!-- /start menu -->
    <link href={{ URL::asset('templates/lighting/css/form.css') }} rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href={{ URL::asset('templates/lighting/css/flexslider.css') }} type="text/css" media="screen" />

</head>

<body>
    @include("templates.lighting.header")
    @yield('content')
    @include('templates.lighting.subscribe')
    @include('templates.lighting.footer')
    @include('templates.lighting.scripts')
</body>

</html>
