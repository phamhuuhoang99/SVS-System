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
        <li class="breadcrumb-item active" aria-current="page">Chi tiết khóa học</li>
    </ol>
</nav>
<!-- breadcrumb -->
<!-- //banner -->

<!-- course details -->
<div class="details-w3l py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Chi tiết
            <span class="font-weight-bold">Khóa học</span>
        </h3>

        <div class="row inner_sec_info pt-md-4">
            <!-- left side -->
            <div class="col-lg-8 single-left">
                <div class="single-left1">
                    <img src="{{ asset('templates/edulearn/images/banner5.jpg') }}" alt=" " class="img-fluid" />
                    <h6 class="details-heading font-italic my-4">Thông tin khóa học</h6>
                    <h5 class="card-title">
                        <a href="{{route('temp.edulearn.course_details') }}" class="text-dark">Bí quyết gia tăng doanh số là?</a>
                    </h5>
                    <p>Thị trường chứng khoán (TTCK) là nơi diễn ra các hoạt động giao dịch mua bán, trao đổi các loại chứng khoán khác nhau giữa người chủ sở hữu với người mua. Thực chất việc thay đổi chủ sở hữu cổ phiếu (chứng khoán) chính là quá trình vận động của tư bản chuyển từ tư bản sở hữu sang tư bản kinh doanh.</p>
                    <p class="mt-3">Thị trường chứng khoán Việt Nam đang ngày càng phát triển và trở thành lĩnh vực đầu tư vô cùng hấp dẫn, nhất là đối với những người trẻ và người có thu nhập khá trở lên. Tiềm năng thị trường vô cùng lớn hứa hẹn những khoản lợi nhuận khổng lồ mà nhưng cũng tiềm ẩn không ít rủi ro nếu như không biết cách đánh giá và đầu tư chính xác, khách quan. Nhận thấy tiềm năng phát triển đầy hứa hẹn nên rất nhiều người kéo nhau đi học kinh doanh chứng khoán cơ bản xây dựng nền tảng cá nhân vững chắc. </p>
                </div>
                <div class="admin p-4 my-5">
                    <p>
                        <i class="fas fa-quote-left mr-2"></i>Hãy tham gia ngay khóa học chứng khoán online "Nhập môn chứng khoán" để trở thành nhà đầu tư chứng khoán thông minh và giàu có !
                        <i class="fas fa-quote-right ml-2"></i>
                    </p>
                    <a href="#" class="mt-3 font-weight-bold text-right blockquote-footer"> Đặng Trọng Khang</a>
                </div>
                <div class="single-left2">
                    <h6 class="reque-title text-dark mb-3">Bạn được học những gì</h6>
                    <div class="row">
                        <div class="col-md-6 single-left2-left">
                            <ul>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{route('temp.edulearn.course_details') }}">Tránh được những rủi ro thua lỗ, cạm bẫy trên TTCK</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{route('temp.edulearn.course_details') }}">Có được tư duy đúng trong đầu tư cổ phiếu hiệu quả, thông minh</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{route('temp.edulearn.course_details') }}">Nắm được những công cụ để đánh giá, phân tích và đầu tư chứng khoán sớm có lời lãi nhất</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{route('temp.edulearn.course_details') }}">Nhanh chóng biết cách đầu tư chứng khoán để đem về nguồn lợi nhuận khổng lồ</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{route('temp.edulearn.course_details') }}">Đầy đủ những hướng dẫn "cầm tay chỉ việc" để có thể tự tin tham gia TTCK</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{route('temp.edulearn.course_details') }}">Kiến thức cơ bản nhất về thị trường chứng khoán, về đầu tư chứng khoán và tiềm năng lợi nhuận khổng lồ của TTCK</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 single-left2-left">
                            <ul>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{route('temp.edulearn.course_details') }}">At vero eos et accusamus iusto</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{route('temp.edulearn.course_details') }}">Sed ut perspiciatis unde omnis</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{route('temp.edulearn.course_details') }}">Accusantium doloremque lauda</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{route('temp.edulearn.course_details') }}">Vel illum qui dolorem fugiat quo</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{route('temp.edulearn.course_details') }}">Quis autem vel eum repreh</a>
                                </li>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="{{route('temp.edulearn.course_details') }}">Neque porro quisquam est qui</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="social-details p-4 my-5 border">
                    <h5>Chia sẻ:</h5>
                    <ul class="list-unstyled social-details-icons my-3">
                        <li>
                            <a href="#" class="fab fa-facebook-f bg-dark text-white text-center rounded-circle"> </a>
                        </li>
                        <li class="mx-2">
                            <a href="#" class="fab fa-twitter bg-dark text-white text-center rounded-circle"> </a>
                        </li>
                        <li>
                            <a href="#" class="fab fa-google-plus-g bg-dark text-white text-center rounded-circle"> </a>
                        </li>
                        <li class="ml-2">
                            <a href="#" class="fas fa-rss bg-dark text-white text-center rounded-circle"> </a>
                        </li>
                        </li>
                    </ul>
                    <div class="text-right">
                        <a class="btn bg-dark text-white" href="{{route('temp.edulearn.form') }}" role="button">Đăng ký</a>
                    </div>
                </div>
            </div>
            <!-- //left side -->
            <!-- right side -->
            @include('templates.edulearn.rightside')
            <!-- //right side -->
        </div>
    </div>
