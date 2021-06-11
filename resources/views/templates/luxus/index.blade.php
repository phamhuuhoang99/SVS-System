@extends('templates.luxus.master')
@section('title', 'Luxus')

@section('content')
@include('templates.luxus.components.banner')
@include('templates.luxus.components.highest')
@include('templates.luxus.components.collections')
@include('templates.luxus.components.comfort')
@endsection

@section('scripts')
@include('templates.luxus.scripts.index')
@endsection