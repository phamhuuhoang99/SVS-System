<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <link rel="icon" href={{ URL::asset('favicon.png') }} type="image/png">
    <!-- Meta-tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Amenity Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta-tags -->
    <link href={{ URL::asset('templates/amenity/css/bootstrap.css') }} rel="stylesheet" type="text/css" media="all" />
    <!-- //Bootstrap Css -->
    <link href={{ URL::asset('templates/amenity/css/font-awesome.css') }} rel="stylesheet">
    <!-- //Font-awesome Css -->
    <link rel="stylesheet" type="text/css" href={{ URL::asset('templates/amenity/css/style7.css') }} />
    <!--//menu slider -->
    <link rel="stylesheet" href={{ URL::asset('templates/amenity/css/flexslider.css') }} type="text/css"
        media="screen" />
    <!--// Flexslider-CSS -->
    <link href={{ URL::asset('templates/amenity/css/style.css') }} rel="stylesheet" type="text/css" media="all" />
    <!-- //Required Css -->
    <link rel="stylesheet" href={{ URL::asset('templates/amenity/css/chocolat.css') }} type="text/css" media="screen">
    <!--fonts-->
    <link href='https://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel="stylesheet">
    <!--//fonts-->

</head>
<body>
    @include('templates.amenity.header')
    @yield('content')
    @include('templates.amenity.footer')
    @include('templates.amenity.scripts')
</body>
</html>
