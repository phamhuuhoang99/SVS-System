<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- Template CSS -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('templates/carserving/css/style-starter.css')}}">
  <!-- Template CSS -->
</head>

<body>
    @include('templates.carserving.header')
    @yield('content')
    @include('templates.carserving.footer')
    @include('templates.carserving.scripts')
</body>
</html>
