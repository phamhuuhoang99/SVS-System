<!DOCTYPE HTML>

<head>
    <title>@yield('title')</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />

    <link rel="stylesheet" href={{ asset('templates/menspa/css/style.css') }} type="text/css" media="all" />
    <link href={{ asset('templates/menspa/css/font-awesome.css') }} rel="stylesheet">
    <link rel="stylesheet" href={{ asset('templates/menspa/css/bootstrap.css') }}>
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>

    <!-- /Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" ) rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <!-- //Fonts -->

</head>

<body>
    @include('templates.menspa.header')
    @yield('content')
    @include('templates.menspa.footer')
</body>
