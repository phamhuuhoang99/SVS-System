<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- title -->
	<title>@yield('title')</title>
    <!-- //title -->

    <!-- icon -->
	<link href={{ URL::asset('favicon.png') }} rel="icon" type="image/png">
    <!-- //icon -->

    <!-- Template CSS -->
    <link href={{ URL::asset("templates/hotels-starter/css/style-starter.css") }} rel="stylesheet" >

    <link href="https://fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">
</head>

<body>
    @include('templates.hotels-starter.header')
    @yield('content')
    @include('templates.hotels-starter.footer')

    <!-- Javascript -->
    @include('templates.hotels-starter.scripts')
    @yield('scripts')
</body>

</html>