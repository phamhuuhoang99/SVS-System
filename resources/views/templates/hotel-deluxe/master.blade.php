<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
	<title>@yield('title')</title>
    <!-- //title -->

    <!-- icon -->
	<link href={{ URL::asset('favicon.png') }} rel="icon" type="image/png">
    <!-- //icon -->

    <!-- Custom Theme files -->
    <link href={{ URL::asset("templates/hotel-deluxe/css/bootstrap.css") }} rel='stylesheet' type='text/css' />


    <!-- Custom Theme files -->
    <link href={{ URL::asset("templates/hotel-deluxe/css/animate.css") }} rel='stylesheet' type='text/css' />
    <link href={{ URL::asset("templates/hotel-deluxe/css/swipebox.css") }} rel="stylesheet">
    <link href={{ URL::asset("templates/hotel-deluxe/css/style.css") }} rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
    @include('templates.hotel-deluxe.header')
    @yield('content')
    @include('templates.hotel-deluxe.footer')

    <!-- Javascript -->
	@include('templates.hotel-deluxe.scripts')
</body>

</html>