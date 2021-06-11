@extends('templates.baking.master')
@section('title', 'Baking')
@section('content')

<!--Content-->
@include('templates.baking.components.banner')
@include('templates.baking.components.about')
@include('templates.baking.components.team')
@include('templates.baking.components.blog')
@include('templates.baking.components.achieve')
@include('templates.baking.components.gallery')
@include('templates.baking.components.contact')
<!--End content-->

@endsection