@extends('templates.inwardly.master')
@section('title', 'Inwardly')
@section('content')
<!-- //banner -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href={{ route("temp.inwardly.index") }}>Trang Chủ</a>
    </li>
    <li class="breadcrumb-item active">Bộ Sưu Tập</li>
</ol>
@include('templates.inwardly.sectiongallery')
@endsection



