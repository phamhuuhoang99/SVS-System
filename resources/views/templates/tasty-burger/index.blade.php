@extends('templates.tasty-burger.master')
@section('title', 'Tasty Burger')

@section('content')
@include('templates.tasty-burger.components.banner')
@include('templates.tasty-burger.components.summary')
@include('templates.tasty-burger.components.special')
@include('templates.tasty-burger.components.grid')
@include('templates.tasty-burger.components.service')
@include('templates.tasty-burger.components.blog')
@include('templates.tasty-burger.components.slider')
@include('templates.tasty-burger.components.newsletter')
@endsection