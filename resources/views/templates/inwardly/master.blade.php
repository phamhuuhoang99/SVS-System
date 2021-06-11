<!DOCTYPE html>
<html>

<head>
    <title> @yield('title')</title>
    <link rel="icon" href={{ URL::asset('favicon.png') }} type="image/png">
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content=" Inwardly
 Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
 Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href={{ URL::asset('templates/inwardly/css/bootstrap.css') }}>
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href={{ URL::asset('templates/inwardly/css/owl.carousel.css') }} type="text/css" media="all">
    <link rel="stylesheet" href={{ URL::asset('templates/inwardly/css/owl.theme.css') }} type="text/css" media="all">
    <link rel="stylesheet" href={{ URL::asset('templates/inwardly/css/style.css') }} type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href={{ URL::asset('templates/inwardly/css/prettyPhoto.css') }} rel="stylesheet" type="text/css" />
    <link href={{ URL::asset('templates/inwardly/css/style6.css') }} rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href={{ URL::asset('templates/inwardly/css/fontawesome-all.css') }}>
    <link href={{ URL::asset('templates/inwardly/css/blog.css') }} rel='stylesheet' type='text/css' />
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!--web font-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i' rel="stylesheet">
    <!--//web font-->
</head>

<body>
    @include('templates/inwardly/header')
    @yield('content')
    @include('templates/inwardly/footer')
    @include('templates/inwardly/scripts')
</body>

</html>
