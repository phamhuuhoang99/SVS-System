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
        <li class="breadcrumb-item active" aria-current="page">Truyền thông</li>
    </ol>
</nav>
<!-- breadcrumb -->
<!-- //banner -->

<!-- course-->
<div class="course-w3ls py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-sm-5 mb-4">Khóa học -
            <span class="font-weight-bold">Truyền thông</span>
        </h3>
        <div class="row cource-list-agile pt-4">
            <div class="col-lg-7 agile-course-main">
                <div class="w3ls-cource-first">
                    <img src="{{ asset('templates/edulearn/images/1.png') }}" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2"></img>
                    <div class="px-md-5 px-4  pb-md-5 pb-4">
                        <h3 class="text-dark">Truyền thông, Xã hội – Thực tập</h3>
                        <p class="mt-3 mb-4 pr-lg-5">Đăng ký khóa học sớm để nhận nhiều ưu đãi đặc biệt.</p>
                        <ul class="list-unstyled text-capitalize">
                            <li>
                                <i class="fas fa-calendar-alt mr-3"></i>Tháng 5 - 8 năm 2020
                            </li>
                            <li class="my-3">
                                <i class="fas fa-clock mr-3"></i>4 - 6 giờ
                            </li>
                            <li>
                                <i class="fas fa-users mr-3"></i>70 chỗ
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 agile-course-main-2 mt-4">
                <img src="{{ asset('templates/edulearn/images/am2.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="buttons-w3ls">
                <a class="btn button-cour-w3ls text-white" href="{{route('temp.edulearn.course_details') }}" role="button">Xem thêm</a>
                <a class="btn bg-dark text-white" href="{{route('temp.edulearn.form') }}" role="button">Đăng ký</a>
            </div>
        </div>
        <div class="row cource-list-agile cource-list-agile-2">
            <div class="col-lg-5 agile-course-main-3 mt-4">
                <img src="{{ asset('templates/edulearn/images/n3.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7 agile-course-main text-right">
                <div class="w3ls-cource-first">
                    <img src="{{ asset('templates/edulearn/images/2.png') }}" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2"></img>
                    <div class="px-md-5 px-4  pb-md-5 pb-4">
                        <h3 class="text-dark">Truyền thông xã hội</h3>
                        <p class="mt-3 mb-4 pl-lg-4">Đăng ký khóa học sớm để nhận nhiều ưu đãi đặc biệt.</p>
                        <ul class="list-unstyled text-capitalize">
                            <li>Tháng 6 - 8 năm 2020
                                <i class="fas fa-calendar-alt ml-3"></i>
                            </li>
                            <li class="my-3">3 - 6 giờ
                                <i class="fas fa-clock ml-3"></i>
                            </li>
                            <li>60 chỗ
                                <i class="fas fa-users ml-3"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="buttons-w3ls-2">
                <a class="btn button-cour-w3ls text-white" href="{{route('temp.edulearn.course_details') }}" role="button">Xem thêm</a>
                <a class="btn bg-dark text-white" href="{{route('temp.edulearn.form') }}" role="button">Đăng ký</a>
            </div>
        </div>
        <div class="row cource-list-agile pt-4">
            <div class="col-lg-7 agile-course-main">
                <div class="w3ls-cource-first">
                    <img src="{{ asset('templates/edulearn/images/1.png') }}" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2"></img>
                    <div class="px-md-5 px-4  pb-md-5 pb-4">
                        <h3 class="text-dark">Nghiên cứu</h3>
                        <p class="mt-3 mb-4 pr-lg-5">Đăng ký khóa học sớm để nhận nhiều ưu đãi đặc biệt.</p>
                        <ul class="list-unstyled text-capitalize">
                            <li>
                                <i class="fas fa-calendar-alt mr-3"></i>Tháng 5 - 8 năm 2020
                            </li>
                            <li class="my-3">
                                <i class="fas fa-clock mr-3"></i>4 - 6 giờ
                            </li>
                            <li>
                                <i class="fas fa-users mr-3"></i>70 chỗ
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 agile-course-main-2 mt-4">
                <img src="{{ asset('templates/edulearn/images/am3.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="buttons-w3ls">
                <a class="btn button-cour-w3ls text-white" href="{{route('temp.edulearn.course_details') }}" role="button">Xem thêm</a>
                <a class="btn bg-dark text-white" href="{{route('temp.edulearn.form') }}" role="button">Đăng ký</a>
            </div>
        </div>
        <div class="row cource-list-agile cource-list-agile-2">
            <div class="col-lg-5 agile-course-main-3 mt-4">
                <img src="{{ asset('templates/edulearn/images/am4.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7 agile-course-main text-right">
                <div class="w3ls-cource-first">
                    <img src="{{ asset('templates/edulearn/images/2.png') }}" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2"></img>
                    <div class="px-md-5 px-4  pb-md-5 pb-4">
                        <h3 class="text-dark">Phương tiện truyền thôn</h3>
                        <p class="mt-3 mb-4 pl-lg-4">Đăng ký khóa học sớm để nhận nhiều ưu đãi đặc biệt.</p>
                        <ul class="list-unstyled text-capitalize">
                            <li>Tháng 6 - 8 năm 2020
                                <i class="fas fa-calendar-alt ml-3"></i>
                            </li>
                            <li class="my-3">3 - 6 giờ
                                <i class="fas fa-clock ml-3"></i>
                            </li>
                            <li>60 chỗ
                                <i class="fas fa-users ml-3"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="buttons-w3ls-2">
                <a class="btn button-cour-w3ls text-white" href="{{route('temp.edulearn.course_details') }}" role="button">Xem thêm</a>
                <a class="btn bg-dark text-white" href="{{route('temp.edulearn.form') }}" role="button">Đăng ký</a>
            </div>
        </div>
        <div class="row cource-list-agile pt-4">
            <div class="col-lg-7 agile-course-main">
                <div class="w3ls-cource-first">
                    <img src="{{ asset('templates/edulearn/images/1.png') }}" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2"></img>
                    <div class="px-md-5 px-4  pb-md-5 pb-4">
                        <h3 class="text-dark">Báo Chí</h3>
                        <p class="mt-3 mb-4 pr-lg-5"Đăng ký khóa học sớm để nhận nhiều ưu đãi đặc biệt.</p>
                        <ul class="list-unstyled text-capitalize">
                            <li>
                                <i class="fas fa-calendar-alt mr-3"></i>Tháng 5 - 8 năm 2020
                            </li>
                            <li class="my-3">
                                <i class="fas fa-clock mr-3"></i>4 - 6 giờ
                            </li>
                            <li>
                                <i class="fas fa-users mr-3"></i>70 chỗ
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 agile-course-main-2 mt-4">
                <img src="{{ asset('templates/edulearn/images/n2.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="buttons-w3ls">
                <a class="btn button-cour-w3ls text-white" href="{{route('temp.edulearn.course_details') }}" role="button">Xem thêm</a>
                <a class="btn bg-dark text-white" href="{{route('temp.edulearn.form') }}" role="button">Đăng ký</a>
            </div>
        </div>
        <div class="row cource-list-agile cource-list-agile-2">
            <div class="col-lg-5 agile-course-main-3 mt-4">
                <img src="{{ asset('templates/edulearn/images/n1.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7 agile-course-main text-right">
                <div class="w3ls-cource-first">
                    <img src="{{ asset('templates/edulearn/images/2.png') }}" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2"></img>
                    <div class="px-md-5 px-4  pb-md-5 pb-4">
                        <h3 class="text-dark"> Truyền thông thực hành</h3>
                        <p class="mt-3 mb-4 pl-lg-4">Đăng ký khóa học sớm để nhận nhiều ưu đãi đặc biệt.</p>
                        <ul class="list-unstyled text-capitalize">
                            <li>Tháng 6 - 8 năm 2020
                                <i class="fas fa-calendar-alt ml-3"></i>
                            </li>
                            <li class="my-3">3 - 6 giờ
                                <i class="fas fa-clock ml-3"></i>
                            </li>
                            <li>60 chỗ
                                <i class="fas fa-users ml-3"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="buttons-w3ls-2">
                <a class="btn button-cour-w3ls text-white" href="{{route('temp.edulearn.course_details') }}" role="button">Xem thêm</a>
                <a class="btn bg-dark text-white" href="{{route('temp.edulearn.form') }}" role="button">Đăng ký</a>
            </div>
        </div>
    </div>
</div>
<!-- //course-->

<!-- Stats-->
@include('templates.edulearn.stats')
<!-- //Stats -->

<!-- course-->
@include('templates.edulearn.course')
<!-- //course -->
@endsection
