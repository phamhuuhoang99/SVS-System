@extends('templates.cake-bakery.master')
@section('title', 'Cake Bakery')

@section('content')
@include('templates.cake-bakery.components.about')
@include('templates.cake-bakery.components.service')
@include('templates.cake-bakery.components.section')
@include('templates.cake-bakery.components.team')
@endsection

@section('scripts')
@include('templates.cake-bakery.scripts.about')
@endsection
