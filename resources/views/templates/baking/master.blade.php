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
	<link href={{ URL::asset("templates/baking/css/bootstrap.css") }} rel="stylesheet">
	<!-- Bootstrap-CSS -->
	<link href={{ URL::asset("templates/baking/css/style.css") }} rel="stylesheet" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href={{ URL::asset("templates/baking/css/font-awesome.min.css") }} rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese"
		rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	@include('templates.baking.header')
	@yield('content')
	@include('templates.baking.footer')

	<!-- Javascript -->
	@include('templates.baking.scripts')
</body>

</html>