</div>
<!-- //course details -->

<!-- Stats-->
<div class="stats-w3layouts py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="stats-info">
            <div class="row">
                <div class="col-md-3 col-6 stats-grid-w3-agile text-center px-xl-5 px-3">
                    <div class='numscroller font-weight-bold my-2' data-slno='1' data-min='0' data-max='1280'
                        data-delay='.5' data-increment="1">1280</div>
                    <p class="text-uppercase text-white border-top pt-4 mt-3">happy students</p>
                </div>
                <div class="col-md-3 col-6 stats-grid-w3-agile text-center  px-xl-5 px-3">
                    <div class='numscroller font-weight-bold my-2' data-slno='1' data-min='0' data-max='920'
                        data-delay='.5' data-increment="1">920</div>
                    <p class="text-uppercase text-white border-top pt-4 mt-3">approved courses</p>
                </div>
                <div class="col-md-3 col-6 stats-grid-w3-agile text-center mt-md-0 mt-5  px-xl-5 px-3">
                    <div class='numscroller font-weight-bold my-2' data-slno='1' data-min='0' data-max='1200'
                        data-delay='.5' data-increment="1">1200</div>
                    <p class="text-uppercase text-white border-top pt-4 mt-3">certified teachers</p>
                </div>
                <div class="col-md-3 col-6 stats-grid-w3-agile text-center mt-md-0 mt-5  px-xl-5 px-3">
                    <div class='numscroller font-weight-bold my-2' data-slno='1' data-min='0' data-max='1200'
                        data-delay='.5' data-increment="1">1200</div>
                    <p class="text-uppercase text-white border-top pt-4 mt-3">graduate students</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Stats -->

