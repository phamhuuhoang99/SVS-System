@extends('templates.cake-bakery.master')
@section('title', 'Cake Bakery')

@section('content')
@include('templates.cake-bakery.components.gallery')
@endsection

@section('scripts')
@include('templates.cake-bakery.scripts.gallery')
@endsection
