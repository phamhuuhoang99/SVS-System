@extends('templates.skill.master')
@section('title','Skill')
@section('content')

<!-- breadcrum -->
<section class="w3l-skill-breadcrum">
    <div class="breadcrum">
        <div class="container">
            <p><a href="{{route('temp.skill.index') }}">Trang chủ</a> &nbsp; / &nbsp; Về chúng tôi</p>
        </div>
    </div>
</section>
<!-- //breadcrum -->
<section class="w3l-about1" id="about">
    <div id="cwp23-block" class="py-5">
        <div class="container py-lg-5">
            <div class="row cwp23-content align-items-center">
                <div class="col-lg-6 cwp23-text">
                    <div class="cwp23-title">
                        <h3>Chào mừng bạn đến với Trang Web của Chúng tôi   </h3>
                    </div>
                    <div class="cwp23-text-cols">
                        <div class="column">
                            <span class="fa fa-smile-o" aria-hidden="true"></span>
                            <a href="{{route('temp.skill.services') }}">Hội thảo</a>
                            <p>Tham gia hội thảo chuyên sâu các chuyên đề </p>
                        </div>
                        <div class="column">
                            <span class="fa fa-graduation-cap" aria-hidden="true"></span>
                            <a href="{{route('temp.skill.services') }}">Khóa học nổi bật</a>
                            <p>Giới thiệu bạn các khóa học nổi bật</p>
                        </div>
                        <div class="column">
                            <span class="fa fa-history" aria-hidden="true"></span>
                            <a href="{{route('temp.skill.services') }}">Thư viện lớn</a>
                            <p>Hệ thống thư viện lớn phục vụ bạn 24/7</p>
                        </div>
                        <div class="column">
                            <span class="fa fa-users" aria-hidden="true"></span>
                            <a href="{{route('temp.skill.services') }}">Giáo viên giỏi</a>
                            <p>Giáo viên là các chuyên gia của đầu ngành giảng dạy</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 cwp23-img">
                    <img src="{{ asset('templates/skill/images/g6.jpg') }}" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- stats -->
<section class="w3l-stats py-lg-5 py-4" id="stats">
    <div class="gallery-inner container py-md-5 py-4">
        <div class="row stats-con text-white">
            <div class="col-md-3 col-6 stats_info counter_grid">
                <span class="fa fa-smile-o"></span>
                <p class="counter">196</p>
                <h4>Hài Lòng Về Khóa Học</h4>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid1">
                <span class="fa fa-graduation-cap"></span>
                <p class="counter">96</p>
                <h4>Chứng Chỉ Giáo Viên</h4>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid mt-md-0 mt-5">
                <span class="fa fa-history"></span>
                <p class="counter">25</p>
                <h4>Năm Kinh Nghiệm</h4>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid2 mt-md-0 mt-5">
                <span class="fa fa-users"></span>
                <p class="counter">890</p>
                <h4>Học Sinh Đăng Ký</h4>
            </div>
        </div>
    </div>
