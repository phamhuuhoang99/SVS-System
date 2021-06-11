@extends('templates.villas.master')
@section('title', 'Villas')
@section('content')
    <!-- page details -->
    <div class="breadcrumb-mobamu">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href={{route("temp.villas.index") }}>Trang Chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Về SVS</li>
        </ol>
    </div>
    <!-- //page details -->

    @include('templates.villas.sectionabout')

    <!-- middle -->
    <div class="middle py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="welcome-left text-center py-md-5 py-3">
                <h3>Tận Hưởng Mọi Khoảnh Khắc Tuyệt Vời Bên Gia Đình Trong Villas</h3>
                <a href={{route("temp.villas.book") }} class="btn button-style button-style mt-sm-5 mt-4">Đặt Ngay</a>
            </div>
        </div>
    </div>
    <!-- //middle -->

    <!-- team -->
    <div class="team text-center py-5" id="team">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center text-bl font-weight-bold">Đội Ngũ</h3>
            {{--  <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>  --}}
            <div class="row team-bottom pt-4">
                <div class="col-lg-3 col-sm-6 team-grid">
                    <img src={{ asset("templates/villas/images/t1.jpg") }} class="img-fluid" alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Mack Joe</h4>
                        </div>
                        <ul>
                            <li class="f1">
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </li>
                            <li class="f2">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li class="f3">
                                <a href="#">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-grid mt-sm-0 mt-5">
                    <img src={{ asset("templates/villas/images/t3.jpg") }} class="img-fluid" alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Cruz Deo</h4>
                        </div>
                        <ul>
                            <li class="f1">
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </li>
                            <li class="f2">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li class="f3">
                                <a href="#">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-grid mt-lg-0 mt-5">
                    <img src={{ asset("templates/villas/images/t2.jpg") }} class="img-fluid" alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Rochy Jae</h4>
                        </div>
                        <ul>
                            <li class="f1">
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </li>
                            <li class="f2">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li class="f3">
                                <a href="#">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-grid  mt-lg-0 mt-5">
                    <img src={{ asset("templates/villas/images/t4.jpg") }} class="img-fluid" alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Rojo Poy</h4>
                        </div>
                        <ul>
                            <li class="f1">
                                <a href="#">
                                    <span class="fa fa-facebook"></span>
                                </a>
                            </li>
                            <li class="f2">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li class="f3">
                                <a href="#">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //team -->

    @include('templates.villas.review')
@endsection
