@extends('templates.food-chef.master')
@section('title', 'Food Chef')

@section('content')
@include('templates.food-chef.components.banner')
@include('templates.food-chef.components.about')
@include('templates.food-chef.components.service')
@include('templates.food-chef.components.team')
@include('templates.food-chef.components.gallery')
@include('templates.food-chef.components.testimonial')
@include('templates.food-chef.components.contact')
@include('templates.food-chef.components.map')
@include('templates.food-chef.components.subscribe')
@endsection