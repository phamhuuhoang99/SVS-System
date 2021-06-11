@extends('templates.skill.master')
@section('title', 'Skill')
@section('content')
    <!-- breadcrum -->
    <section class="w3l-skill-breadcrum">
        <div class="breadcrum">
            <div class="container">
                <p><a href="{{route('temp.skill.index') }}">Trang chủ</a> &nbsp; / &nbsp; Dịch vụ</p>
            </div>
        </div>
    </section>
    <!-- //breadcrum -->
    <!--  servcies section -->
    <div class="w3l-services1 pt-5" id="services">
        <div class="container pt-lg-3">
            <div class="aboutgrids row">
                <div class="col-lg-6 aboutgrid2">
                    <img src="{{ asset('templates/skill/images/g1.jpg') }}" alt="about image" class="img-fluid" />
                </div>
                <div class="col-lg-6 aboutgrid1 my-lg-0 my-5">
                    <h4>Học tập chủ động, tự giác </h4>
                    <p>Phát huy năng lực tự học của học viên, lấy học viên làm trung tâm giảng dạy.</p>
                    <ul class="services-list mt-4">
                        <li>Khóa Học Online</li>
                        <li>Chất lượng giáo viên tốt</li>
                        <li>Có Thư viên & Cửa Hàng Sách</li>
                        <li>Đăng Ký Học Bổng</li>
                    </ul>

                    <a href="{{route('temp.skill.contact') }}" class="btn btn-outline-secondary theme-button">Xem thêm</a>
                </div>
            </div>
        </div>

        <div class="aboutbottom py-5">
            <div class="container py-lg-3">
                <div class="bottomgrids row no-gutters">
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 mt-0">
                        <span class="fa fa-phone"></span>
                        <h4><a class="service-title" href="#url">Hổ trợ miễn Phí</a></h4>
                        <p class="service-text">Đội ngũ support đông đảo, sẳn sàn hổ trợ bạn 24/24 </p>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-md-0 mt-5">
                        <span class="fa fa-users"></span>
                        <h4><a class="service-title" href="#url">Giáo viên giỏi</a></h4>
                        <p class="service-text">Giáo viên là các chuyên gia đầu ngành.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-lg-0 mt-5">
                        <span class="fa fa-book"></span>
                        <h4><a class="service-title" href="#url">Thư viện</a></h4>
                        <p class="service-text">Thư viện lớn, thoáng mát, cung cấp đầy đủ các đầu sách.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-5">
                        <span class="fa fa-smile-o"></span>
                        <h4><a class="service-title" href="#url">Ưu đãi tốt</a></h4>
                        <p class="service-text">Đưa ra ưu nhiều ưu đãi cho sinh viên.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-5">
                        <span class="fa fa-laptop"></span>
                        <h4><a class="service-title" href="#url">Học Online</a></h4>
                        <p class="service-text">Khóa học Online chất lượng.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 bottomgrid1 mt-5">
                        <span class="fa fa-phone"></span>
                        <h4><a class="service-title" href="#url">Hổ trợ miễn phí</a></h4>
                        <p class="service-text">Đội ngũ support đông đảo, sẳn sàn hổ trợ bạn 24/24.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!--  //servcies section -->
    <section class="w3l-services2">
        <div class="feature-16-main py-5">
            <div class="container py-lg-3">
                <div class="header-section text-center">
                    <h3>Khóa học nổi bật</h3>
                    <p class="mt-3 mb-5">Là chương trình học được thiết kế cho học viên mong muốn cập nhật nhưng xu hướng công nghệ mới nhất.</p>
                </div>
                <div class="features-grids">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd">
                                <div class="icon">
                                    <span class="fa fa-laptop" aria-hidden="true"></span>
                                </div>
                                <div class="feature-16-gd-info">
                                    <h4 class="mt-4 mb-2"><a href="#url">Data Sciences</a></h4>
                                    <p>Chương trình Data Science bao gồm đầy đủ các môn học giúp trang bị các kiến thức cơ bản về data modelling/analysis techniques...</p>
                                    <a href="#url" class="btn btn-outline-primary theme-button mt-4">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd">
                                <div class="icon">
                                    <span class="fa fa-smile-o" aria-hidden="true"></span>
                                </div>
                                <div class="feature-16-gd-info">
                                    <h4 class="mt-4 mb-2"><a href="#url">Automotive</a></h4>
                                    <p>Chương trình là sự hợp tác với FPT Software (cụ thể là FPT Global Automotive – FGA),  dành cho những bạn có mong muốn đặt...</p>
                                    <a href="#url" class="btn btn-outline-primary theme-button mt-4">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd">
                                <div class="icon">
                                    <span class="fa fa-book" aria-hidden="true"></span>
                                </div>
                                <div class="feature-16-gd-info">
                                    <h4 class="mt-4 mb-2"><a href="#url">Machine Learning</a></h4>
                                    <p>Khóa học nhằm mục đích giúp sinh viên hoàn thành các “nano degrees” chuyên sâu về Machine Learning để trang bị các kiến thức...</p>
                                    <a href="#url" class="btn btn-outline-primary theme-button mt-4">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd">
                                <div class="icon">
                                    <span class="fa fa-user" aria-hidden="true"></span>
                                </div>
                                <div class="feature-16-gd-info">
                                    <h4 class="mt-4 mb-2"><a href="#url">Blockchain Developer</a></h4>
                                    <p>Blockchain Developer là khóa học kết hợp với các chuyên gia, kỹ sư lập trình tại các công ty Blockchain hàng đầu Việt Nam xây dựng.</p>
                                    <a href="#url" class="btn btn-outline-primary theme-button mt-4">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd">
                                <div class="icon">
                                    <span class="fa fa-laptop" aria-hidden="true"></span>
                                </div>
                                <div class="feature-16-gd-info">
                                    <h4 class="mt-4 mb-2"><a href="#url">IoT Programming</a></h4>
                                    <p>Đứng trước nhu cầu nhân sự mạnh mẽ của thị trường chúng tôi đã hợp tác cùng Lumi Việt Nam xây dựng khóa học IoT Programming...</p>
                                    <a href="#url" class="btn btn-outline-primary theme-button mt-4">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 featured-service">
                            <div class="feature-16-gd">
                                <div class="icon">
                                    <span class="fa fa-smile-o" aria-hidden="true"></span>
                                </div>
                                <div class="feature-16-gd-info">
                                    <h4 class="mt-4 mb-2"><a href="#url">Data Sciences</a></h4>
                                    <p>Chương trình Data Science bao gồm đầy đủ các môn học giúp trang bị các kiến thức cơ bản về data modelling/analysis techniques...</p>
                                    <a href="#url" class="btn btn-outline-primary theme-button mt-4">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
@endsection
