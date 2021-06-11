@extends('templates.edulearn.master')
@section('title', 'Edulearn')
@section('content')
<!-- banner -->
<div class="banner-agile-2">
    @include('templates.edulearn.banner')
</div>
    <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('temp.edulearn.index') }}">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Về chúng tôi</li>
        </ol>
    </nav>
    <!-- breadcrumb -->
    <!-- //banner -->

    <!-- history -->
    <div class="about-page py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Về
                <span class="font-weight-bold">Chúng Tôi</span>
            </h3>
            <div class="row about-head-wthree">
                <div class="col-lg-6 left-abw3ls">
                    <img src="{{ asset('templates/edulearn/images/ap-1.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 right-abw3ls mt-lg-0 mt-sm-5 mt-4">
                    <h4 class="font-italic border-bottom text-center font-weight-bold pb-3 mb-4">Lịch Sử</h4>
                    <p>SVS tự hào là "siêu thị" các khóa học trực tuyến ngắn hạn lớn nhất Đông Nam Á với hàng nghìn khóa học thuộc mọi lĩnh vực, đội ngũ giảng viên chuyên nghiệp, giàu kinh nghiệm</p>
                    <p class="mt-3">Mạng lưới học viên rộng khắp cả nước. SVS - nơi bạn học mọi kĩ năng làm chủ tương lai. Giúp người học trải nghiệm và trang bị kỹ năng học chủ động, để có thể kiếm tiền bằng nghề/kiến thức mà mình theo học.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- //history -->

    <!-- mission -->
    <div class="about-page-2 py-5">
        <div class="container-fluid py-xl-5 py-lg-3">
            <div class="row about-head-wthree-2">
                <div class="col-lg-4 left-abw3ls text-lg-left text-center">
                    <img src="{{ asset('templates/edulearn/images/ap-2.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 right-abw3ls my-lg-0 my-sm-5 my-4">
                    <h4 class="font-italic border-bottom text-center font-weight-bold pb-3 mb-4">Sứ mệnh</h4>
                    <p>Nếu bạn có đam mê với giáo dục, hãy cùng Chúng tôi tạo nên những đột phá mới để thay đổi thực tại và kiến tạo tương lai! </p>
                    <p class="mt-3">SVS là một hệ thống đào tạo trực tuyến, cổng kết nối Chuyên gia với Học viên. Sứ mệnh của SVS là chia sẻ kiến thức thực tiễn tới 10 triệu người dân Việt Nam</p>
                </div>
                <div class="col-lg-4 left-abw3ls text-lg-left text-center">
                    <img src="{{ asset('templates/edulearn/images/ap-3.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- //mission -->

    <!-- team -->
    <div class="team py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">
                <span class="font-weight-bold">Đội Ngũ</span>
            </h3>
            <div class="row inst-grids pt-md-4">
                <div class="col-md-3 col-6 blog-gd-w3ls">
                    <img src="{{ asset('templates/edulearn/images/team1.jpg') }}" alt=" " class="img-fluid">
                    <div class="date-w3">
                        <h4>Khoa Đăng</h4>
                        <p class="para-w3-agile">Giám đốc</p>
                        <div class="agileinfo-social-grids">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-rss"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 blog-gd-w3ls">
                    <img src="{{ asset('templates/edulearn/images/team2.jpg') }}" alt=" " class="img-fluid">
                    <div class="date-w3">
                        <h4>Khánh Hạ</h4>
                        <p class="para-w3-agile">Giáo Viên</p>
                        <div class="agileinfo-social-grids">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-rss"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 blog-gd-w3ls  last mt-md-0 mt-sm-5 mt-4">
                    <img src="{{ asset('templates/edulearn/images/team3.jpg') }}" alt=" " class="img-fluid">
                    <div class="date-w3">
                        <h4>Phong Khoa</h4>
                        <p class="para-w3-agile">Giáo Viên</p>
                        <div class="agileinfo-social-grids">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-rss"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 blog-gd-w3ls last mt-md-0 mt-sm-5 mt-4">
                    <img src="{{ asset('templates/edulearn/images/team4.jpg') }}" alt=" " class="img-fluid">
                    <div class="date-w3">
                        <h4>Duy Khôi</h4>
                        <p class="para-w3-agile">Giáo Viên</p>
                        <div class="agileinfo-social-grids">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-rss"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //team -->

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
