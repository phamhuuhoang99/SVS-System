@extends('templates.edulearn.master')
@section('title','Edulearn')
@section('content')
<!-- banner -->
<div class="banner-agile-2">
    @include('templates.edulearn.banner')
</div>
<!-- breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('temp.edulearn.index') }}">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">404</li>
    </ol>
</nav>
<!-- breadcrumb -->
<!-- //banner -->

<!-- 404 error page -->
<div class="w3-main-error py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">404
            <span class="font-weight-bold">error</span> page
        </h3>
        <div class="agile-info text-center">
            <h3>404</h3>
            <h4 class="font-weight-light">oops!</h4>
            <p class="mt-2 mb-sm-5 mb-3">sorry,page not found.</p>
            <button href="#" class="w3ls-button2 btn text-white mt-md-4 mt-2">Go Back</button>
        </div>
    </div>
</div>
<!-- //404 error page -->

@endsection