<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>
    <!-- web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href={{ asset('templates/mastery/css/style-starter.css') }}>
</head>

<body>
    @include('templates.mastery.header')
    @yield('content')
    @include('templates.mastery.footer')
    @include('templates.mastery.scripts')
</body>

</html>
