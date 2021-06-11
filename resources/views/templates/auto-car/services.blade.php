@extends('templates.auto-car.master')
@section('title', 'Auto Car')
@section('content')
    <!-- Main -->
    <!-- Services -->
    @include('templates.auto-car.components.services')
    <!-- //services -->

    <!-- Intro -->
    @include('templates.auto-car.components.intro')
    <!-- //Intro -->

    <!-- Services -->
    <div class="services serv-w3" id="services">
        <h3 class="title-w3">Sự Kiện Mới Nhất</h3>
        <div class=" col-md-3 section-grid-wthree one">
            <div class="services-info-w3-agileits">
                <h5 class="sub-title">Genesis G70</h5>
                <p class="para-w3">Genesis G70 là 1 trong những mẫu sedan tốt nhất năm 2020.</p>
            </div>
            <div class="services-img-agileits-w3layouts">
                <img src="{{ asset('templates/auto-car/images/ev.jpg') }}" alt="service-img">
            </div>
        </div>
        <div class=" col-md-3 section-grid-wthree">
            <div class="services-img-agileits-w3layouts">
                <img src="{{ asset('templates/auto-car/images/ev3.jpg') }}" alt="service-img">
            </div>
            <div class="services-info-w3-agileits mid">
                <h5 class="sub-title">Mercedes C-Class</h5>
                <p class="para-w3">Mercedes C-Class là mẫu sedan hạng sang danh tiếng lâu đời.</p>
            </div>
        </div>
        <div class=" col-md-3 section-grid-wthree">
            <div class="services-info-w3-agileits">
                <h5 class="sub-title"> BMW 5-Series</h5>
                <p class="para-w3">BMW 5-Series là mẫu sedan với hiệu suất quyến rũ.</p>
            </div>
            <div class="services-img-agileits-w3layouts">
                <img src="{{ asset('templates/auto-car/images/ev2.jpg') }}" alt="service-img">
            </div>
        </div>
        <div class=" col-md-3 section-grid-wthree">
            <div class="services-img-agileits-w3layouts">
                <img src="{{ asset('templates/auto-car/images/ev4.jpg') }}" alt="service-img">
            </div>
            <div class="services-info-w3-agileits mid">
                <h5 class="sub-title">Honda Accord</h5>
                <p class="para-w3">Honda Accord là mẫu sedan gốc Nhật đáng cân nhắc.</p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //Services -->
    <!-- //Main -->

@endsection
