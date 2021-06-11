@extends('templates.tasty-burger.master')
@section('title', 'Tasty Burger')

@section('content')
@include('templates.tasty-burger.components.about')
@include('templates.tasty-burger.components.service')
@include('templates.tasty-burger.components.team')
@endsection