@extends('templates.yoga-lite.master')
@section('title', 'Yoga Lite')
@section('content')
<!-- //about -->
<section class="banner-bottom py-5">
    <div class="container py-md-5">
        <div class="row banner-grids mb-lg-5">

            <div class="col-lg-7 content-right">
                <h3 class="title-w3pvt">Giới thiệu về Yoga Lite</h3>
                <h4>Chúng tôi giúp mang lại sức khỏe cho tất cả mọi người.</h4>
                <p class="mt-2 text-left">Trung tâm Yoga Lite đã nhanh chóng là lựa chọn tin tưởng của luyện tập Yoga của hàng nghìn hội viên yêu mến bộ môn Yoga. Chúng tôi luôn phát triển về giáo án tập, trang thiết bị phòng tập để phục vụ nhu cầu ngày càng tăng cao của hội viên.</p>
                <p class="mt-2 text-left">Chúng tôi luôn tự hào là 1 trong những phòng tập Yoga tốt nhất.</p>
                <div class="row stats text-left mt-5">
                    <div class="col-lg-4 counter">
                        <span class="fa fa-users"></span>
                        <div class="counter-info">
                            <h5>7200+</h5>
                            <p>Members</p>
                        </div>
                    </div>
                    <div class="col-lg-4 counter two">
                        <span class="fa fa-user-md"></span>
                        <div class="counter-info">
                            <h5>1150+</h5>
                            <p>Classes</p>

                        </div>
                    </div>
                    <div class="col-lg-4 counter">
                        <span class="fa fa-diamond"></span>
                        <div class="counter-info">
                            <h5>65+</h5>
                            <p>Experience</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 content-left">
                <img src="{{ asset('templates/yoga-lite/images/ab.jpg') }}" alt="" class="img-fluid">
            </div>

        </div>

    </div>
</section>
<!-- /about -->


<!-- /last-content -->
@include('templates.yoga-lite.last')
<!-- //last-content -->
<!-- banner-bottom -->
@include('templates.yoga-lite.course')
<!-- //banner-bottom -->
<!-- /team-content -->
<section class="services py-5" id="team">
    <div class="container py-md-5">
        <h3 class="title-w3pvt text-center mb-5">Đội Ngũ Trainer</h3>
        <div class="row team-grids text-left mt-md-5 mt-4">
            <div class="col-lg-4 team-main">

                <div class="team-img"><img src="{{ asset('templates/yoga-lite/images/t1.jpg') }}" alt="news image" class="img-fluid"> </div>
                <div class="team-info">

                    <h4>Anna Strong</h4>
                    <small>Trainer</small>
                    <p>Có nhiều năm kinh nghiệm trong nghề Trainer, từng đạo tạo rất nhiều học viên</p>

                </div>


            </div>

            <div class="col-lg-4 team-main">
                <div class="team-info">

                    <h4>
                        Ben Smith
                    </h4>
                    <small>Trainer</small>
                    <p>Có nhiều năm kinh nghiệm trong nghề Trainer, từng đạo tạo rất nhiều học viên</p>

                </div>

                <div class="team-img"><img src="{{ asset('templates/yoga-lite/images/t2.jpg') }}" alt="news image" class="img-fluid"> </div>


            </div>

            <div class="col-lg-4 team-main">

                <div class="team-img"><img src="{{ asset('templates/yoga-lite/images/t3.jpg') }}" alt="news image" class="img-fluid"> </div>
                <div class="team-info">

                    <h4>Alen Winter</h4>
                    <small>Trainer</small>
                    <p>Có nhiều năm kinh nghiệm trong nghề Trainer, từng đạo tạo rất nhiều học viên</p>

                </div>


            </div>

        </div>

    </div>
</section>
<!-- //team-content -->
<!--/testimonials -->
<section class="testimonials py-5" id="testimonials">
    <div class="container py-md-5">
        <div class="header text-center">
            <h3 class="title-w3pvt two mb-lg-5 mb-4"> Client Reviews<span>.</span></h3>
        </div>
        <div class="row">
            <div class="col-lg-4 test-info text-left">
                <p><span class="fa fa-quote-left"></span> Giúp bạn giảm cân, giữ dáng, mãi mãi thanh xuânNulla non laoreet eleifend. <span class="fa fa-quote-right"></span></p>
                <div class="test-img text-right mb-3">
                    <img src="{{ asset('templates/yoga-lite/images/te2.jpg') }}" class="img-fluid" alt="user-image">
                </div>
                <h3 class="my-md-2 my-3 text-right">Jenifer Burns</h3>

                <ul class="list-unstyled w3layouts-icons clients text-right">
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star-half-o"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 test-info text-left">
                <p><span class="fa fa-quote-left"></span> Giúp bạn giảm cân, giữ dáng, mãi mãi thanh xuânNulla non laoreet eleifend. <span class="fa fa-quote-right"></span></p>

                <div class="test-img text-right mb-3">
                    <img src="{{ asset('templates/yoga-lite/images/te3.jpg') }}" class="img-fluid" alt="user-image">
                </div>
                <h3 class="my-md-2 my-3 text-right"> Abraham Smith</h3>

                <ul class="list-unstyled w3layouts-icons clients text-right">
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star-half-o"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 test-info text-left">
                <p><span class="fa fa-quote-left"></span> Giúp bạn giảm cân, giữ dáng, mãi mãi thanh xuânNulla non laoreet eleifend. <span class="fa fa-quote-right"></span></p>

                <div class="test-img text-right mb-3">
                    <img src="{{ asset('templates/yoga-lite/images/te1.jpg') }}" class="img-fluid" alt="user-image">
                </div>
                <h3 class="my-md-2 my-3 text-right">Jenifer Burns</h3>

                <ul class="list-unstyled w3layouts-icons clients text-right">
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-star-half-o"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--//testimonials -->
@endsection