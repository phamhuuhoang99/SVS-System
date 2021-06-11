<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
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
    <link rel="icon" href={{ URL::asset('favicon.png') }} type="image/png">
    <link href={{ URL::asset("templates/eliteshoppy/css/bootstrap.css") }} rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href={{ URL::asset('templates/eliteshoppy/css/flexslider.css') }} type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href={{ URL::asset('templates/eliteshoppy/css/jquery-ui.css') }}>
    <link href={{ URL::asset('templates/eliteshoppy/css/style.css') }} rel="stylesheet" type="text/css" media="all" />
    <link href={{ URL::asset('templates/eliteshoppy/css/team.css') }} rel="stylesheet" type="text/css" media="all" />
    <link href={{ URL::asset('templates/eliteshoppy/css/font-awesome.css') }} rel="stylesheet">
    <link href={{ URL::asset('templates/eliteshoppy/css/easy-responsive-tabs.css') }} rel='stylesheet' type='text/css' />
    <!-- //for bootstrap working -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>

<body>
    @include('templates.eliteshoppy.header')
    @include('templates.eliteshoppy.signin')
    @include('templates.eliteshoppy.signup')
    @yield('content')
    @include('templates.eliteshoppy.footer')
    @include('templates.eliteshoppy.scripts')
</body>

</html>
