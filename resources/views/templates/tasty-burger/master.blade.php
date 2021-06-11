<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
    <title>@yield('title')</title>
    <!-- //title -->

    <!-- icon -->
	<link href={{ URL::asset('favicon.png') }} rel="icon" type="image/png">
    <!-- //icon -->

	<!-- Custom-Files -->
	<link href={{ URL::asset("templates/tasty-burger/css/bootstrap.css") }} rel="stylesheet" >
	<!-- Bootstrap-Core-CSS -->
	<link href={{ URL::asset("templates/tasty-burger/css/css_slider.css") }} rel="stylesheet" type="text/css" media="all">
	<!-- css slider -->
	<link href={{ URL::asset("templates/tasty-burger/css/style.css") }} rel="stylesheet" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href={{ URL::asset("templates/tasty-burger/css/font-awesome.min.css") }} rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
		rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
    @include('templates.tasty-burger.header')
    @yield('content')
    @include('templates.tasty-burger.footer')

    <!-- Javascript -->
	@include('templates.tasty-burger.scripts')
	@yield('scripts')
</body>

</html>