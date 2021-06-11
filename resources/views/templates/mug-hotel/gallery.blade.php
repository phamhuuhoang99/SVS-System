@extends('templates.mug-hotel.master')
@section('title', 'Mug Hotel')

@section('content')
@include('templates.mug-hotel.components.smallHeader')
@include('templates.mug-hotel.components.gallery')
@endsection

@section('scripts')
@include('templates.mug-hotel.scripts.gallery')
@endsection