<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
    <title>@yield('title')</title>
    <!-- //title -->

    <!-- icon -->
	<link href={{ URL::asset('favicon.png') }} rel="icon" type="image/png">
    <!-- //icon -->

    <link href={{ URL::asset("templates/luxus/css/bootstrap.css") }} rel="stylesheet" type="text/css" media="all" />
    <link href={{ URL::asset("templates/luxus/css/style.css") }} rel="stylesheet" type="text/css" media="all" />
    <link href={{ URL::asset("templates/luxus/css/lightbox.css") }} rel="stylesheet" type="text/css" media="all" />
    <link href={{ URL::asset("templates/luxus/css/component.css") }} rel="stylesheet" type="text/css"  />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<!-- slide-toggle-menu -->
 <body class="cbp-spmenu-push">
    @include('templates.luxus.header')
    @yield('content')
    @include('templates.luxus.footer')

    <!-- Javascript -->
	@include('templates.luxus.scripts')
	@yield('scripts')
</body>

</html>