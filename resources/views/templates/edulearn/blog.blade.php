@extends('templates.edulearn.master')
@section('title', 'Edulearn')
@section('content')
    @include('templates.edulearn.banner')
    <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('temp.edulearn.index') }}">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
        </ol>
    </nav>
    <!-- breadcrumb -->
    <!-- //banner -->

    <!-- blog -->
    <div class="blog-w3l py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Trang
                <span class="font-weight-bold">Blog</span>
            </h3>
            <div class="row blog-content pt-md-4">
                <!-- left side -->
                <div class="col-lg-8 blog_section">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('templates/edulearn/images/banner2.jpg') }}" alt="">
                        <div class="card-body text-center">
                            <h6 class="blog-first text-dark">
                                <i class="far fa-user mr-2"></i>Hữu Hoàng
                            </h6>
                            <ul class="blog_list my-3">
                                <li> 15/05/2020</li>
                                <li class="mx-3">
                                    <a href="#">
                                        <i class="far fa-heart mr-1"></i>
                                        30</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="far fa-comments mr-1"></i>
                                        18</a>
                                </li>
                            </ul>
                            <h5 class="card-title">
                                <a href="{{route('temp.edulearn.single') }}" class="text-dark">Tên Blog</a>
                            </h5>
                            <p class="card-text">Nội dung Blog.</p>
                            <a href="{{route('temp.edulearn.single') }}" class="btn btn-primary blog-button mt-3">Xem Thêm</a>
                        </div>
                    </div>
                    <div class="card my-4">
                        <img class="card-img-top" src="{{ asset('templates/edulearn/images/banner3.jpg') }}" alt="">
                        <div class="card-body text-center">
                            <h6 class="blog-first text-dark">
                                <i class="far fa-user mr-2"></i>Nhật Thiên
                            </h6>
                            <ul class="blog_list my-3">
                                <li>22/05/2020</li>
                                <li class="mx-3">
                                    <a href="#">
                                        <i class="far fa-heart mr-1"></i>
                                        28</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="far fa-comments mr-1"></i>12
                                    </a>
                                </li>
                            </ul>
                            <h5 class="card-title">
                                <a href="{{route('temp.edulearn.single') }}" class="text-dark">Tên Blog</a>
                            </h5>
                            <p class="card-text">Nội dung Blog.</p>
                            <a href="{{route('temp.edulearn.single') }}" class="btn btn-primary blog-button mt-3">Xem Thêm</a>
                        </div>
                    </div>
                    <div class="card my-4">
                        <img class="card-img-top" src="{{ asset('templates/edulearn/images/banner4.jpg') }}" alt="">
                        <div class="card-body text-center">
                            <h6 class="blog-first text-dark">
                                <i class="far fa-user mr-2"></i>Hữu Sơn
                            </h6>
                            <ul class="blog_list my-3">
                                <li>02/08/2020</li>
                                <li class="mx-3">
                                    <a href="#">
                                        <i class="far fa-heart mr-1"></i>
                                        22</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="far fa-comments mr-1"></i>
                                        16</a>
                                </li>
                            </ul>
                            <h5 class="card-title">
                                <a href="{{route('temp.edulearn.single') }}" class="text-dark">Tên Blog</a>
                            </h5>
                            <p class="card-text">Nội dung Blog.</p>
                            <a href="{{route('temp.edulearn.single') }}" class="btn btn-primary blog-button mt-3">Xem Thêm</a>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mt-5">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Đầu</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Cuối</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- //left side -->
                </div>
                <!-- right side -->
                    @include('templates.edulearn.rightside')
                <!-- //right side -->
            </div>
        </div>
    </div>
    <!-- //blog -->
@endsection
