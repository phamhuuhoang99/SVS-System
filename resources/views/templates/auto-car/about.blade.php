@extends('templates.auto-car.master')
@section('title', 'Auto Car')
@section('content')
    <!-- Main -->
    <!-- About -->
        @include('templates.auto-car.components.about')
    <!-- //About -->

    <!-- Intro -->
    @include('templates.auto-car.components.intro')
    <!-- //Intro -->

    <!-- Services -->
    @include('templates.auto-car.components.services')
    <!-- //Services -->

    <!-- Count -->
    @include('templates.auto-car.components.count')
    <!-- Count -->

    <!-- Team -->
    @include('templates.auto-car.components.team')
    <!-- //Team -->
    <!-- //Main -->


@endsection
