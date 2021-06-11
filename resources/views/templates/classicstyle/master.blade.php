<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Classic Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="icon" href={{ URL::asset("favicon.png") }} type="image/png">
    <link href={{ asset("templates/classicstyle/css/owl.carousel.css")}} rel="stylesheet">
    <!-- //for-mobile-apps -->
    <link href={{ asset("templates/classicstyle/css/bootstrap.css") }} rel="stylesheet" type="text/css" media="all" />
    <link href={{ asset("templates/classicstyle/css/style.css") }} rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script src={{ asset("templates/classicstyle/js/jquery.min.js") }}></script>
    <!-- //js -->
    <!-- cart -->
    <script src={{ asset("templates/classicstyle/js/simpleCart.min.js") }}></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src={{ asset("templates/classicstyle/js/bootstrap-3.1.1.min.js") }}></script>
    <!-- //for bootstrap working -->
    <!-- animation-effect -->
    <link href={{ asset("templates/classicstyle/css/animate.min.css") }} rel="stylesheet">
    <script src={{ asset("templates/classicstyle/js/wow.min.js") }}></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->
    <link href='https://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
    @include('templates.classicstyle.header')
    @yield('content')
    @include('templates.classicstyle.footer')
    @include('templates.classicstyle.scripts')
</body>
</html>