<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href={{ URL::asset("templates/fashion-hub/css/bootstrap.css") }} type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link rel="icon" href={{ URL::asset("favicon.png") }} type="image/png">
    <link href={{ URL::asset("templates/fashion-hub/css/shop.css") }} type="text/css" rel="stylesheet" media="all">
    <link href={{ URL::asset("templates/fashion-hub/css/easy-responsive-tabs.css") }} type="text/css" rel="stylesheet" media="all">
    <link href={{ URL::asset("templates/fashion-hub/css/checkout.css") }} type="text/css" rel="stylesheet" media="all">
    <link href={{ URL::asset("templates/fashion-hub/css/creditly.css") }} type="text/css" rel="stylesheet" media="all">
    <link href={{ URL::asset("templates/fashion-hub/css/flexslider.css") }} type="text/css" rel="stylesheet" media="all">
    <link href={{ URL::asset("templates/fashion-hub/css/faq.css") }} type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href={{ URL::asset("templates/fashion-hub/css/owl.carousel.min.css") }}>
    <!-- Owl-Carousel-CSS -->
    <link href={{ URL::asset("templates/fashion-hub/css/style.css") }} type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href={{ URL::asset("templates/fashion-hub/css/fontawesome-all.min.css") }} rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>
<body>
    @include('templates.fashion-hub.header')
    @yield('content')
    @include('templates.fashion-hub.footer')
    @include('templates.fashion-hub.script')
</body>
</html>
