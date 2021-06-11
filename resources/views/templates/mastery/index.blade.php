@extends('templates.mastery.master')
@section('title','Mastery')
@section('content')
<section class="w3l-main-slider" id="home">
    <!-- main-slider -->
    <div class="companies20-content">

        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg mx-auto text-center">
                                    <h5>Nâng Cao Chất Lượng Giáo Dục</h5>
                                    <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="{{ route('temp.mastery.services') }}">Xem Thêm</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg mx-auto text-center">
                                    <h5>Khám Phá Cuộc Sống Sinh Viên Tốt Nghiệp</h5>
                                    <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="{{ route('temp.mastery.services') }}">Xêm Thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg mx-auto text-center">
                                    <h5>Phát Triển Toàn Diện, Học Giỏi Bức Phá  </h5>
                                    <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="{{ route('temp.mastery.services') }}">Xêm Thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg mx-auto text-center">
                                    <h5>Khám Phá Công Việc Của Sinh Viên Tốt Nghiệp</h5>
                                    <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="{{ route('temp.mastery.services') }}">Xêm Thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>

</section>
<section class="w3l-feature-3" id="features">
    <div class="grid top-bottom mb-lg-5 pb-lg-5">
        <div class="container">

            <div class="middle-section grid-column text-center">
                <div class="three-grids-columns">
                    <span class="fa fa-laptop"></span>
                    <h4>Khóa Học Online</h4>
                    <p>Thời gian học linh hoạt. Khi có khúc mắc cần giải đáp, học viên được kết nối ngay lập tức với chuyên gia </p>
                    <a href="{{ route('temp.mastery.services') }}" class="btn btn-secondary btn-theme3 mt-4">Xêm Thêm </a>
                </div>
                <div class="three-grids-columns">
                    <span class="fa fa-users"></span>
                    <h4>Giáo Viên Chất Lượng Cao</h4>
                    <p>Các Giảng viên là các chuyên gia trong đầu ngành đào tạo trong các ngành học</p>
                    <a href="{{ route('temp.mastery.services') }}" class="btn btn-secondary btn-theme3 mt-4">Xêm Thêm </a>
                </div>
                <div class="three-grids-columns">
                    <span class="fa fa-book"></span>
                    <h4>Thư Viện & Cửa Hàng Sách</h4>
                    <p>Thư viện mở 24/7 phục vụ nhu cầu đọc sách,mượn sách của bạn đọc trong toàn trường</p>
                    <a href="{{ route('temp.mastery.services') }}" class="btn btn-secondary btn-theme3 mt-4">Xêm Thêm </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features-4 block -->
<section class="w3l-index1" id="about">
    <div class="calltoaction-20  py-5 editContent">
        <div class="container py-md-3">

            <div class="calltoaction-20-content row">
                <div class="column center-align-self col-lg-6 pr-lg-5">
                    <h5 class="editContent">Chào Mừng Bạn Đến Cơ Sở Của Chúng Tôi</h5>
                    <p class="more-gap editContent">Đào tạo Đại học phù hợp với mục tiêu học: Học để lấy Bằng, Học để đi làm, Học để biết, Học kỹ năng, Học nâng cao trình độ</p>
                    <p class="more-gap editContent">Thời gian học linh hoạt. Khi có khúc mắc cần giải đáp, học viên được kết nối ngay lập tức với chuyên gia </p>
                    <a class="btn btn-secondary btn-theme2 mt-3" href="{{ route('temp.mastery.about') }}"> Xêm Thêm</a>
                </div>
                <div class="column ccont-left col-lg-6">
                    <img src="{{ asset('templates/mastery/images/g1.jpg') }}" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features-4 block -->
<section class="services-12" id="course">
    <div class="form-12-content">
        <div class="container">
            <div class="grid grid-column-2 ">

                <div class="column1">
                    <div class="heading">
                        <h3 class="head text-white">Đăng ký Học bổng</h3>
                        <h4>Các học bổng đầu năm 2020 đã mở</h4>
                        <p class="my-3 text-white">Đăng ký sớm nhất để nhận được những ưu đãi Hot.</p>
                    </div>
                </div>
                <div class="column2">
                    <a class="btn btn-secondary btn-theme2 mt-3" href="{{ route('temp.mastery.contact') }}"> Đăng Kí Ngay</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  form-12 -->
