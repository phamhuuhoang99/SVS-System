<!DOCTYPE html>
<html>

<head>
	<title>@yield('title')</title>
	<link rel="icon" href={{ URL::asset("favicon.png") }} type="image/png">
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Villas Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href={{ asset("templates/villas/css/bootstrap.css") }}>
	<!-- Bootstrap-Core-CSS -->
	<link href={{ asset("templates/villas/css/css_slider.css") }} type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" href={{ asset("templates/villas/css/style.css") }} type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href={{ asset("templates/villas/css/font-awesome.min.css") }} rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->
	<link rel="stylesheet" href={{ asset("templates/villas/css/single.css") }}>

	<!-- Web-Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>
<body>
	@include('templates.villas.header')
	@yield('content')
	@include('templates.villas.footer')
</body>
</html>
