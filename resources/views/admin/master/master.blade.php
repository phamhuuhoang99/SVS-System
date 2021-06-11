<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SVS Quản Trị</title>

    <!-- Tab Icon -->
    <link rel="icon" href={{ URL::asset("favicon.png") }} type="image/png">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
     {{-- <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> --}}

    <!-- DataTables -->
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

    <!-- Font Awesome Icons -->
    <link href={{ URL::asset("font-awesome/css/all.min.css")}} rel="stylesheet" type="text/css">

    <!-- Theme style -->
    <link href={{ URL::asset("bower_components/admin-lte/dist/css/adminlte.min.css")}} rel="stylesheet" type="text/css">

    <!-- Custom style -->
    <link href={{ URL::asset("css/admin.css")}} rel="stylesheet" type="text/css">
</head>

<body id="app-layout" class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.master.header')
        @include('admin.master.sidebar-left')

        <!-- Content Wrapper. Contains page content -->
        <div class="admin content-wrapper">
            <h2 class="page-title">@yield('page-title')</h2>
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        {{--  @include('admin.master.sidebar-right')  --}}
        @include('admin.master.footer')
    </div>
</body>
</html>

<!-- JavaScripts -->
@include('admin.master.scripts')
