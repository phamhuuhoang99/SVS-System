<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Edulearn Responsive web template" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!--// Meta tag Keywords -->

    <!-- Custom-Files -->
    <!-- Bootstrap-Core-Css -->
    <link rel="stylesheet" href="{{asset('templates/edulearn/css/bootstrap.css') }}">
    <!-- Testimonials-Css -->
    <link href="{{asset('templates/edulearn/css/mislider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('templates/edulearn/css/mislider-custom.css') }}" rel="stylesheet" type="text/css" />
    <!-- Style-Css -->
    <link rel="stylesheet" href="{{asset('templates/edulearn/css/style.css') }}" type="text/css" media="all" />
    <!-- Font-Awesome-Icons-Css -->
    <link rel="stylesheet" href="{{asset('templates/edulearn/css/fontawesome-all.css') }}">
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <!-- //Web-Fonts -->

</head>

<body>
    @include('templates.edulearn.header')
    @yield('content')
    @include('templates.edulearn.footer')
    @include('templates.edulearn.scripts')
</body>

</html>
