@extends('templates.hotels-starter.master')
@section('title', 'Hotels Starter')

@section('content')
@include('templates.hotels-starter.components.slider')
@include('templates.hotels-starter.components.availability')
@include('templates.hotels-starter.components.summary')
@include('templates.hotels-starter.components.bestRooms')
@include('templates.hotels-starter.components.quotation')
@include('templates.hotels-starter.components.gallery')
@endsection

@section('scripts')
@include('templates.hotels-starter.scripts.index')
@endsection