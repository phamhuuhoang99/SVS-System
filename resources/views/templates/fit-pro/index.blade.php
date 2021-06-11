@extends('templates.fit-pro.master')
@section('title', 'Fit Pro')
@section('content')

    <!--start-slide-bottom-->
    <div class="banner-bottom wow bounceIn animated" data-wow-delay="0.4s">
        <div class="container">
            <h2>GIỚI THIỆU</h2>
            <p>Cam kết chương trình tập luyện được thiết kế riêng biệt, phù hợp cho mỗi khách hàng, để tất cả những giọt mồ hôi, nước mắt, tất cả thời gian, công sức, tất cả mệt mỏi, đau đớn trong quá trình luyện tập sẽ mang lại cho bạn kết quả xứng đáng nhất.</p>
        </div>
    </div>
    <!--tainers-section-->
    @include('templates.fit-pro.tainer')
    <!-- //End-team-->
    <!--classes-->
    @include('templates.fit-pro.class')
    <!--start-new-->
    @include('templates.fit-pro.news')
@endsection
