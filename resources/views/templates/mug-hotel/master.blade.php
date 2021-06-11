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

	<!-- //custom-theme -->
	<link href={{ URL::asset("templates/mug-hotel/css/bootstrap.css") }} rel="stylesheet" type="text/css" media="all" />
	<link href={{ URL::asset("templates/mug-hotel/css/style.css") }} rel="stylesheet" type="text/css" media="all" />

	<!-- font-awesome-icons -->
    <link href={{ URL::asset("templates/mug-hotel/css/font-awesome.css") }} rel="stylesheet">

	<!-- tabs -->
	<link href={{ URL::asset("templates/mug-hotel/css/easy-responsive-tabs.css") }} rel='stylesheet' type='text/css' />
	<!-- //tabs -->
    <!-- //font-awesome-icons -->

	<link href="https://fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
</head>

<body>
    @yield('content')
    @include('templates.mug-hotel.footer')

    <!-- Javascript -->
	@include('templates.mug-hotel.scripts')
	@yield('scripts')
</body>

</html>