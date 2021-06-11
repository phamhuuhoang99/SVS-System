@extends('templates.hotels-starter.master')
@section('title', 'Hotels Starter')

@section('content')
@include('templates.hotels-starter.components.services')
@include('templates.hotels-starter.components.facilities')
@include('templates.hotels-starter.components.design')
@endsection

@section('scripts')
@include('templates.hotels-starter.scripts.services')
@endsection