<section class="w3l-form-12">
    <div class="form-12-content py-5" id="services">
        <div class="container py-md-3">
            <div class="grid grid-column-2 py-md-5">

                <div class="column1">
                    <h4 class="tagline">Tìm kiếm khóa học</h4>
                    <p>Điền vào mẫu bên dưới để tìm khóa học</p>
                    <form action="#">
                        <div class="">
                            <input type="text" name="name" class="form-input" placeholder="Tên khóa học">
                        </div>
                        <div class="">
                            <select id="sel1">
                                <option>Danh mục</option>
                                <option>Máy tính</option>
                                <option>Khoa học</option>
                                <option>Lịch sử</option>
                                <option>Kinh tế</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-secondary btn-theme2">Tìm kiếm</button>
                    </form>
                </div>
                <div class="column2">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-6">
                            <a href="{{ route('temp.mastery.services') }}">
                                <div class="courses-item">
                                    <span class="fa fa-male"></span>
                                    <p>Xã hội</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                            <a href="{{ route('temp.mastery.services') }}">
                                <div class="courses-item">
                                    <span class="fa fa-suitcase"></span>
                                    <p>Kinh doanh</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-4">
                            <a href="{{ route('temp.mastery.services') }}">
                                <div class="courses-item">
                                    <span class="fa fa-code"></span>
                                    <p>Web Dev</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-4">
                            <a href="{{ route('temp.mastery.services') }}">
                                <div class="courses-item">
                                    <span class="fa fa-flask"></span>
                                    <p>Khoa học</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mt-4">
                            <a href="{{ route('temp.mastery.services') }}">
                                <div class="courses-item mt-2">
                                    <span class="fa fa-money"></span>
                                    <p>Kinh tế</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mt-4">
                            <a href="{{ route('temp.mastery.services') }}">
                                <div class="courses-item mt-2">
                                    <span class="fa fa-gg"></span>
                                    <p>Sinh học</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mt-4">
                            <a href="{{ route('temp.mastery.services') }}">
                                <div class="courses-item mt-2">
                                    <span class="fa fa-desktop"></span>
                                    <p>Tin học</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mt-4">
                            <a href="{{ route('temp.mastery.services') }}">
                                <div class="courses-item mt-2">
                                    <span class="fa fa-mouse-pointer"></span>
                                    <p>Web Design</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // form-12 -->

<!-- specifications -->
<section class="w3l-index2">
    <div class="main-w3 py-5" id="stats">
        <div class="container py-lg-3">
            <div class="row main-cont-wthree-fea">
                <div class="col-lg-3 col-sm-6">
                    <div class="grids-speci1">
                        <h3 class="title-spe">60</h3>
                        <p>MENTOR <br>HÀNG ĐẦU</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                    <div class="grids-speci1">
                        <h3 class="title-spe">18</h3>
                        <p>KHÓA HỌC MỚI<br>MỖI NĂM</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6  mt-lg-0 mt-4">
                    <div class="grids-speci1">
                        <h3 class="title-spe">34</h3>
                        <p>BÀI THI TRỰC TUYẾN <br>MỖI THÁNG</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                    <div class="grids-speci1">
                        <h3 class="title-spe">20</h3>
                        <p>HỌC VIÊN <br>ĐÃ ĐĂNG KÝ</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- //specifications -->
