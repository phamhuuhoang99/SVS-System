@extends('templates.mug-hotel.master')
@section('title', 'Mug Hotel')

@section('content')
@include('templates.mug-hotel.components.header')
@include('templates.mug-hotel.components.welcome')
@include('templates.mug-hotel.components.modal')
@include('templates.mug-hotel.components.popular')
@include('templates.mug-hotel.components.choose')
@include('templates.mug-hotel.components.team')
@include('templates.mug-hotel.components.letter')
@endsection