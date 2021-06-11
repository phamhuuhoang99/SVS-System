@extends('templates.luxus.master')
@section('title', 'Luxus')

@section('content')
@include('templates.luxus.components.smallBanner')
@include('templates.luxus.components.about')
@include('templates.luxus.components.team')
@include('templates.luxus.components.advantages')
@endsection

@section('scripts')
@include('templates.luxus.scripts.about')
@endsection