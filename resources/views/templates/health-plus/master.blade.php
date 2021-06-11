<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <!-- for-meta-tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Health Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //for-meta-tags-->
    <link href="{{asset('templates/health-plus/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('templates/health-plus/css/flexslider.css') }}" type="text/css" media="screen" Department="" />
    <link href="{{asset('templates/health-plus/css/services.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('templates/health-plus/css/ziehharmonika.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('templates/health-plus/css/JiSlider.css') }}" rel="stylesheet">
    <link href="{{asset('templates/health-plus/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('templates/health-plus/css/team.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="{{asset('templates/health-plus/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
</head>

<body>
    @include('templates.health-plus.header')
    @yield('content')
    @include('templates.health-plus.footer')
</body>

</html>
