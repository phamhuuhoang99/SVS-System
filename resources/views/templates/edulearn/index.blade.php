@extends('templates.edulearn.master')
@section('title','Edulearn')
@section('content')
<!-- banner -->
<div class="banner-agile">
    <ul class="slider">
        <li class="active">
            <div class="banner-w3ls-1">
            </div>
        </li>
        <li>
            <div class="banner-w3ls-2">
            </div>
        </li>
        <li>
            <div class="banner-w3ls-3">
            </div>
        </li>
        <li>
            <div class="banner-w3ls-4">
            </div>
        </li>
        <li class="prev">
            <div class="banner-w3ls-5">
            </div>
        </li>
    </ul>
    <ul class="pager">
        <li data-index="0" class="active"></li>
        <li data-index="1"></li>
        <li data-index="2"></li>
        <li data-index="3"></li>
        <li data-index="4"></li>
    </ul>
    <div class="banner-text-posi-w3ls">
        <div class="banner-text-whtree">
            <h3 class="text-capitalize text-white p-4">Tương Lai Của Bạn
                <b>Nhiệm Vụ Của Chúng Tôi!</b>
            </h3>
            <p class="px-4 py-3 text-dark">Trở thành chuyên gia hàng đầu sau khi tốt nghiệp!</p>
            <a href="{{route('temp.edulearn.about') }}" class="button-agiles text-capitalize text-white mt-sm-5 mt-4">Xem thêm</a>
        </div>
    </div>

    @include('templates.edulearn.banner')

</div>
<!-- //banner -->

<!-- about -->
<div class="about py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Chào mừng bạn đến
            <span class="font-weight-bold">Edulearn</span>
        </h3>
        <div class="row pt-md-4">
            <div class="col-lg-6 about_right">
                <h3 class="text-capitalize text-right font-weight-light font-italic">Môi trường học thân thiện tại
                    <span class="font-weight-bold">Edulearn</span>
                </h3>
                <p class="text-right my-4 pr-4 border-right">Chúng tôi tự hào là siêu thị các khóa học trực tuyến ngắn hạn lớn nhất Đông Nam Á với hàng nghìn khóa học thuộc mọi lĩnh vực, đội ngũ giảng viên chuyên nghiệp và mạng lưới học viên rộng khắp cả nước.</p>
                <div class="about_left-list">
                    <h6 class="mb-lg-3 mb-2 font-weight-bold text-dark">Sứ mệnh của chúng tôi</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-check mr-3"></i>Khóa Học Online chất lượng</li>
                        <li class="mb-2">
                            <i class="fas fa-check mr-3"></i>Chất lượng giáo viên tốt</li>
                        <li class="mb-2">
                            <i class="fas fa-check mr-3"></i>Có Thư viên & Cửa Hàng Sách</li>
                        <li class="mb-2">
                            <i class="fas fa-check mr-3"></i>Ưu đãi tốt nhất</li>
                        <li class="mb-2">
                            <i class="fas fa-check mr-3"></i>Hổ trợ 24/7</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 left-img-agikes mt-lg-0 mt-sm-4 mt-3 text-right">
                <img src="{{asset('templates/edulearn/images/ab.jpg') }}" alt="" class="img-fluid" />

                <div class="about-bottom text-center p-sm-5 p-4">
                    <ul>
                        <li>
                            <h5>60+</h5>
                            <p class="text-dark font-weight-bold">Giáo viên</p>
                        </li>
                        <li>
                            <h5>2000+</h5>
                            <p class="text-dark font-weight-bold">Học sinh</p>
                        </li>
                        <li>
                            <h5>80+</h5>
                            <p class="text-dark font-weight-bold">Khóa học</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //about -->

<!-- Stats-->
@include('templates.edulearn.stats')
<!-- //Stats -->

<!-- course-->
@include('templates.edulearn.course')
<!-- //course -->

<!-- what we do -->
@include('templates.edulearn.wedo')
<!-- //what we do -->

<!-- testimonials -->
@include('templates.edulearn.testimonials')
<!-- //testimonials -->

<!-- news -->
@include('templates.edulearn.news')
<!-- //news -->

@endsection