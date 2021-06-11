<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href={{ URL::asset("favicon.png") }} type="image/png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="icon" href={{ URL::asset("favicon.png") }} type="image/png">
    <link href={{ URL::asset("templates/downyshoes/css/bootstrap.css") }} rel="stylesheet") }} type="text/css" media="all" />
    <link href={{ URL::asset("templates/downyshoes/css/checkout.css") }} rel="stylesheet") }} type="text/css" media="all" />
    <link rel="stylesheet" href={{ URL::asset("templates/downyshoes/css/shop.css") }} type="text/css" media="screen" property="" />
    <link href={{ URL::asset("templates/downyshoes/css/style7.css") }} rel="stylesheet" type="text/css" media="all" />
    <link href={{ URL::asset("templates/downyshoes/css/style.css") }} rel="stylesheet" type="text/css" media="all" />
    <link href={{ URL::asset("templates/downyshoes/css/flexslider.css") }} rel="stylesheet" type="text/css" media="all" />
    <link href={{ URL::asset("templates/downyshoes/css/about.css") }} rel="stylesheet" type="text/css" media="all" />
    <link href={{ URL::asset("templates/downyshoes/css/contact.css") }} rel="stylesheet" type="text/css" media="all" />
    <link href={{ URL::asset("templates/downyshoes/css/creditly.css") }} rel="stylesheet" type="text/css" media="all" />
    <link href={{ URL::asset("templates/downyshoes/css/easy-responsive-tabs.css") }} rel="stylesheet" type="text/css" media="all" />
    <link href={{ URL::asset("templates/downyshoes/css/jquery-ui1.css") }} rel="stylesheet" type="text/css" media="all" />
    <link href={{ URL::asset("templates/downyshoes/css/font-awesome.css") }} rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
    @include('templates.downyshoes.header')
    @yield('content')
    @include('templates.downyshoes.footer')
    @include('templates.downyshoes.scripts')
</body>

</html>