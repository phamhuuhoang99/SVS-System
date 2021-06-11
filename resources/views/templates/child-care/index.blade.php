<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Child Care a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- default-css-files -->
    <link href="{{ asset('templates/child-care/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('templates/child-care/css/simpleLightbox.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('templates/child-care/css/style.css') }}" rel='stylesheet' type='text/css' />
    <!-- style.css-file -->
    <!-- //style.css-file -->
    <link href="{{ asset('templates/child-care/css/font-awesome.css') }}" rel="stylesheet" type="text/css" media="all">
    <!-- default-css-files -->
    <!-- Online fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <!-- //Online fonts -->

</head>
<!-- Head -->

<body>
    <!--header-section-starts-here-->
    <header>
        <div class="top-header" id="home">
            <div class="container">
                <div class="col-md-8 col-sm-8 col-xs-8 top-left">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Quận Gò Vấp, Hồ Chí Minh</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 top-right">
                    <a href="#contact" class="scroll"><span></span>ĐẶT LỊCH HẸN</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>
    <!--//header-section-end-here-->

    <!--banner-section-starts-here-->
    <section class="banner jarallax" id="home">
        <div class="navigation">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="logo">
                        <h1><a class="navber-brand" href="index.html"><i class="fa fa-wheelchair"
                                    aria-hidden="true"></i> Child care</a></h1>
                    </div>
                    <div class="collapse navbar-collapse navbar-right navigation-right"
                        id="bs-example-navbar-collapse-1">
                        <nav class="link-effect-3 w3ls-navma" id="link-effect-3">
                            <ul class="nav1 navbar-nav nav nav-wil">
                                <li class="active"><a href="{{route('temp.child-care.index')}}">Trang chủ</a></li>
                                <li><a  href="#about" class="scroll">Về chúng tôi</a></li>
                                <li><a  href="#services" class="scroll">Dịch vụ</a></li>
                                <li><a  href="#team" class="scroll">Team</a></li>
                                <li><a href="#gallery" class="scroll">Bộ sưu tập</a></li>
                                <li><a  href="#contact" class="scroll">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                </nav>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="w3ls_banner_info">
            <div class="container">
                <div class="w3l-banner-grids">
                    <div class="slider">
                        <div class="callbacks_container">
                            <ul class="rslides" id="slider4">
                                <li>
                                    <div class="w3ls-text">
                                        <h3>Chăm sóc sức khỏe</h3>
                                        <p>Càng hiểu biết về sự phát triển của bé, bạn sẽ càng cảm thấy tự tin hơn trong
                                            việc chăm sóc và đáp ứng những nhu cầu của trẻ</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="w3ls-text">
                                        <h3>Giấc ngủ của bé</h3>
                                        <p>Giấc ngủ cũng đóng vai trò rất quan trọng trong sự phát triển của bé. Bé sơ
                                            sinh ngủ gần 16 giờ một ngày.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="w3ls-text">
                                        <h3>Thực phẩm và thức ăn</h3>
                                        <p>Chế độ dinh dưỡng là yếu tố có vai trò quan trọng nhất trong sự phát triển
                                            của bé.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="w3ls-text">
                                        <h3> Hổ trợ 24/7 </h3>
                                        <p>Đội ngũ tư vấn nhiệt tình, năng động hổ trợ khách hàng.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="w3-ban-pos">
            <img src="{{ asset('templates/child-care/images/pos11.png') }}" alt="images">
        </div>
        <div class="w3-ban-pos12">
            <img src="{{ asset('templates/child-care/images/pos1.png') }}" alt="images">
        </div>
    </section>
    <!-- Default-JavaScript-File -->
    <!--/about -->
    <div class="about" id="about">
        <div class="container">
            <!---728x90--->
            <div class="wthree-about">

                <div class="col-md-6 ab-w3l-text">
                    <h2>Về chúng tôi</h2>
                    <p>Giây phút đầu tiên được chạm vào làn da non nớt của con là khoảnh khắc diệu kỳ nhất mà không một
                        ngôn từ nào có thể diễn tả được. Chính vì vậy, Chúng tôi đã không ngừng nỗ lực để đem đến cho
                        làn
                        da sơ sinh sự chăm sóc tốt nhất ngay từ 01 ngày tuổi, và sẽ đồng hành cùng mẹ trong suốt hành
                        trình đáng nhớ này.</p>
                </div>
                <div class="col-md-6 about-w3l-agileifo-grid">
                    <img src="{{ asset('templates/child-care/images/about1.jpg') }}" alt=" " class="img-responsive">
                    <div class="img-ab"> <img src="{{ asset('templates/child-care/images/about2.jpg') }}" alt=" "
                            class="img-responsive"></div>
                </div>
                <div class="clearfix"> </div>

            </div>
        </div>
        <!---728x90--->
    </div>
    <div class="about-main-w3-agile">
        <div class="col-md-6 about-left-agileits-w3layouts">
            <i class="fa fa-balance-scale" aria-hidden="true"></i>
            <p class="bold">Trang thiết bị hiện đại</p>
            <p class="para-w3layouts">Trang thiết bị hiện đại, thường xuyên kiểm tra để đảm bảo chất lượng.</p>
            <a href="#myModal" class="find-about" data-toggle="modal">Tìm hiểu thêm</a>
        </div>
        <div class="col-md-6 about-right-agileinfo">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <p class="bold2">Bác sĩ giỏi</p>
            <p class="para-w3layouts">Bác sĩ được tuyển chọn, có nhiều năm kinh nghiệm trong nghề. </p>
            <a href="#myModal" class="find-about" data-toggle="modal">Tìm hiểu thêm</a>
        </div>
        <div class="clearfix"></div>

        <div class="col-md-6 about-right-agileinfo about-right-agileinfo1 ">
            <i class="fa fa-spinner" aria-hidden="true"></i>
            <p class="bold2">Điều trị đặc biệt</p>
            <p class="para-w3layouts">Phương pháp trị liệu mới, mang đến sự hài lòng cao nhất.</p>
            <a href="#myModal" class="find-about find-about1" data-toggle="modal">Tìm hiểu thêm</a>
        </div>
        <div class="col-md-6 about-left-agileits-w3layouts about-left-agileits-w3layouts1">
            <i class="fa fa-handshake-o" aria-hidden="true"></i>
            <p class="bold">Chăm sóc tận tâm</p>
            <p class="para-w3layouts">Đội ngũ nhân viên tâm huyết, nhiệt tình, chăm sóc yêu thương trẻ con.</p>
            <a href="#myModal" class="find-about" data-toggle="modal">Tìm hiểu thêm</a>
        </div>
        <div class="clearfix"></div>
    </div>

    <!--//about -->

    <!-- services -->
    <div class="services" id="services">
        <div class="container">
            <div class="w3-heading-all w3-head2-all">
                <h3>Dịch Vụ</h3>
            </div>
            <div class="services-w3lsrow">
                <div class="col-md-4 services-grids">
                    <i class="fa fa-gears icon" aria-hidden="true"></i>
                    <h4>Tắm bé tại nhà</h4>
                    <p>Để bé khỏe mạnh, thông minh, phát triển toàn diện</p>
                </div>
                <div class="col-md-4 services-grids">
                    <div class="w3agile-servs-img">
                        <i class="fa fa-group icon" aria-hidden="true"></i>
                        <h4>Chăm sóc bà bầu</h4>
                        <p>Spa cho mẹ - tốt cả cho bé</p>
                    </div>
                </div>
                <div class="col-md-4 services-grids">
                    <div class="w3agile-servs-img">
                        <i class="fa fa-list-alt icon" aria-hidden="true"></i>
                        <h4>Chăm sóc sau sinh</h4>
                        <p>Mẹ khỏe - con ngoan - cả nhà vui</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //services -->

    <!-- pricing -->
    <div class="pricing-agile" id="pricing-agile">
        <div class="container">
            <div class="w3-heading-all w3-services-head">
                <h3>Bảng giá</h3>
            </div>

            <div class="pricing-agile-grids">
                <div class="col-xs-4 grid-info">
                    <h3>GÓI GIA ĐÌNH</h3>
                    <h4>500.000 VNĐ
                        <sup>*</sup>
                    </h4>
                    <div class="pricing-agile-text">
                        <p>Kiểm tra định kỳ</p>
                        <p>Kiểm tra tinh dịch</p>
                        <p>Kiểm tra nang trứng</p>
                        <p>Chăm sóc da</p>
                    </div>
                    <a href="#regi" class="scroll">Đăng ký</a>
                </div>
                <div class="col-xs-4 grid-info grid-two">
                    <h3>GÓI CAO CẤP</h3>
                    <h4>800.000 VNĐ
                        <sup>*</sup>
                    </h4>
                    <div class="pricing-agile-text">
                        <p>Kiểm tra định kỳ</p>
                        <p>Kiểm tra tinh dịch</p>
                        <p>Kiểm tra nang trứng</p>
                        <p>Chăm sóc da</p>
                    </div>
                    <a href="#regi" class="scroll">Đăng ký</a>
                </div>
                <div class="col-xs-4 grid-info grid-three">
                    <h3>GÓI HẠNG SANG</h3>
                    <h4>1.000.000 VNĐ
                        <sup>*</sup>
                    </h4>
                    <div class="pricing-agile-text">
                        <p>Kiểm tra định kỳ</p>
                        <p>Kiểm tra tinh dịch</p>
                        <p>Kiểm tra hocmon</p>
                        <p>Chăm sóc da</p>
                    </div>
                    <a href="#regi" class="scroll">Đăng ký</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //pricing table -->
    <!-- team -->
    <!---728x90--->
    <div class="team" id="team">
        <div class="container">
            <div class="w3-heading-all">
                <h3>Đội ngũ</h3>
            </div>
            <div class="teamgrids">
                <div class="col-md-3 teamgrid1">
                    <img src="{{ asset('templates/child-care/images/t1.jpg') }}" alt="" />
                    <div class="teaminfo">
                        <h3>marry</h3>
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Bác sỹ</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> +02 133 4567</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">
                                mail@example.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 teamgrid1">
                    <img src="{{ asset('templates/child-care/images/t2.jpg') }}" alt="" />
                    <div class="teaminfo">
                        <h3> Robert</h3>
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Bác sỹ</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i>035 618 5047</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">
                                mail@example1.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 teamgrid1">
                    <img src="{{ asset('templates/child-care/images/t3.jpg') }}" alt="" />
                    <div class="teaminfo">
                        <h3>Mitchel</h3>
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Y tá</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> 035 618 5047</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">
                                mail@example2.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 teamgrid1">
                    <img src="{{ asset('templates/child-care/images/t4.jpg') }}" alt="" />
                    <div class="teaminfo">
                        <h3> Paul steve</h3>
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Quản lý</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> 035 618 5047</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">
                                mail@example3.com</a></p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //team -->

    <!-- gallery -->
    <!---728x90--->
    <div class="banner-bottom gallery" id="gallery">
        <div class="container">

            <div class="wthree-heading">
                <div class="w3-heading-all">
                    <h3>Bộ sưu tập</h3>
                </div>
            </div>
            <!---728x90--->
            <div class="w3ls_gallery_grids">
                <div class="col-md-4 w3_agile_gallery_grid">
                    <div class="agile_gallery_grid">
                        <a title=""
                            href="{{ asset('templates/child-care/images/g1.jpg') }}">
                            <div class="agile_gallery_grid1">
                                <img src="{{ asset('templates/child-care/images/g1.jpg') }}" alt=" "
                                    class="img-responsive" />
                                <div class="w3layouts_gallery_grid1_pos">
                                    <h3>Chăm sóc bé</h3>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="agile_gallery_grid">
                        <a title=""
                            href="{{ asset('templates/child-care/images/g2.jpg') }}">
                            <div class="agile_gallery_grid1">
                                <img src="{{ asset('templates/child-care/images/g2.jpg') }}" alt=" "
                                    class="img-responsive" />
                                <div class="w3layouts_gallery_grid1_pos">
                                    <h3>Chăm sóc bé</h3>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="agile_gallery_grid">
                        <a title=""
                            href="{{ asset('templates/child-care/images/g3.jpg') }}">
                            <div class="agile_gallery_grid1">
                                <img src="{{ asset('templates/child-care/images/g3.jpg') }}" alt=" "
                                    class="img-responsive" />
                                <div class="w3layouts_gallery_grid1_pos">
                                    <h3>Chăm sóc bé</h3>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 w3_agile_gallery_grid">
                    <div class="agile_gallery_grid">
                        <a title=""
                            href="{{ asset('templates/child-care/images/g4.jpg') }}">
                            <div class="agile_gallery_grid1">
                                <img src="{{ asset('templates/child-care/images/g4.jpg') }}" alt=" "
                                    class="img-responsive" />
                                <div class="w3layouts_gallery_grid1_pos">
                                    <h3>Chăm sóc bé</h3>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="agile_gallery_grid">
                        <a title=""
                            href="{{ asset('templates/child-care/images/g5.jpg') }}">
                            <div class="agile_gallery_grid1">
                                <img src="{{ asset('templates/child-care/images/g5.jpg') }}" alt=" "
                                    class="img-responsive" />
                                <div class="w3layouts_gallery_grid1_pos">
                                    <h3>Chăm sóc bé</h3>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="agile_gallery_grid">
                        <a title=""
                            href="{{ asset('templates/child-care/images/g6.jpg') }}">
                            <div class="agile_gallery_grid1">
                                <img src="{{ asset('templates/child-care/images/g6.jpg') }}" alt=" "
                                    class="img-responsive" />
                                <div class="w3layouts_gallery_grid1_pos">
                                    <h3>Chăm sóc bé</h3>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 w3_agile_gallery_grid">
                    <div class="agile_gallery_grid">
                        <a title=""
                            href="{{ asset('templates/child-care/images/g7.jpg') }}">
                            <div class="agile_gallery_grid1">
                                <img src="{{ asset('templates/child-care/images/g7.jpg') }}" alt=" "
                                    class="img-responsive" />
                                <div class="w3layouts_gallery_grid1_pos">
                                    <h3>Chăm sóc bé</h3>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="agile_gallery_grid">
                        <a title=""
                            href="{{ asset('templates/child-care/images/g8.jpg') }}">
                            <div class="agile_gallery_grid1">
                                <img src="{{ asset('templates/child-care/images/g8.jpg') }}" alt=" "
                                    class="img-responsive" />
                                <div class="w3layouts_gallery_grid1_pos">
                                    <h3>Chăm sóc bé</h3>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="agile_gallery_grid">
                        <a title=""
                            href="{{ asset('templates/child-care/images/g9.jpg') }}">
                            <div class="agile_gallery_grid1">
                                <img src="{{ asset('templates/child-care/images/g9.jpg') }}" alt=" "
                                    class="img-responsive" />
                                <div class="w3layouts_gallery_grid1_pos">
                                    <h3>Chăm sóc bé</h3>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!---728x90--->
    <!-- //gallery -->
    <!-- /testimonials -->
    <div class="testimonials_test" id="testimonials">
        <div class="w3-heading-all w3-head2-all">
            <h3>Khách hàng đánh giá</h3>
        </div>
        <div class="container">
            <!-- form -->
            <div class="col_md_6 login-w3l">
                <div class="top-img-agileits-w3layouts">
                    <h2 class="sub-head-w3-agileits">Đăng ký để nhận thông tin mơi nhất</span></h2>
                </div>
                <div class="login-form">
                    <form action="#">
                        <input type="text" name="Name" placeholder="Họ tên" required="" />
                        <input type="email" name="Email" placeholder="Địa chỉ Email" required="" />
                        <input type="submit" value="Đăng ký">
                    </form>
                </div>
            </div>
            <div class="col_md_6 testimonials">
                <section id="carousel">
                    <div class="testimonials_inner">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
                            <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel"
                                data-interval="3000">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="1" class="active"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
                                </ol>
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="item">
                                        <div class="profile-circle">
                                            <img src="{{ asset('templates/child-care/images/c2.png') }}" alt=" ">
                                        </div>
                                        <h4>Anh Thư</h4>
                                        <blockquote>
                                            <p class="test">Những chia sẻ chân thực ấy đã giúp các bé phát triển toàn
                                                diện. Đây cũng chính là lý do mà Child Care luôn nhận
                                                được sự tin yêu, sự chia sẻ và đánh giá ấm lòng từ phía các mẹ.</p>
                                        </blockquote>
                                    </div>
                                    <div class="item">
                                        <div class="profile-circle"><img
                                                src="{{ asset('templates/child-care/images/c2.png') }}" alt=" "></div>
                                        <h4>Anh Thư</h4>
                                        <blockquote>
                                            <p class="test">Những chia sẻ chân thực ấy đã giúp các bé phát triển toàn
                                                diện. Đây cũng chính là lý do mà Child Care luôn nhận
                                                được sự tin yêu, sự chia sẻ và đánh giá ấm lòng từ phía các mẹ.</p>
                                        </blockquote>
                                    </div>
                                    <div class="active item">
                                        <div class="profile-circle"><img
                                                src="{{ asset('templates/child-care/images/c2.png') }}" alt=" "></div>
                                        <h4>Anh Thư</h4>
                                        <blockquote>
                                            <p class="test">Những chia sẻ chân thực ấy đã giúp các bé phát triển toàn
                                                diện. Đây cũng chính là lý do mà Child Care luôn nhận
                                                được sự tin yêu, sự chia sẻ và đánh giá ấm lòng từ phía các mẹ.</p>
                                        </blockquote>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <!-- //testimonials -->
    <div class="map" id="contact">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48393.30799446157!2d-74.01837574721542!3d40.70520823566694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1453557757637" allowfullscreen></iframe>
        <div class="book-form" id="contact">
            <form action="#">
                <div class="phone_email">
                    <label>Họ tên : </label>
                    <div class="form-text">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <input type="text" name="Name" placeholder="Họ tên" required="">
                    </div>
                </div>
                <div class="phone_email phone_email1">
                    <label>Email : </label>
                    <div class="form-text">
                        <span class="fa fa-envelope" aria-hidden="true"></span>
                        <input type="email" name="email" placeholder="Email" required="">
                    </div>
                </div>
                <div class="phone_email">
                    <label>Số điện thoại : </label>
                    <div class="form-text">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <input type="text" name="Phone no" placeholder="Số điện thoại" required="">
                    </div>
                </div>
                <div class="phone_email phone_email1">
                    <label>Địa chỉ : </label>
                    <div class="form-text">
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                        <input type="text" name="address" placeholder="Địa chỉ của bạn" required="">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="agileits_reservation_grid">
                    <div class="span1_of_1">
                        <label>Ngày : </label>
                        <div class="book_date">
                            <span class="fa fa-calendar" aria-hidden="true"></span>
                            <input class="date" id="datepicker" type="text" name="date" placeholder="mm/dd/yyyy"
                                required="">
                        </div>
                    </div>
                    <div class="span1_of_1">
                        <!-- start_section_room -->
                        <label> Đặt lịch</label>
                        <div class="section_room">
                            <span class="fa fa-clock-o" aria-hidden="true"></span>
                            <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                <option value="null">Khẩn cấp</option>
                                <option value="null">Bình thường</option>
                                <option value="AX">Bệnh nhân mới</option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <input type="submit" value="Đặt Lịch" />
            </form>
        </div>

    </div>

    <!-- footer -->
    <div class="mkl_footer">
        <div class="sub-footer">
            <div class="container">
                <div class="botttom-nav-allah">
                    <ul>
                        <li>
                            <a href="#home" class="scroll">Trang chủ</a>
                        </li>
                        <li>
                            <a href="#about" class="scroll">Về chúng tôi</a>
                        </li>
                        <li>
                            <a href="#testimonials" class="scroll">Khách hàng đánh giá</a>
                        </li>
                        <li>
                            <a href="#pricing-agile" class="scroll">Bảng giá</a>
                        </li>
                        <li>
                            <a href="#contact" class="scroll">Liên hệ</a>
                        </li>
                    </ul>
                </div>
                <div class="mkls_footer_grid">
                    <div class="mkls_footer_grid_left">
                        <h4> <i class="fa fa-map-marker" aria-hidden="true"></i>Địa chỉ:</h4>
                        <p>220/91 Nguyễn Văn Khối, Phường 9
                            <br>Quận Gò Vấp, Hồ Chí Minh
                        </p>
                    </div>
                    <div class="mkls_footer_grid_left">
                        <h4> <i class="fa fa-clock-o" aria-hidden="true"></i>Giờ mở cửa:</h4>
                        <p>Thứ 2 -7 : 8am-10pm</p>
                        <p>Chủ nhật
                            <span>(đóng cửa)</span>
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <!-- footer-button-info -->
                <div class="footer-middle-thanks">
                    <h2>Cảm ơn đã ghé thăm</h2>
                </div>
                <!-- footer-button-info -->
            </div>
        </div>
        <div class="footer-copy-right">
            <div class="container">
                <div class="allah-copy">
                    <p>© 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt</p>
                </div>
                <div class="footercopy-social">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="fa fa-facebook"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-rss"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-vk"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--/footer -->

    <!-- modal -->
    <!-- for pop up -->
    <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="span2"
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"> Child care </h4>
                </div>
                <div class="modal-body">
                    <div class="agileits-w3layouts-info">
                        <img src="{{ asset('templates/child-care/images/pop.jpg') }}" alt="" />
                        <p>Cùng Chúng tôi khám phá nhanh, đọc sâu, hiểu kỹ những thông tin chăm sóc bé yêu và cuối cùng là bạn chỉ cần tận hưởng từng khoảnh khắc tuyệt vời giữa bạn và bé mà thôi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //modal -->
    <!-- //for pop up -->




    <script type="text/javascript" src="{{ asset('templates/child-care/js/jquery-2.1.4.min.js') }}"></script>
    <!-- password-script -->
    <script type="text/javascript">
        window.onload = function() {
            //document.getElementById("password1").onchange = validatePassword;
            //document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }

    </script>
    <!-- //password-script -->


    <script src="{{ asset('templates/child-care/js/responsiveslides.min.js') }}"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });

    </script>
    <!--banner Slider starts Here-->
    <!-- /gallery js -->
    <script src="{{ asset('templates/child-care/js/simpleLightbox.js') }}"></script>
    <script>
        $('.w3_agile_gallery_grid a').simpleLightbox();

    </script>
    <!-- //gallery js -->
    <!-- Calendar -->
    <link rel="stylesheet" href="{{ asset('templates/child-care/css/jquery-ui.css') }}" />
    <script src="{{ asset('templates/child-care/js/jquery-ui.js') }}"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });

    </script>
    <!-- //Calendar -->

    <!-- start-smoth-scrolling-nav -->
    <script type="text/javascript" src="{{ asset('templates/child-care/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/child-care/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });

    </script>
    <!-- start-smoth-scrolling -->
    <!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
    <script type="text/javascript">
        $(document).ready(function() {
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 100,
                easingType: 'linear'
            };
        });

    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
    <!-- //Slide-To-Top JavaScript -->
    <!-- jarallax scrolling -->
    <script src="{{ asset('templates/child-care/js/jarallax.js') }}"></script>
    <script src="{{ asset('templates/child-care/js/SmoothScroll.min.js') }}"></script>
    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })

    </script>
    <!-- //jarallax scrolling -->
    <!-- smooth scrolling -->
    <script type="text/javascript">
        $(document).ready(function() {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });

    </script>
    <!-- //smooth scrolling -->
    <script type="text/javascript" src="{{ asset('templates/child-care/js/bootstrap-3.1.1.min.js') }}"></script>
</body>

</html>
