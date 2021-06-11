@extends('templates.interior-home.master')
@section('title', 'Interior Home')
@section('content')
    @include('templates.interior-home.about')
    @include('templates.interior-home.service')
    @include('templates.interior-home.stats')
    @include('templates.interior-home.gallery')
    @include('templates.interior-home.team')
    @include('templates.interior-home.clients')
    @include('templates.interior-home.contact')

@endsection
