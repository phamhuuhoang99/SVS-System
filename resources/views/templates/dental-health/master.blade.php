<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{{ asset('templates/detal-health/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('templates/detal-health/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('templates/detal-health/css/css_slider.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('templates/detal-health/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
</head>

<body>
    @include('templates.dental-health.header')
    @yield('content')
    @include('templates.dental-health.footer')
</body>

</html>