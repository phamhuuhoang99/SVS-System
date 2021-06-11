@extends('templates.hotels-starter.master')
@section('title', 'Hotels Starter')

@section('content')
@include('templates.hotels-starter.components.about')
@include('templates.hotels-starter.components.special')
@include('templates.hotels-starter.components.team')
@include('templates.hotels-starter.components.feedback')
@include('templates.hotels-starter.components.smallSlider')
@endsection

@section('scripts')
@include('templates.hotels-starter.scripts.about')
@endsection