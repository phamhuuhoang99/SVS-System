@extends('templates.inwardly.master')
@section('title', 'Inwardly')
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href={{ route("temp.inwardly.index") }}>Trang Chủ</a>
    </li>
    <li class="breadcrumb-item active">Dịch Vụ</li>
</ol>

<!--/banner-bottom-w3ls-->
<section class="banner-bottom-w3ls py-md-5 py-4">
    <div class="container">
        <div class="inner-sec-wthreelayouts py-md-5 py-4">
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src={{ asset("templates/inwardly/images/ab3.jpg") }} alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 about-right">
                    <h3>dịch vụ của chúng tôi</h3>
                    <h4 style="line-height: 1.7">THIẾT KẾ NỘI THẤT & ĐỒ HỌA</h4>
                    <p class="my-4">Nhiều mẫu mã thiết kế nội thất đa dạng, luôn cập nhật xu hướng mới dựa theo nhu cầu sống trong không gian.</p>
                    <!--/about-in-->
                    <div class="row">
                        <div class="col-lg-6 about-in text-left">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-anchor"></i>
                                    <h5 class="card-title"> Chi Nhánh 1</h5>
                                    <p class="card-text">Thiết kế kiến trúc
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 about-in text-left">
                            <div class="card">
                                <div class="card-body">
                                    <i class="far fa-map"></i>
                                    <h5 class="card-title"> Chi Nhánh 2</h5>
                                    <p class="card-text">Thi công công trường
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/about-in-->

                </div>
            </div>
            <!--/services-grids-->
            <div class="service-mid-sec mt-lg-5 mt-4">
                <div class="middle-serve-content py-md-5 py-4">
                    <div class="row middle-grids">
                        <div class="col-lg-4 about-in middle-grid-info text-center">
                            <div class="card">
                                <div class="card-body">
                                    <i class="far fa-lightbulb"></i>
                                    <h5 class="card-title">Chúng tôi làm</h5>
                                    {{--  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.  --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 about-in middle-grid-info text-center">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-signal"></i>
                                    <h5 class="card-title"> CHIẾN LƯỢC CỦA CHÚNG TÔI</h5>
                                    {{--  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.  --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 about-in middle-grid-info text-center">
                            <div class="card">
                                <div class="card-body">
                                    <i class="far fa-clone"></i>
                                    <h5 class="card-title"> DỰ ÁN CỦA CHÚNG TÔI</h5>
                                    {{--  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.  --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//services-grids-->
        </div>
    </div>
</section>
<!--//banner-bottom-w3ls-->
@include('templates.inwardly.team')
<!---->
<section class="banner-bottom-w3ls bg-light py-md-5 py-4">
    <div class="container">
        <div class="inner-sec-wthreelayouts py-md-5 py-4">
            <h2 class="tittle text-center mb-lg-5 mb-3">Dịch vụ nổi bật</h2>
            <!--/services-grids-->
            <div class="service-mid-sec mt-lg-5 mt-4">
                <div class="middle-serve-content">
                    <div class="row middle-grids">
                        <div class="col-lg-4 about-in middle-grid-info text-center">
                            <div class="card img">
                                <div class="card-body img">
                                    <img src={{ asset("templates/inwardly/images/ab3.jpg") }} alt="" class="img-fluid">
                                    <h5 class="card-title">Thoáng Đãng</h5>
                                    <p class="card-text">Mô hình dịch vụ khép kín.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 about-in middle-grid-info text-center">
                            <div class="card img">
                                <div class="card-body img">
                                    <img src={{ asset("templates/inwardly/images/ab5.jpg") }} alt="" class="img-fluid">
                                    <h5 class="card-title">Bền Bỉ</h5>
                                    <p class="card-text">Sức hút độc đáo từ thiết kế gỗ độc đáo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 about-in middle-grid-info text-center">
                            <div class="card img">
                                <div class="card-body img">
                                    <img src={{ asset("templates/inwardly/images/ab8.jpg") }} alt="" class="img-fluid">
                                    <h5 class="card-title">Sang trọng</h5>
                                    <p class="card-text">Sắc màu mới thổi hồn thơ vào căn nhà bạn
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//services-grids-->
        </div>
    </div>
</section>
@endsection