<!-- course-->
<div class="classes py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-sm-5 mb-4">choose your
            <span class="font-weight-bold">course</span>
        </h3>
        <div class="row pt-4">
            <div class="col-lg-4 col-news-top text-center">
                <!-- Left to right -->
                <!-- normal -->
                <div class="ih-item circle effect16 left_to_right mx-auto">
                    <a href="{{route('temp.edulearn.language') }}">
                        <div class="img">
                            <img src="{{ asset('templates/edulearn/images/c1.jpg') }}" alt="img" class="img-fluid rounded-circle">
                        </div>
                        <div class="info">
                            <h3 class="text-capitalize text-white">language</h3>
                            <p>Description goes here</p>
                        </div>
                    </a>
                </div>
                <h6 class="small-heading text-capitalize text-center mt-4">
                    <a href="{{route('temp.edulearn.language') }}" class="text-dark">language
                        <i class="fas fa-long-arrow-alt-right ml-1"></i>
                    </a>
                </h6>
                <!-- end normal -->
                <!-- end Left to right -->
            </div>
            <div class="col-lg-4 col-news-top text-center my-lg-0 my-sm-5 my-4">
                <!-- Left to right -->
                <!-- normal -->
                <div class="ih-item circle effect16 left_to_right mx-auto">
                    <a href="{{route('temp.edulearn.communication') }}">
                        <div class="img">
                            <img src="{{ asset('templates/edulearn/images/c2.jpg') }}" alt="img" class="img-fluid rounded-circle">
                        </div>
                        <div class="info">
                            <h3 class="text-capitalize text-white">communication</h3>
                            <p>Description goes here</p>
                        </div>
                    </a>
                </div>
                <h6 class="small-heading text-capitalize text-center mt-4">
                    <a href="{{route('temp.edulearn.communication') }}" class="text-dark">communication
                        <i class="fas fa-long-arrow-alt-right ml-1"></i>
                    </a>
                </h6>
                <!-- end normal -->
                <!-- end Left to right -->
            </div>
            <div class="col-lg-4 col-news-top text-center">
                <!-- Left to right -->
                <!-- normal -->
                <div class="ih-item circle effect16 left_to_right mx-auto">
                    <a href="{{route('temp.edulearn.business') }}">
                        <div class="img">
                            <img src="{{ asset('templates/edulearn/images/c3.jpg') }}" alt="img" class="img-fluid rounded-circle">
                        </div>
                        <div class="info">
                            <h3 class="text-capitalize text-white">business</h3>
                            <p>Description goes here</p>
                        </div>
                    </a>
                </div>
                <h6 class="small-heading text-capitalize text-center mt-4">
                    <a href="{{route('temp.edulearn.business') }}" class="text-dark">business
                        <i class="fas fa-long-arrow-alt-right ml-1"></i>
                    </a>
                </h6>
                <!-- end normal -->
                <!-- end Left to right -->
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-news-top text-center">
                <!-- Left to right -->
                <!-- normal -->
                <div class="ih-item circle effect16 left_to_right mx-auto">
                    <a href="{{route('temp.edulearn.software') }}">
                        <div class="img">
                            <img src="{{ asset('templates/edulearn/images/c4.jpg') }}" alt="img" class="img-fluid rounded-circle">
                        </div>
                        <div class="info">
                            <h3 class="text-capitalize text-white">software</h3>
                            <p>Description goes here</p>
                        </div>
                    </a>
                </div>
                <h6 class="small-heading text-capitalize text-center mt-4">
                    <a href="{{route('temp.edulearn.software') }}" class="text-dark">software
                        <i class="fas fa-long-arrow-alt-right ml-1"></i>
                    </a>
                </h6>
                <!-- end normal -->
                <!-- end Left to right -->
            </div>
            <div class="col-lg-4 col-news-top text-center  my-lg-0 my-sm-5 my-4">
                <!-- Left to right -->
                <!-- normal -->
                <div class="ih-item circle effect16 left_to_right mx-auto">
                    <a href="{{route('temp.edulearn.social_media') }}">
                        <div class="img">
                            <img src="{{ asset('templates/edulearn/images/c6.jpg') }}" alt="img" class="img-fluid rounded-circle">
                        </div>
                        <div class="info">
                            <h3 class="text-capitalize text-white">social media </h3>
                            <p>Description goes here</p>
                        </div>
                    </a>
                </div>
                <h6 class="small-heading text-capitalize text-center mt-4">
                    <a href="{{route('temp.edulearn.social_media') }}" class="text-dark">social media
                        <i class="fas fa-long-arrow-alt-right ml-1"></i>
                    </a>
                </h6>
                <!-- end normal -->
                <!-- end Left to right -->
            </div>
            <div class="col-lg-4 col-news-top text-center">
                <!-- Left to right -->
                <!-- normal -->
                <div class="ih-item circle effect16 left_to_right mx-auto">
                    <a href="{{route('temp.edulearn.photography') }}">
                        <div class="img">
                            <img src="{{ asset('templates/edulearn/images/c5.jpg') }}" alt="img" class="img-fluid rounded-circle">
                        </div>
                        <div class="info">
                            <h3 class="text-capitalize text-white">photography </h3>
                            <p>Description goes here</p>
                        </div>
                    </a>
                </div>
                <h6 class="small-heading text-capitalize text-center mt-4">
                    <a href="{{route('temp.edulearn.photography') }}" class="text-dark">photography
                        <i class="fas fa-long-arrow-alt-right ml-1"></i>
                    </a>
                </h6>
                <!-- end normal -->
                <!-- end Left to right -->
            </div>
        </div>
    </div>
</div>
<!-- //course -->


@endsection
