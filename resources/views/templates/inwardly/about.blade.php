@extends('templates.inwardly.master')
@section('title', 'Inwardly')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href={{ route("temp.inwardly.index") }}>Trang Chủ</a>
        </li>
        <li class="breadcrumb-item active">Về SVS</li>
    </ol>
    @include('templates.inwardly.bannerbottom')
    @include('templates.inwardly.team')
    @include('templates.inwardly.stats')
    @include('templates.inwardly.client')
    @include('templates.inwardly.bottomlast')
@endsection
