@extends('templates.cake-bakery.master')
@section('title', 'Cake Bakery')

@section('content')
@include('templates.cake-bakery.components.banner')
@include('templates.cake-bakery.components.service')
@include('templates.cake-bakery.components.section')
@include('templates.cake-bakery.components.product')
@include('templates.cake-bakery.components.new')
@include('templates.cake-bakery.components.support')
@endsection

@section('scripts')
@include('templates.cake-bakery.scripts.index')
@endsection