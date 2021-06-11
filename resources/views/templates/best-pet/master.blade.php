<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Best Pets Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="{{ asset('templates/best-pet/css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('templates/best-pet/css/style.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('templates/best-pet/css/font-awesome.css') }}" rel="stylesheet">
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('templates/best-pet/css/flexslider.css') }}" type="text/css" media="screen" property="" />
    <!-- //Custom Theme files -->
    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
    @include('templates.best-pet.header')
    @yield('content')
    @include('templates.best-pet.footer')
</body>
</html>