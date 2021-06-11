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
	<link href={{ URL::asset("templates/cake-bakery/css/bootstrap.css") }} rel="stylesheet" type="text/css">
	<!-- Bootstrap-Core-CSS -->
	{{--  <link href={{ URL::asset("templates/cake-bakery/css/login_overlay.css") }} rel='stylesheet' type='text/css' />  --}}
    <!-- Style-CSS -->
	<link href={{ URL::asset("templates/cake-bakery/css/style.css") }} rel="stylesheet" type="text/css" media="all" />
    <!-- Font-Awesome-Icons-CSS -->
	{{--  <link href={{ URL::asset("templates/cake-bakery/css/fontawesome-all.css") }} rel="stylesheet">  --}}
	<link href={{ URL::asset("font-awesome/css/all.min.css")}} rel="stylesheet" type="text/css">
    <!-- Image slider -->
	<link href={{ URL::asset("templates/cake-bakery/css/image-slider.css") }} rel="stylesheet" type="text/css">
	<!-- Gallery -->
	<link href={{ URL::asset("templates/cake-bakery/css/chocolat.css") }} rel="stylesheet" type="text/css" media="screen">
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
    @include('templates.cake-bakery.header')
    @yield('content')
    @include('templates.cake-bakery.footer')

	<!-- Javascript -->
	@include('templates.cake-bakery.scripts')
	@yield('scripts')
</body>

</html>