<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Hair Salon Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <link rel="icon" href={{ URL::asset('favicon.png') }} type="image/png">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //for-mobile-apps -->
    <link href={{ asset('templates/hairsalon/css/bootstrap.css') }} rel="stylesheet" type="text/css" media="all" />
    <!-- pop-up -->
    <link href={{ asset('templates/hairsalon/css/popuo-box.css') }} rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up -->
    <link href={{ asset('templates/hairsalon/css/mislider.css') }} rel="stylesheet" type="text/css" />
    <link href={{ asset('templates/hairsalon/css/mislider-custom.css') }} rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href={{ asset('templates/hairsalon/css/zoomslider.css') }} />
    <link rel="stylesheet" type="text/css" href={{ asset('templates/hairsalon/css/style.css') }} />
    <link href={{ asset('templates/hairsalon/css/font-awesome.css') }} rel="stylesheet">
    <script type="text/javascript" src="{{ asset('templates/hairsalon/js/modernizr-2.6.2.min.js') }}"></script>
    <link rel="stylesheet" href={{ asset('templates/hairsalon/css/flexslider.css') }} type="text/css" media="screen"
        property="" />

    <!--/web-fonts-->
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i' rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    @include('templates.hairsalon.header')
    @yield('content')
    @include('templates.hairsalon.footer')
    @include('templates.hairsalon.scripts')
</body>

</html>
