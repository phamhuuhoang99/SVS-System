@extends('templates.luxus.master')
@section('title', 'Luxus')

@section('content')
@include('templates.luxus.components.smallBanner')
@include('templates.luxus.components.singleBlog')
@endsection

@section('scripts')
@include('templates.luxus.scripts.blog')
@endsection