<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Cat Life web template" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!--// Meta tag Keywords -->
    <!-- css lifes -->
    <link rel="stylesheet" href="{{ asset('templates/cat-life/css/bootstrap.css') }}" type="text/css" media="all">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{ asset('templates/cat-life/css/font-awesome.css') }}" type="text/css" media="all">
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="{{ asset('templates/cat-life/css/owl.carousel.css') }}" type="text/css" media="all" />
    <!-- Owl-Carousel-CSS -->
    <link rel="stylesheet" href="{{ asset('templates/cat-life/css/style.css') }}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- //css lifes -->
    <!-- web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Molle:400i&amp;subset=latin-ext" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <!-- //web fonts -->
</head>

<body>
    <div class="w3l-main" id="home">
        <div class="container">
            <!-- header -->
            <div class="header">
                <div class="logo">
                    <h1>
                        <a href="{{ route('temp.cat-life.index') }}">
                            <img class="logo-img center-block" src="{{ asset('templates/cat-life/images/logo.png') }}"
                                alt="" /> Cat Life
                        </a>
                    </h1>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- //header -->
        </div>
        <!-- Slider -->
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li>
                        <div class="slider-img-w3layouts one">
                            <div class="w3l-overlay">
                                <div class="container">
                                    <div class="banner-text-info">
                                        <h3>Chúng tôi cung cấp dịch vụ
                                            <span>chăm sóc</span> thú cưng
                                            <span>pet</span> Chất lượng!
                                        </h3>
                                        <p>Hướng dẫn toàn diện về cách chăm sóc mèo để thú cưng.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slider-img-w3layouts two">
                            <div class="w3l-overlay">
                                <div class="container">
                                    <div class="banner-text-info">
                                        <h3>Hãy thể hiện
                                            <span>tình yêu </span>của mình tới
                                            <span>pet</span> của bạn!
                                        </h3>
                                        <p>Hướng dẫn toàn diện về cách chăm sóc mèo để thú cưng.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slider-img-w3layouts three">
                            <div class="w3l-overlay">
                                <div class="container">
                                    <div class="banner-text-info">
                                        <h3>Chúng tôi cung cấp dịch vụ
                                            <span>chăm sóc</span> thú cưng
                                            <span>pet</span> Chất lượng!
                                        </h3>
                                        <p>Hướng dẫn toàn diện về cách chăm sóc mèo để thú cưng.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slider-img-w3layouts four">
                            <div class="w3l-overlay">
                                <div class="container">
                                    <div class="banner-text-info">
                                        <h3>Thể hiện <span>tình yêu </span>của mình tới
                                            <span>pet</span> của bạn!
                                        </h3>
                                        <p>Hướng dẫn toàn diện về cách chăm sóc mèo để thú cưng.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--//Slider-->
    </div>
    <!--//banner-->

    <!-- sticky navigation -->
    <div class="nav-links">
        <nav class='navbar navbar-default'>
            <div class='container'>
                <div class='navbar-header'>
                    <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
                        <span class='sr-only'>Toggle Navigation</span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                </div>
                <div class='collapse navbar-collapse'>
                    <ul>
                        <li>
                            <a href="{{ route('temp.cat-life.index') }}">Trang Chủ</a>
                        </li>
                        <li>
                            <a href="#about" class="scroll">Về Chúng Tôi</a>
                        </li>
                        <li>
                            <a href="#services" class="scroll">Dịch Vụ</a>
                        </li>
                        <li>
                            <a href="#blog" class="scroll">Blog</a>
                        </li>
                        <li>
                            <a href="#team" class="scroll">Đội Ngũ</a>
                        </li>
                        <li>
                            <a href="#gallery" class="scroll">Bộ Sưu Tập</a>
                        </li>
                        <li>
                            <a href="#contact" class="scroll">Liên Hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- //sticky navigation -->

    <!-- welcome -->
    <div class="about" id="about">
        <div class="container">
            <h3 class="agile-title">Welcome</h3>
            <div class="about-top w3ls-agile">
                <div class="col-md-6 red">
                    <img class="img-responsive" src="{{ asset('templates/cat-life/images/ab.jpg') }}" alt="">
                </div>
                <div class="col-md-6 come">
                    <div class="about-wel">
                        <h5>Giới thiệu về
                            <span>Cat Life</span>
                        </h5>
                        <p>Hệ thống trại nhân giống, cung cấp phụ kiện để huấn luyện chó, mèo cảnh thuần chủng đạt chuẩn
                            quốc tế.</p>
                        <ul>
                            <li>
                                <i class="glyphicon glyphicon-ok"></i>Chăm sóc sức khỏe Mèo
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok"></i>Chải lông cho Mèo
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok"></i>Thức ăn cho mèo
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-ok"></i>Huấn luyện mèo
                            </li>
                        </ul>
                    </div>
                    <div class="button-styles">
                        <a href="#" data-toggle="modal" data-target="#myModal2">Xem thêm</a>
                        <a href="#contact" class="button2-w3l scroll">Liên hệ</a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //welcome -->

    <!-- middle slider -->
    <div class="w3agile-spldishes">
        <div class="container">
            <div class="spldishes-grids">
                <!-- Owl-Carousel -->
                <div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
                    <a class="item g1">
                        <img class="lazyOwl" src="{{ asset('templates/cat-life/images/m1.jpg') }}" title="Cat Life"
                            alt="" />
                    </a>
                    <a class="item g1">
                        <img class="lazyOwl" src="{{ asset('templates/cat-life/images/m2.jpg') }}" title="Cat Life"
                            alt="" />
                    </a>
                    <a class="item g1">
                        <img class="lazyOwl" src="{{ asset('templates/cat-life/images/m3.jpg') }}" title="Cat Life"
                            alt="" />
                    </a>
                    <a class="item g1">
                        <img class="lazyOwl" src="{{ asset('templates/cat-life/images/m4.jpg') }}" title="Cat Life"
                            alt="" />
                    </a>
                    <a class="item g1">
                        <img class="lazyOwl" src="{{ asset('templates/cat-life/images/m5.jpg') }}" title="Cat Life"
                            alt="" />
                    </a>
                    <a class="item g1">
                        <img class="lazyOwl" src="{{ asset('templates/cat-life/images/m6.jpg') }}" title="Cat Life"
                            alt="" />
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //middle slider -->

    <!-- middle section -->
    <div class="middle-w3l">
        <div class="container">
            <h2> Cung cấp những sản phẩm và dịch vụ chất lượng tốt nhất dành cho mèo!</h2>
            <div class="button-styles">
                <a href="#contact" class="button3-w3l scroll">Liên hệ</a>
            </div>
        </div>
    </div>
    <!-- //middle section -->

    <!-- services -->
    <div class="services" id="services">
        <div class="container">
            <h3 class="agile-title">Gói Dịch Vụ</h3>
            <div class="w3_agile_services_grids">
                <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid " data-aos="zoom-in">
                    <div class="ih-item circle effect1 agile_services_grid">
                        <div class="spinner"></div>
                        <div class="img">
                            <img src="{{ asset('templates/cat-life/images/c1.jpg') }}" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <fieldset>
                        <legend>Cắt tỉa lông</legend>
                        Cung cấp những dịch vụ chất lượng tốt nhất dành cho mèo.
                    </fieldset>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
                    <div class="ih-item circle effect1 agile_services_grid">
                        <div class="spinner"></div>
                        <div class="img">
                            <img src="{{ asset('templates/cat-life/images/c2.jpg') }}" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <fieldset>
                        <legend>Tắm Spa</legend>
                        Cung cấp những dịch vụ chất lượng tốt nhất dành cho mèo.
                    </fieldset>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
                    <div class="ih-item circle effect1 agile_services_grid">
                        <div class="spinner"></div>
                        <div class="img">
                            <img src="{{ asset('templates/cat-life/images/c3.jpg') }}" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <fieldset>
                        <legend>Trông giữ mèo</legend>
                        Cung cấp những dịch vụ chất lượng tốt nhất dành cho mèo.
                    </fieldset>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="w3_agile_services_grids">
                <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid " data-aos="zoom-in">
                    <div class="ih-item circle effect1 agile_services_grid">
                        <div class="spinner"></div>
                        <div class="img">
                            <img src="{{ asset('templates/cat-life/images/c4.jpg') }}" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <fieldset>
                        <legend>Khách sạn mèo</legend>
                        Cung cấp những dịch vụ chất lượng tốt nhất dành cho mèo.
                    </fieldset>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
                    <div class="ih-item circle effect1 agile_services_grid">
                        <div class="spinner"></div>
                        <div class="img">
                            <img src="{{ asset('templates/cat-life/images/c5.jpg') }}" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <fieldset>
                        <legend>Khám sức khỏe</legend>
                        Cung cấp những dịch vụ chất lượng tốt nhất dành cho mèo.
                    </fieldset>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
                    <div class="ih-item circle effect1 agile_services_grid">
                        <div class="spinner"></div>
                        <div class="img">
                            <img src="{{ asset('templates/cat-life/images/c6.jpg') }}" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <fieldset>
                        <legend>Tư vấn miễn phí</legend>
                        Cung cấp những dịch vụ chất lượng tốt nhất dành cho mèo.
                    </fieldset>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="w3l-img-side">
            <img src="{{ asset('templates/cat-life/images/cat11.png') }}" alt="" />
        </div>
        <div class="w3l-img-side w3l-img-side2">
            <img src="{{ asset('templates/cat-life/images/cat1.png') }}" alt="" />
        </div>
    </div>
    <!-- //services -->

    <!-- blog -->
    <div class="blog" id="blog">
        <div class="container">
            <h3 class="agile-title">Blog</h3>
            <div class="col-md-5 col-xs-6 blog-grids">
                <div class="blog-full-wthree">
                    <div class="blog-left-agileits">
                        <p>23</p>
                        <span>Tháng 2</span>
                    </div>
                    <div class="blog-right-agileits-w3layouts">
                        <h4>
                            <a href="#" data-toggle="modal" data-target="#myModal2">Bật Mí 15 Lý Do Khiến Bạn Nhất Định
                                Phải Sở Hữu Một Bé Mèo</a>
                        </h4>
                        <p>
                            <a href="#" data-toggle="modal" data-target="#myModal2">Cat Life</a>
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="blog-full-wthree">
                    <div class="blog-left-agileits">
                        <p>22</p>
                        <span>Tháng 8</span>
                    </div>
                    <div class="blog-right-agileits-w3layouts">
                        <h4>
                            <a href="#" data-toggle="modal" data-target="#myModal2">10 Lý Do Khiến Bạn Muốn Đón Ngay Một
                                Bé Cún Về Nhà</a>
                        </h4>
                        <p>
                            <a href="#" data-toggle="modal" data-target="#myModal2">Cat Life</a>
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="blog-full-wthree">
                    <div class="blog-left-agileits">
                        <p>15</p>
                        <span>Tháng 9</span>
                    </div>
                    <div class="blog-right-agileits-w3layouts">
                        <h4>
                            <a href="#" data-toggle="modal" data-target="#myModal2">Cách chăm sóc mèo mang thai tại nhà
                                cần phải biết</a>
                        </h4>
                        <p>
                            <a href="#" data-toggle="modal" data-target="#myModal2">Cat Life</a>
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-5 col-xs-6 blog-grids">
                <div class="blog-full-wthree">
                    <div class="blog-left-agileits">
                        <p>26</p>
                        <span>Tháng 2</span>
                    </div>
                    <div class="blog-right-agileits-w3layouts">
                        <h4>
                            <a href="#" data-toggle="modal" data-target="#myModal2">Top 11 Giống Chó, Mèo Nhất Định Phải
                                Sở Hữu Trong Đời</a>
                        </h4>
                        <p>
                            <a href="#" data-toggle="modal" data-target="#myModal2">Cat Life</a>
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="blog-full-wthree">
                    <div class="blog-left-agileits">
                        <p>6</p>
                        <span>Tháng 9</span>
                    </div>
                    <div class="blog-right-agileits-w3layouts">
                        <h4>
                            <a href="#" data-toggle="modal" data-target="#myModal2">Hướng dẫn từng bước đỡ đẻ cho chó
                                ngay tại nhà</a>
                        </h4>
                        <p>
                            <a href="#" data-toggle="modal" data-target="#myModal2">Cat Life</a>
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="blog-full-wthree">
                    <div class="blog-left-agileits">
                        <p>12</p>
                        <span>Tháng 2</span>
                    </div>
                    <div class="blog-right-agileits-w3layouts">
                        <h4>
                            <a href="#" data-toggle="modal" data-target="#myModal2">Phải làm sao khi mèo bị đau chân và
                                đi khập khiễng?</a>
                        </h4>
                        <p>
                            <a href="#" data-toggle="modal" data-target="#myModal2">Cat Life</a>
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="blog-grids mid-blog-agile">
            <img src="{{ asset('templates/cat-life/images/cat2.png') }}" class="img-responsive" alt="">
        </div>
    </div>
    <!-- Modal5 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="modal-info">
                        <h4>Cat Life</h4>
                        <img src="{{ asset('templates/cat-life/images/g2.jpg') }}" alt=" " class="img-responsive" />
                        <h5>10 Lý Do Khiến Bạn Muốn Đón Ngay Một Bé Cún Về Nhà</h5>
                        <p class="para-agileits-w3layouts">Những chú chó không chỉ là vật nuôi mà còn là những người bạn
                            tốt nhất của con người. Khuôn mặt đáng yêu và dễ thương của chúng luôn mang đến niềm vui,
                            xua tan đi muộn phiền, âu lo. Ngoài những điều trên vẫn còn rất nhiều lợi ích tuyệt vời khác
                            mà cún cưng đem lại cho bạn. Cùng chúng tôi tìm hiểu và khám phá trong bài viết này nhé!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal5 -->
    <!-- //blog -->

    <!-- team -->
    <div class="team" id="team">
        <div class="container">
            <h3 class="agile-title">Đội ngũ</h3>
            <div class="team-agileinfo agileits-w3layouts">
                <div class="col-md-6 team-grid w3-agileits">
                    <div class="team-grid-right">
                        <img src="{{ asset('templates/cat-life/images/t1.jpg') }}" alt=" " class="img-responsive" />
                    </div>
                    <div class="team-grid-left">
                        <h4>Tấn Hưng</h4>
                        <p>Đội ngũ nhân viên có nhiều kinh nghiệm trong việc chăm sóc Mèo</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 team-grid w3-agileits">
                    <div class="team-grid-right aliquam">
                        <img src="{{ asset('templates/cat-life/images/t2.jpg') }}" alt=" " class="img-responsive" />
                    </div>
                    <div class="team-grid-left non">
                        <h4>Anh Thư</h4>
                        <p>Đội ngũ nhân viên có nhiều kinh nghiệm trong việc chăm sóc Mèo</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="team-agileinfo">
                <div class="col-md-6 team-grid w3-agileits">
                    <div class="team-grid-right">
                        <img src="{{ asset('templates/cat-life/images/t3.jpg') }}" alt=" " class="img-responsive" />
                    </div>
                    <div class="team-grid-left">
                        <h4>Nhật Thiện</h4>
                        <p>Đội ngũ nhân viên có nhiều kinh nghiệm trong việc chăm sóc Mèo</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 team-grid w3-agileits">
                    <div class="team-grid-right aliquam">
                        <img src="{{ asset('templates/cat-life/images/t4.jpg') }}" alt=" " class="img-responsive" />
                    </div>
                    <div class="team-grid-left non">
                        <h4>Khánh Hạ</h4>
                        <p>Đội ngũ nhân viên có nhiều kinh nghiệm trong việc chăm sóc Mèo</p>
                    </div>

                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team -->

    <!-- Gallery -->
    <div id="gallery" class="gallery">
        <div class="container">
            <h3 class="agile-title">Bộ Sưu Tập</h3>
        </div>
        <div class="agileinfo-gallery-row">
            <div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
                <a href="{{ asset('templates/cat-life/images/m1.jpg') }}" class="imghvr-hinge-right figure">
                    <img src="{{ asset('templates/cat-life/images/m1.jpg') }}" alt="" title="Cat Life Image" />
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
                <a href="{{ asset('templates/cat-life/images/g2.jpg') }}" class="imghvr-hinge-right figure">
                    <img src="{{ asset('templates/cat-life/images/g2.jpg') }}" alt="" title="Cat Life Image" />
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
                <a href="{{ asset('templates/cat-life/images/g3.jpg') }}" class="imghvr-hinge-right figure">
                    <img src="{{ asset('templates/cat-life/images/g3.jpg') }}" alt="" title="Cat Life Image" />
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
                <a href="{{ asset('templates/cat-life/images/m4.jpg') }}" class="imghvr-hinge-right figure">
                    <img src="{{ asset('templates/cat-life/images/m4.jpg') }}" alt="" title="Cat Life Image" />
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
                <a href="{{ asset('templates/cat-life/images/m5.jpg') }}" class="imghvr-hinge-right figure">
                    <img src="{{ asset('templates/cat-life/images/m5.jpg') }}" alt="" title="Cat Life Image" />
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
                <a href="{{ asset('templates/cat-life/images/m6.jpg') }}" class="imghvr-hinge-right figure">
                    <img src="{{ asset('templates/cat-life/images/m6.jpg') }}" alt="" title="Cat Life Image" />
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
                <a href="{{ asset('templates/cat-life/images/m3.jpg') }}" class="imghvr-hinge-right figure">
                    <img src="{{ asset('templates/cat-life/images/m3.jpg') }}" alt="" title="Cat Life Image" />
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
                <a href="{{ asset('templates/cat-life/images/m2.jpg') }}" class="imghvr-hinge-right figure">
                    <img src="{{ asset('templates/cat-life/images/m2.jpg') }}" alt="" title="Cat Life Image" />
                </a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //Gallery -->

    <!-- contact -->
    <div class="contact" id="contact">
        <div class="container">
            <h3 class="agile-title">Liên Hệ</h3>
            <div class="col-md-9 col-sm-9 contact-right">
                <form action="#">
                    <input type="text" name="name" placeholder="Họ tên" required="">
                    <input type="email" name="email" placeholder="Email" required="">
                    <input type="text" name="subject" placeholder="Chủ đề" required="">
                    <input type="text" name="phone number" placeholder="Số điện thoại" required="">
                    <textarea name="message" placeholder="Nội dung" required=""></textarea>
                    <input type="submit" value="Gửi">
                </form>
            </div>
            <div class="col-md-3 col-sm-3 contact-left">
                <div class="address">
                    <h4>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>ĐỊA CHỈ
                    </h4>
                    <p>220/91 Nguyễn Văn Khối, Phường 9</p>
                    <p>Quận Gò Vấp, Hồ Chí Minh</p>
                </div>
                <div class="phone">
                    <h4>
                        <i class="fa fa-phone" aria-hidden="true"></i>SỐ ĐIỆN THOẠI
                    </h4>
                    <p>035 618 5047</p>
                </div>
                <div class="email">
                    <h4>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>E-MAIL
                    </h4>
                    <p>
                        <a href="mailto:info@example.com">smartvietsolution@gmail.com</a>
                    </p>
                    {{-- <p>
                        <a href="mailto:info@example.com">Example2@gmail.com</a>
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- map -->
    <div class="map-w3ls">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22702.22744502486!2d11.113366067229226!3d44.662878362361056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fc3eca9065c15%3A0x12ec8a03aadae866!2s40019+Sant&#39;Agata+Bolognese+BO%2C+Italy!5e0!3m2!1sen!2sin!4v1451281303075"
            allowfullscreen></iframe>
    </div>
    <!-- //map -->
    <!-- //contact -->

    <!-- footer -->
    <section class="footer-w3">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4 footer-agile1" data-aos="zoom-in">
                <h3>Cat Life</h3>
                <p class="footer-p1">Chúng tôi cung cấp những sản phẩm và dịch vụ chất lượng tốt nhất dành cho mèo!
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footer-mid-w3" data-aos="zoom-in">
                <h3>Instagram</h3>
                <div class="agileinfo_footer_grid1">
                    <a href="#">
                        <img src="{{ asset('templates/cat-life/images/f1.jpg') }}" alt=" " class="img-responsive">
                    </a>
                </div>
                <div class="agileinfo_footer_grid1">
                    <a href="#">
                        <img src="{{ asset('templates/cat-life/images/f2.jpg') }}" alt=" " class="img-responsive">
                    </a>
                </div>
                <div class="agileinfo_footer_grid1">
                    <a href="#">
                        <img src="{{ asset('templates/cat-life/images/f3.jpg') }}" alt=" " class="img-responsive">
                    </a>
                </div>
                <div class="agileinfo_footer_grid1">
                    <a href="#">
                        <img src="{{ asset('templates/cat-life/images/f4.jpg') }}" alt=" " class="img-responsive">
                    </a>
                </div>
                <div class="agileinfo_footer_grid1">
                    <a href="#">
                        <img src="{{ asset('templates/cat-life/images/f5.jpg') }}" alt=" " class="img-responsive">
                    </a>
                </div>
                <div class="agileinfo_footer_grid1">
                    <a href="#">
                        <img src="{{ asset('templates/cat-life/images/f6.jpg') }}" alt=" " class="img-responsive">
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 footer-agile1" data-aos="zoom-in">
                <h3>Bài viêt mới</h3>
                <ul class="tweet-agile">
                    <li>
                        <i class="fa fa-twitter-square" aria-hidden="true"></i>
                        <p class="tweet-p1">
                            Bật Mí 15 Lý Do Khiến Bạn Nhất Định Phải Sở Hữu Một Bé Mèo
                        </p>
                        <p class="tweet-p2">Đăng 3 giờ trước.</p>
                    </li>
                    <li>
                        <i class="fa fa-twitter-square" aria-hidden="true"></i>
                        <p class="tweet-p1">
                            Hướng Dẫn Từng Bước Đỡ Đẻ Cho Chó Ngay Tại Nhà
                        </p>
                        <p class="tweet-p2">Đăng 3 giờ trước.</p>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- copyright -->
    <div class="w3layouts_copy_right">
        <div class="container">
            <p>© 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt</p>
        </div>
    </div>
    <!-- //copyright -->
    <!-- //footer -->


    <!-- js -->
    <script src="{{ asset('templates/cat-life/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ asset('templates/cat-life/js/bootstrap.js') }}"></script>
    <!-- Necessary-JavaScript-life-For-Bootstrap -->
    <!-- //js -->

    <!-- Banner Slider -->
    <script src="{{ asset('templates/cat-life/js/responsiveslides.min.js') }}"></script>
    <script>
        $(function() {
            $("#slider").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 1000,
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
    <!-- //Banner Slider -->

    <!-- Sticky Navigation Script -->
    <script>
        $(window).scroll(function() {
            if ($(window).scrollTop() >= 795) {
                $('nav').addClass('fixed-header');
            } else {
                $('nav').removeClass('fixed-header');
            }
        });

    </script>
    <!-- //Sticky Navigation Script -->

    <!-- simple-lightbox -->
    <script src="{{ asset('templates/cat-life/js/simple-lightbox.min.js') }}"></script>
    <script>
        $(function() {
            var gallery = $('.agileinfo-gallery-row a').simpleLightbox({
                navText: ['&lsaquo;', '&rsaquo;']
            });
        });

    </script>
    <link href="{{ asset('templates/cat-life/css/simplelightbox.min.css') }}" rel='stylesheet' type='text/css'>
    <!-- Light-box css -->
    <!-- //simple-lightbox -->

    <!-- smoothscroll -->
    <script src="{{ asset('templates/cat-life/js/SmoothScroll.min.js') }}"></script>
    <!-- //smoothscroll -->

    <!-- start-smooth-scrolling -->
    <script src="{{ asset('templates/cat-life/js/move-top.js') }}"></script>
    <script src="{{ asset('templates/cat-life/js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });

    </script>
    <!-- //end-smooth-scrolling -->

    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function() {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });

    </script>
    <!-- //smooth-scrolling-of-move-up -->

    <!-- Owl-Carousel-JavaScript -->
    <script src="{{ asset('templates/cat-life/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items: 3,
                lazyLoad: true,
                autoPlay: true,
                pagination: true,
            });
        });

    </script>
    <!-- //Owl-Carousel-JavaScript -->

</body>

</html>
