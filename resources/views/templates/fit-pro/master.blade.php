<!DOCTYPE HTML>
<html>

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content=">Fit Pro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{{ asset('templates/fit-pro/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="{{ asset('templates/fit-pro/css/style.css') }}" rel='stylesheet' type='text/css' />
    <script src="{{asset('templates/fit-pro/js/jquery.min.js') }}"> </script>
    <!--webfonts-->
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700|Orbitron:400,500,700,900'
        rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!--Animation-->
    <script src="{{ asset('templates/fit-pro/js/wow.min.js') }}"></script>
    <link href="{{ asset('templates/fit-pro/css/animate.css') }}" rel='stylesheet' type='text/css' />
    <script>
        new WOW().init();
    </script>
</head>

<body>
    @include('templates.fit-pro.header')
    @yield('content')
    @include('templates.fit-pro.footer')
</body>
</html>