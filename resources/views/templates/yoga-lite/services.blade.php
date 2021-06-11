@extends('templates.yoga-lite.master')
@section('title', 'Yoga Lite')
@section('content')
    <!-- banner-bottom -->
    @include('templates.yoga-lite.course')
    <!-- //banner-bottom -->
    <!-- /services -->
    @include('templates.yoga-lite.sectionservice')
    <!-- /services -->
    <!--/help-line -->
    @include('templates.yoga-lite.help')
    <!--//help-line -->
@endsection
