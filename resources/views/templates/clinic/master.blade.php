<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="New Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//tags -->
    <link href="{{ asset('templates/clinic/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('templates/clinic/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('templates/clinic/css/appointment_style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('templates/clinic/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //for bootstrap working -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
    @include('templates.clinic.header')
    @yield('content')
    @include('templates.clinic.footer')
</body>
</html>