@extends('templates.mug-hotel.master')
@section('title', 'Mug Hotel')

@section('content')
@include('templates.mug-hotel.components.smallHeader')
@include('templates.mug-hotel.components.contact')
@endsection

@section('scripts')
@include('templates.mug-hotel.scripts.contact')
@endsection