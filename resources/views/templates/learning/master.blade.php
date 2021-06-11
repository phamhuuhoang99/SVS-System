<!DOCTYPE HTML>
<html>

<head>
    <title>@yield('title')</title>
    <link href="{{ asset('templates/learning/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="{{ asset('templates/learning/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('templates/learning/css/style1.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Agility  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <!--google fonts-->
    <script src="{{ asset('templates/learning/js/jquery-1.11.0.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('templates/learning/css/flexslider.css') }}" type="text/css" media="screen" />
    <link type="text/css" rel="stylesheet" href="{{ asset('templates/learning/css/colorfulTab.min.css') }}">

</head>

<body>
    @include('templates.learning.header')
    @yield('content')
    @include('templates.learning.footer')
    @include('templates.learning.scripts')
</body>

</html>
