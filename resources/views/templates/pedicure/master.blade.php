<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <link rel="icon" href={{ URL::asset('favicon.png') }} type="image/png">
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Pedicure Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- custom-theme css files -->
    <link href={{ URL::asset('templates/pedicure/css/bootstrap.css') }} rel="stylesheet" type="text/css" media="all">
    <link href={{ URL::asset('templates/pedicure/css/style.css') }} rel="stylesheet" type="text/css" media="all">
    <!-- //custom-theme css files-->

    <link href={{ URL::asset('templates/pedicure/css/simpleLightbox.css') }} rel="stylesheet" type="text/css">
    <!-- for banner css files -->
    <link rel="stylesheet" type="text/css" href={{ URL::asset('templates/pedicure/css/zoomslider.css') }}>
    <!--zoomslider css -->
    <script type="text/javascript" src="{{ asset('templates/pedicure/js/modernizr-2.6.2.min.js') }}"></script>
    <!--modernizer css -->
    <!-- //for banner css files -->
    <link rel="stylesheet" href={{ URL::asset('templates/pedicure/css/flexslider.css') }} type="text/css" media="all">
    <!-- font-awesome-icons -->
    <link href={{ URL::asset('templates/pedicure/css/font-awesome.css') }} rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- googlefonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- //googlefonts -->
</head>

<body>
    @include('templates.pedicure.header')
    @yield('content')
    @include('templates.pedicure.footer')
    @include('templates.pedicure.scripts')
</body>

</html>