</section>
<!-- customers4 block -->
<section class="w3l-customers-4" id="testimonials">
    <div id="customers4-block" class="py-5">
        <div class="container py-md-3">

            <div class="section-title align-center row">
                <div class="item-top col-md-6 pr-md-5">
                    <div class="heading">
                        <h3 class="head text-white">Lắng nghe và chia sẻ</h3>
                        <p class="my-3 head text-white">Cách học luôn khuyến khích sinh viên tự mày mò và tìm kiếm kiến thức. Đội ngũ mentors giống như ngọn hải đăng giúp các bạn có định hướng sáng suốt trong việc học.</p>
                        <p class="my-3 head text-white"> được tiếp xúc với những dự án thực tế của các doanh nghiệp thông qua bài tập thực hành nên lúc đi làm cũng không quá bỡ ngỡ.</p>
                    </div>
                </div>
                <div class="item-top col-md-6 mt-md-0 mt-4">
                    <div class="item text-center">
                        <div class="imgTitle">
                            <img src="{{ asset('templates/mastery/images/c3.jpg') }}" class="img-responsive" alt="" />
                        </div>
                        <h6 class="mt-3">Nguyễn Khánh Hạ</h6>
                        <p class="">Sinh viên</p>
                        <p>Tôi lựa chọn chương trình học với mục tiêu lấy bằng đại học NGAY khi tốt nghiệp THPT. Tôi tận dụng triệt để hệ thống mentor và sự hỗ trợ của các Hannah để có chiến thuật, kinh nghiệm để học hiệu quả và nhanh hơn.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="w3l-price-2" id="news">
    <div class="price-main py-5">
        <div class="container py-md-3">
            <div class="pricing-style-w3ls row py-md-5">
                <div class="pricing-chart col-lg-6">
                    <h3 class="">Bài Viết Mới Nhất</h3>
                    <div class="tatest-top mt-md-5 mt-4">
                        <div class="price-box btn-layout bt6">
                            <div class="grid grid-column-2">
                                <div class="column-6">
                                    <img src="{{ asset('templates/mastery/images/g9.jpg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="column1">

                                    <div class="job-info">
                                        <h6 class="pricehead"><a href="#">Khóa học hè </a></h6>
                                        <h5>25/08/2020</h5>
                                        <p>Trường mở thêm khóa học hè cho sinh viên có nhu cầu cải thiện điểm..</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="price-box btn-layout bt6 top-middle-1">
                            <div class="grid grid-column-2">
                                <div class="column-6">
                                    <img src="{{ asset('templates/mastery/images/g10.jpg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="column1">
                                    <div class="job-info">
                                        <h6 class="pricehead"><a href="#">
                                               Trí tuệ nhân tạo</a></h6>
                                        <h5>25/05/2020</h5>
                                        <p>Là một ngày học mới thu hút được rất nhiều sinh viên tham gia..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="price-box btn-layout bt6">
                            <div class="grid grid-column-2">
                                <div class="column-6">
                                    <img src="{{ asset('templates/mastery/images/g8.jpg') }}" alt="" class="img-fluid">
                                </div>
                                <div class="column1">

                                    <div class="job-info">
                                        <h6 class="pricehead">
                                            <a href="#">Lịch thi mới</a>
                                            </h6>
                                        <h5>25/08/2020</h5>
                                        <p>Cập nhật lich thì cho các lớp CNTT..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right mt-4">
                        <a class="btn btn-secondary btn-theme2" href="#"> Xem Tất Cả</a>
                    </div>
                </div>
                <div class="w3l-faq-page col-lg-6 pl-3 pl-lg-5 mt-lg-0 mt-5">
                    <h3 class="">Sự Kiện Sắp Tới </h3>
                    <div class="events-top mt-md-5 mt-4">
                        <div class="events-top-left">
                            <div class="icon-top">
                                <h3>20</h3>
                                <p>Tháng 11</p>
                                <span>2020</span>
                            </div>
                        </div>
                        <div class="events-top-right">
                            <h6 class="pricehead">
                                <a href="#">Thông Báo Nhập Học Online Tại Hà Nội</a>
                            </h6>
                            <p class="mb-2 mt-3">Chúc mừng các bạn sinh viên đã chính thức trở thành tân sinh viên của Trường. Do diễn biến tình hình dịch Covid 19 phức tạp, nên việc khai giảng tập trung của chương trình trực tuyến tại Hà Nội không diễn ra.</p>
                            <li>07:00 - 10:00 </li>
                            <li class="melb">Quận 2, TPHCM</li>
                        </div>
                    </div>
                    <div class="events-top mt-4">
                        <div class="events-top-left">
                            <div class="icon-top">
                                <h3>25</h3>
                                <p>Tháng 11</p>
                                <span>2020</span>
                            </div>
                        </div>
                        <div class="events-top-right">
                            <h6 class="pricehead"><a href="#">
                                Lễ khai giảng tại Hà Nội</a></h6>
                            <p class="mb-2 mt-3">Trường Đại học đã trang trọng tổ chức Lễ khai giảng Chương trình đào tạo Cử nhân  đại học trực tuyến TNU – E.Learning năm 2020 cho gần 100 tân sinh viên.</p>
                            <li>07:00 - 10:00 </li>
                            <li class="melb">Cầu Giấy, Hà Nội</li>
                        </div>
                    </div>
                    <div class="text-right mt-4">
                        <a class="btn btn-secondary btn-theme2" href="#"> Xem Tất Cả</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
