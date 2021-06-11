<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <link rel="icon" href={{ URL::asset("favicon.png") }} type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Interior Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <link href={{ asset("templates/interior-home/css/bootstrap.css") }} rel="stylesheet" type="text/css" media="all" />
    <link href={{ asset("templates/interior-home/css/font-awesome.css") }} rel="stylesheet">

    <link rel="stylesheet" href={{ asset("templates/interior-home/css/swipebox.css") }}>
    <!-- gallery css -->

    <!-- testimonials css -->
    <link rel="stylesheet" href={{ asset("templates/interior-home/css/flexslider.css") }} type="text/css" media="screen" property="" />
    <!-- flexslider css -->
    <!-- //testimonials css -->

    <link href={{ asset("templates/interior-home/css/style.css") }} rel="stylesheet" type="text/css" media="all" />

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <!--//fonts-->

</head>

<body>
    @include('templates.interior-home.banner')
    @yield('content')
    @include('templates.interior-home.footer')
    @include('templates.interior-home.script')
</body>
</html>
