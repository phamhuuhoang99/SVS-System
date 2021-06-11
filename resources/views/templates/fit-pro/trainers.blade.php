@extends('templates.fit-pro.master')
@section('title', 'Fit Pro')
@section('content')
    <!----start-slide-bottom--->
    <div class="second-head">
        <div class="container">
            <h2>
                <a href="{{ route('temp.fit-pro.index') }}">
                    <h5>Trang Chủ</h5>
                </a> / TRAINERS
            </h2>
        </div>
    </div>
    <!--tainers-section-->
    @include('templates.fit-pro.tainer')
    <!-- //End-team-->
    <div class="trainee-section">
        <div class="container">
            <h3>Đào Tạo Trainer</h3>
            <div class="trainee-grids">
                <div class="col-md-4 trainee-grid wow zoomInLeft animated">
                    <a href="{{ route('temp.fit-pro.single') }}"><img src="{{ asset('templates/fit-pro/images/b1.jpg') }}" class="img-responsive"
                            alt="" /></a>
                    <div class="date">
                        <lable>30</lable>
                        <span>Tháng 5</span>
                    </div>
                    <a href="{{ route('temp.fit-pro.single') }}">
                        <h4>Đào tạo HLV Cao cấp</h4>
                    </a>
                    <p>Đội ngũ giàu kiến thức với nền tảng kiến thức vững trải, đáp ứng tốt mọi yêu cầu của mọi khách hàng</p>
                </div>
                <div class="col-md-4 trainee-grid wow fadeInUpBig animated animated" data-wow-delay="0.4s">
                    <a href="{{ route('temp.fit-pro.single') }}"><img src="{{ asset('templates/fit-pro/images/b2.jpg') }}" class="img-responsive"
                            alt="" /></a>
                    <div class="date">
                        <lable>30</lable>
                        <span>Tháng 8</span>
                    </div>
                    <a href="{{ route('temp.fit-pro.single') }}">
                        <h4>Đào tạo Quản lý HLV
                        </h4>
                    </a>
                    <p>Đội ngũ giàu kiến thức với nền tảng kiến thức vững trải, đáp ứng tốt mọi yêu cầu của mọi khách hàng</p>
                </div>
                <div class="col-md-4 trainee-grid wow zoomInRight animated">
                    <a href="{{ route('temp.fit-pro.single') }}"><img src="{{ asset('templates/fit-pro/images/b3.jpg') }}" class="img-responsive"
                            alt="" /></a>
                    <div class="date">
                        <lable>15</lable>
                        <span>Tháng 11</span>
                    </div>
                    <a href="{{ route('temp.fit-pro.single') }}">
                        <h4>Đào tạo Quản lý Club</h4>
                    </a>
                    <p>Đội ngũ giàu kiến thức với nền tảng kiến thức vững trải, đáp ứng tốt mọi yêu cầu của mọi khách hàng</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--start-events-->
    @include('templates.fit-pro.news')
@endsection