</section>
<!-- //stats -->
<section class="w3l-courses">
    <div class="blog py-5" id="courses">
        <div class="container py-lg-5">
            <div class="header-section text-center">
                <h3 class="mb-2">Nhiều khóa học khác nhau để lựa chọn</h3>
            </div>

            <div class="row mt-md-5 mt-4">
                <div class="col-md-12 mx-auto">
                    <div class="owl-two owl-carousel owl-theme">
                        <div class="item">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="#url" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="{{ asset('templates/skill/images/g1.jpg') }}" alt="Card image cap">
                                    </a>
                                    <div class="author">
                                        <div class="author-image">
                                            <img src="{{ asset('templates/skill/images/student2.jpg') }}" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                                        </div>
                                        <div class="course-title">
                                            <a href="#url">Học Marchine Learning</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body course-details">
                                    <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                        <p>800.000 VNĐ</p>
                                        <a href="#url" class="reviews d-inline-block">(56 Đánh giá)</a>
                                    </div>
                                    <a href="#url" class="course-desc">Sinh viên được trang bị kiến thức của một lĩnh vực cụ thể</a>
                                </div>
                                <div class="card-footer course-price-view">
                                    <ul class="blog-list">
                                        <li>
                                            <a href="#url"><span class="fa fa-heart"></span> 98</a>
                                        </li>
                                        <li>
                                            <a href="#url"><span class="fa fa-user"></span> 15</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="#url" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="{{ asset('templates/skill/images/g2.jpg') }}" alt="Card image cap">
                                    </a>
                                    <div class="author">
                                        <div class="author-image">
                                            <img src="{{ asset('templates/skill/images/student3.jpg') }}" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                                        </div>
                                        <div class="course-title">
                                            <a href="#url">Học Data Science</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body course-details">
                                    <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                        <p>800.000 VNĐ</p>
                                        <a href="#url" class="reviews d-inline-block">(56 Đánh giá)</a>
                                    </div>
                                    <a href="#url" class="course-desc">Sinh viên được trang bị kiến thức của một lĩnh vực cụ thể</a>
                                </div>
                                <div class="card-footer course-price-view">
                                    <ul class="blog-list">
                                        <li>
                                            <a href="#url"><span class="fa fa-heart"></span> 98</a>
                                        </li>
                                        <li>
                                            <a href="#url"><span class="fa fa-user"></span> 15</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="#url" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="{{ asset('templates/skill/images/g3.jpg') }}" alt="Card image cap">
                                    </a>
                                    <div class="author">
                                        <div class="author-image">
                                            <img src="{{ asset('templates/skill/images/student4.jpg') }}" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                                        </div>
                                        <div class="course-title">
                                            <a href="#url">Software engineer</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body course-details">
                                    <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                        <p>800.000 VNĐ</p>
                                        <a href="#url" class="reviews d-inline-block">(56 Đánh giá)</a>
                                    </div>
                                    <a href="#url" class="course-desc">Sinh viên được trang bị kiến thức của một lĩnh vực cụ thể</a>
                                </div>
                                <div class="card-footer course-price-view">
                                    <ul class="blog-list">
                                        <li>
                                            <a href="#url"><span class="fa fa-heart"></span> 98</a>
                                        </li>
                                        <li>
                                            <a href="#url"><span class="fa fa-user"></span> 15</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card">
                                <div class="card-header p-0 position-relative">
                                    <a href="#url" class="zoom d-block">
                                        <img class="card-img-bottom d-block" src="{{ asset('templates/skill/images/g5.jpg') }}" alt="Card image cap">
                                    </a>
                                    <div class="author">
                                        <div class="author-image">
                                            <img src="{{ asset('templates/skill/images/student1.jpg') }}" class="img-fluid rounded-circle" title="Adam Ster" alt="author image">
                                        </div>
                                        <div class="course-title">
                                            <a href="#url">Hệ điều hành</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body course-details">
                                    <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                        <p>800.000 VNĐ</p>
                                        <a href="#url" class="reviews d-inline-block">(56 Đánh giá)</a>
                                    </div>
                                    <a href="#url" class="course-desc">Sinh viên được trang bị kiến thức của một lĩnh vực cụ thể</a>
                                </div>
                                <div class="card-footer course-price-view">
                                    <ul class="blog-list">
                                        <li>
                                            <a href="#url"><span class="fa fa-heart"></span> 98</a>
                                        </li>
                                        <li>
                                            <a href="#url"><span class="fa fa-user"></span> 15</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--  Intro section -->
<section class="w3l-intro" id="intro">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section text-center">
                <div class="section-width mb-5">
                    <h2 class="mb-5">Chúng Tôi Cam Kết Luôn Hổ Trợ Bạn Tốt Nhất Có Thể.</h2>
                    <a href="{{route('temp.skill.contact') }}" class="btn btn-light theme-button py-2 px-5">Liên hệ với chúng tôi</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  //Intro section -->
<!-- team -->
<section class="w3l-team" id="team">
    <div class="team-block py-5">
        <div class="container py-lg-5">
            <div class="wthree-title">
                <div class="header-section text-center">
                    <h3 class="mb-2">Đội Ngũ Giáo Viên</h3>
                    <p>Đội ngũ đầu tâm huyết, cam kết đem lại những gì tốt nhất cho bạn.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mt-5">
                    <div class="box16">
                        <a href="#url"><img src="{{ asset('templates/skill/images/student1.jpg') }}" alt="" class="img-fluid" /></a>
                        <div class="box-content">
                            <h3 class="title"><a href="#url">Hữu Hoàng</a></h3>
                            <span class="post">Giám Đốc</span>
                            <ul class="social">
                                <li>
                                    <a href="#" class="facebook">
                                        <span class="fa fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-5">
                    <div class="box16">
                        <a href="#url"><img src="{{ asset('templates/skill/images/student2.jpg') }}" alt="" class="img-fluid" /></a>
                        <div class="box-content">
                            <h3 class="title"><a href="#url">Phong Khoa</a></h3>
                            <span class="post">Quản lý</span>
                            <ul class="social">
                                <li>
                                    <a href="#" class="facebook">
                                        <span class="fa fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-5">
                    <div class="box16">
                        <a href="#url"><img src="{{ asset('templates/skill/images/student3.jpg') }}" alt="" class="img-fluid" /></a>
                        <div class="box-content">
                            <h3 class="title"><a href="#url">Thanh Thúy</a></h3>
                            <span class="post">Designer</a></span>
                            <ul class="social">
                                <li>
                                    <a href="#" class="facebook">
                                        <span class="fa fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //team -->
<section class="w3l-quote py-5">
    <div class="container py-lg-3">
        <h3>Bạn có muốn Tham gia?</h3>
        <p></p>
        <a href="{{route('temp.skill.contact') }}" class="btn btn-secondary theme-button">Trở thành giáo viên</a>
        <a href="#signup.html" class="btn btn-outline-secondary theme-button ml-2">Đăng nhập</a>
    </div>
</section>

@endsection