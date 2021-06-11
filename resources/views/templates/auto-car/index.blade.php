@extends('templates.auto-car.master')
@section('title', 'Auto Car')
@section('content')
    <!-- Main -->
    <!-- About -->
    @include('templates.auto-car.components.about')
    <!-- //About -->

    <!--count-->
    @include('templates.auto-car.components.count')
    <!--count-->

    <!-- Services -->
    @include('templates.auto-car.components.services')
    <!-- //services -->

    <!-- Team -->
    @include('templates.auto-car.components.team')
    <!-- //Team -->
    <!-- //Main -->

@endsection
