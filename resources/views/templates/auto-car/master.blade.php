<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>

    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Auto Car Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!--// Meta tag Keywords -->

    <!-- css files -->
    <link href="{{ asset('templates/auto-car/css/mislider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templates/auto-car/css/mislider-custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('templates/auto-car/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap-Core-CSS -->
    <link href="{{ asset('templates/auto-car/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="{{ asset('templates/auto-car/css/font-awesome.css') }}">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- online-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Jockey+One&amp;subset=latin-ext" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Niconne&amp;subset=latin-ext" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    @include('templates.auto-car.header')
    @yield('content')
    @include('templates.auto-car.footer')
    @include('templates.auto-car.scripts')
</body>

</html>
