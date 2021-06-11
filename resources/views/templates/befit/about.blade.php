@extends('templates.befit.master')
@section('title', 'Befit')
@section('content')
    <!-- page details -->
    <div class="breadcrumb-agile">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('temp.befit.index')}}">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Về chúng tôi</li>
        </ol>
    </div>
    <!-- //page details -->

    <!-- about -->
    <div class="what py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 mb-sm-4 mb-3 text-bl text-center font-weight-bold">Về Chúng Tôi</h3>
            <p class="mx-auto wstyles text-center mb-sm-5 mb-4">Giá trị mà Chúng tôi luôn muốn mang lại cho khách hàng là trải nghiệm tập luyện thoải mái và hài lòng nhất trong môi trường thân thiện từ nhân viên tới khách hàng tập luyện cùng.
            </p>
            <img src="{{asset('templates/befit/images/about2.jpg') }} " alt="" class="img-fluid">
        </div>
    </div>
    <!-- //about -->

    <!-- what we do -->
    <div class="what pb-5" id="what">
        @include('templates.befit.wedo')
    </div>
    <!-- //what we do -->

    <!-- stats section -->
    @include('templates.befit.stats')
    <!-- //stats section -->

    <!-- team -->
    <div class="team py-5" id="team">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 text-bl text-center font-weight-bold">Đội ngũ Coach</h3>
            <p class="title-sub mb-sm-5 mb-4 text-center">Đội ngũ coach của chúng tôi được sàng lọc kĩ càng, phải trải qua giai đoạn trainning ít nhất 3 tháng để có đủ kĩ năng giao tiếp và kiến thức chuyên môn hướng dẫn cho khách hàng</p>
            <div class="row team-bottom pt-4">
                <div class="col-lg-3 col-sm-6 team-grid">
                    <img src="{{asset('templates/befit/images/t1.jpg') }} " class="img-fluid" alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Hồng Nhung</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook f1" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter f2" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus f3" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-grid mt-sm-0 mt-5">
                    <img src="{{asset('templates/befit/images/t3.jpg') }} " class="img-fluid" alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Thúy Nga</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook f1" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter f2" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus f3" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-grid mt-lg-0 mt-5">
                    <img src="{{asset('templates/befit/images/t2.jpg') }} " class="img-fluid" alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Phạm Huệ</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook f1" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter f2" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus f3" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-grid  mt-lg-0 mt-5">
                    <img src="{{asset('templates/befit/images/t4.jpg') }} " class="img-fluid" alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Vân Hồ</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook f1" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter f2" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus f3" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //team -->

    <!-- testimonials -->
    @include('templates.befit.testimonials')
    <!-- //testimonials -->
@endsection
