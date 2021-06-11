<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
	<title>@yield('title')</title>
    <!-- //title -->

    <!-- icon -->
	<link href={{ URL::asset('favicon.png') }} rel="icon" type="image/png">
    <!-- //icon -->

    <link href={{ URL::asset("templates/food-chef/css/lightbox.css") }} rel="stylesheet">

    <!-- //custom-theme files-->
    <link href={{ URL::asset("templates/food-chef/css/bootstrap.css") }} rel="stylesheet" type="text/css" media="all" />
    <link href={{ URL::asset("templates/food-chef/css/aos.css") }} rel="stylesheet" type="text/css" media="all" /><!-- //animation effects-css-->
    <link href={{ URL::asset("templates/food-chef/css/style.css") }} rel="stylesheet" type="text/css" media="all" />
    <!-- //custom-theme files-->

    <!-- font-awesome-icons -->
    <link href={{ URL::asset("templates/food-chef/css/font-awesome.css") }} rel="stylesheet">
    <!-- //font-awesome-icons -->

    <!-- googlefonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <!-- //googlefonts -->
</head>

<body>
    @include('templates.food-chef.header')
    @yield('content')
    @include('templates.food-chef.footer')
    @include('templates.food-chef.popup')

    <!-- Javascript -->
	@include('templates.food-chef.scripts')
</body>
</html>