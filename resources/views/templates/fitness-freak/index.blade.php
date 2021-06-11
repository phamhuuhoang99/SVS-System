<!DOCTYPE html>
<html>

<head>
    <title>Fitness Freak Sports</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="{{ asset('templates/fitness-freak/css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('templates/fitness-freak/css/style.css') }}" type="text/css" rel="stylesheet" media="all">
    <!-- testimonials -->
    <link rel="stylesheet" href="{{ asset('templates/fitness-freak/css/owl.carousel.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('templates/fitness-freak/css/owl.theme.css') }}" type="text/css" media="all">
    <!-- flexslider -->
    <link rel="stylesheet" href="{{ asset('templates/fitness-freak/css/flexslider.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('templates/fitness-freak/css/smoothbox.css') }}" type='text/css' media="all" />
    <!-- font-awesome icons -->
    <link href="{{ asset('templates/fitness-freak/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Jockey+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
    <!-- banner -->
    <div class="main_section" id="home">
        <div class="agile-banner_nav">

            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1>
                        <a class="navbar-brand" href="{{route('temp.fitness-freak.index') }}">Freak
                            <span>itness</span>
                        </a>
                    </h1>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="{{route('temp.fitness-freak.index') }}" class="effect-3">Trang chủ</a>
                            </li>
                            <li>
                                <a href="#about" class="effect-3 scroll">Về chúng tôi</a>
                            </li>
                            <li>
                                <a href="#services" class="effect-3 scroll">Dịch vụ</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Xem thêm
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#explore" class="scroll">Khám phá</a>
                                    </li>
                                    <li>
                                        <a href="#gallery" class="scroll">Bộ sưu tập</a>
                                    </li>

                                    <li>
                                        <a href="#price" class="scroll">Dịch vụ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Kiến thức
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">

                                    <li>
                                        <a href="#team" class="scroll">Team</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#blog" class="scroll">Blog</a>
                                    </li>
                                    <li class="divider"></li>
                                </ul>
                            </li>


                            <li>
                                <a href="#contact" class="effect-3 scroll">Liên hệ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
            <div class="clearfix"> </div>
        </div>
        <!-- banner slider -->
        <div class="slider">
            <ul class="rslides" id="slider">
                <li>
                    <div class="w3ls-banner-image  w3ls-banner-image1">
                        <div class="layer">
                            <div class="banner-text">
                                <h3>commit</h3>
                                <p>Chương trình thực tế về giảm cân và tập luyện khoa học</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3ls-banner-image  w3ls-banner-image2">
                        <div class="layer">
                            <div class="banner-text">
                                <h3>Fitness</h3>
                                <p>Chương trình thực tế về giảm cân và tập luyện khoa học</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3ls-banner-image  w3ls-banner-image3">
                        <div class="layer">
                            <div class="banner-text">
                                <h3>strive</h3>
                                <p> Chương trình thực tế về giảm cân và tập luyện khoa học</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </div>
    <!-- //Slider -->
    <!-- about-->
    <div class="about-top section" id="about">
        <div class="container">
            <div class="w3l-about-top-head">
                <div class="col-md-6 about-left text-center">
                    <h5 class="main-title">Giới thiệu</h5>
                    <h6 class="txt">fitness freak</h6>
                    <p>phòng tập chất lượng cao</p>
                </div>
                <div class="col-md-6 about-right">
                    <h5>Cam kết chương trình tập luyện được thiết kế riêng biệt, phù hợp cho mỗi khách hàng, để tất cả những giọt mồ hôi, nước mắt, tất cả thời gian, công sức, tất cả mệt mỏi, đau đớn trong quá trình luyện tập sẽ mang lại cho bạn kết quả xứng đáng nhất.</h5>
                    <p>Tính kỷ luật trong Fitness là khi bạn có thể chối từ những món ăn không tốt cho sức khỏe và luôn duy trì luyện tập không bỏ cuộc, từ đó tạo cho bản thân một lối sống lành mạnh và khoa học.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->
    <!-- about-bottom-grid -->
    <div class="section about-bottomgrid">
        <div class="container">
            <div class="about-bot-grid-sec">
                <div class="about-middle-pos">
                    <h2>fitness freak</h2>
                    <p>Cam kêt chất lượng</p>
                </div>
                <div class="about-section">
                    <div class="col-md-4 col-sm-6  abg1">

                    </div>
                    <div class="col-md-8 col-sm-6 wthree-sec-about">
                        <h4 class="bot-grid1">giảm cân hay tăng cơ</h4>
                        <p class="bot-gridtxt">Chế độ tập luyện và dinh dưỡng riêng biệt để hoàn thành mục tiêu của bản thân.</p>
                    </div>
                    <div class="clearfix"> </div>

                </div>
                <div class="col-md-8  col-sm-6 wthree-sec-about about-pos-btm">
                    <h4 class="bot-grid-about"> môi trường thân thiện</h4>
                    <p>Đây chính là nơi các khách hàng của chúng tôi tạo nên sự thay đổi.</p>
                </div>
                <div class="col-md-4 col-sm-6 abg2">
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about-bottom-grid-->
    <!--services -->
    <div class="services text-center section" id="services">
        <div class="container">
            <h3 class="title1">giá trị cốt lõi</h3>
            <div class="services-head">
                <div class="w3_services-top">
                    <div class="services-grid">
                        <img src="{{ asset('templates/fitness-freak/images/z2.png') }}" alt="" />
                        <h4>Kiến thức</h4>
                        <p>Fitness là bộ môn khoa học nghiên cứu cơ thể con người, đòi hỏi cái tâm của người làm nghề. </p>
                    </div>
                </div>
                <div class="services-middle">
                    <div class="col-md-3 col-sm-4 col-xs-4 services-grid s3">
                        <img src="{{ asset('templates/fitness-freak/images/z3.png') }}" alt="" />
                        <h4>Kỷ Luật</h4>
                        <p>Tính kỷ luật trong Fitness là khi bạn có thể chối từ những món ăn không tốt cho sức khỏe và luôn duy trì luyện tập không bỏ cuộc.</p>
                    </div>
                    <div class="col-md-6 col-sm-4  col-xs-4 services-img-grid">
                        <img src="{{ asset('templates/fitness-freak/images/service1.png') }}" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-3 col-sm-4  col-xs-4 services-grid s3">
                        <img src="{{ asset('templates/fitness-freak/images/z4.png') }}" alt="" />
                        <h4>Thành công</h4>
                        <p>Giúp bạn có thân hình, cơ bắp như mình mong muốn.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="w3_services-top">
                    <div class="services-grid">
                        <img src="{{ asset('templates/fitness-freak/images/z5.png') }}" alt="" />
                        <h4>kết quả</h4>
                        <p> Cam kết chương trình tập luyện được thiết kế riêng biệt, phù hợp cho mỗi khách hàng, để tất cả những giọt mồ hôi, nước mắt, tất cả thời gian, công sức.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//services -->
    <!-- explore -->
    <div class="explore-grid text-center section" id="explore">
        <h3 class="title1">Khám phá</h3>
        <div class="sub-div">
            <div class="exp-grid">
                <div class="ab1 w3_agile-about-grid1">
                    <img src="{{ asset('templates/fitness-freak/images/p8.png') }}" alt="" />
                    <h4 class="explore-title">body building</h4>
                </div>
                <div class="ab1 w3_agile-about-grid1">
                    <img src="{{ asset('templates/fitness-freak/images/p4.png') }}" alt="" />
                    <h4 class="explore-title">pilates</h4>
                </div>
                <div class="ab1 w3_agile-about-grid1">
                    <img src="{{ asset('templates/fitness-freak/images/p1.png') }}" alt="" />
                    <h4 class="explore-title">Zumba</h4>
                </div>
                <div class="ab1 w3_agile-about-grid1">
                    <img src="{{ asset('templates/fitness-freak/images/p3.png') }}" alt="" />
                    <h4 class="explore-title">diet guide</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="exp-grid">
                <div class="ab1 w3_agile-about-grid1">
                    <img src="{{ asset('templates/fitness-freak/images/p6.png') }}" alt="" />
                    <h4 class="explore-title">yoga</h4>
                </div>
                <div class="ab1 w3_agile-about-grid1">
                    <img src="{{ asset('templates/fitness-freak/images/p2.png') }}" alt="" />
                    <h4 class="explore-title">fitness</h4>
                </div>
                <div class="ab1 w3_agile-about-grid1">
                    <img src="{{ asset('templates/fitness-freak/images/p5.png') }}" alt="" />
                    <h4 class="explore-title">meditation</h4>
                </div>
                <div class="ab1 w3_agile-about-grid1">
                    <img src="{{ asset('templates/fitness-freak/images/p7.png') }}" alt="" />
                    <h4 class="explore-title">Gym</h4>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //explore -->
    <!-- Stats -->
    <div class="stats">
        <div class="layer-stats">
            <div class="container section ">
                <div class="col-md-3">
                    <h4 class="stat-title text-center">Người thật
                        <span>Kêt quả </span><span>thật</span>

                    </h4>
                </div>
                <div class="col-md-9 stat-info">
                    <div class="col-sm-6 col-xs-6 stats-grid text-center">
                        <div class="w3-stats-icon">
                            <span class="fa fa-shield" aria-hidden="true"></span>
                        </div>
                        <div class="stats-right">
                            <h6>Hội viên</h6>
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='736' data-delay='.5' data-increment="1">343</div>

                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 stats-grid text-center">
                        <div class="w3-stats-icon">
                            <span class="fa fa-bookmark-o" aria-hidden="true"></span>
                        </div>
                        <div class="stats-right">
                            <h6>Cơ sở</h6>
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='780' data-delay='.5' data-increment="1">3</div>

                        </div>

                    </div>
                    <div class="col-sm-6 col-xs-6 stats-grid text-center">
                        <div class="w3-stats-icon">
                            <span class="fa fa-external-link" aria-hidden="true"></span>
                        </div>
                        <div class="stats-right">
                            <h6>Mỡ giảm</h6>
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='630' data-delay='.5' data-increment="1">1630KG</div>

                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 stats-grid text-center">
                        <div class="w3-stats-icon">
                            <span class="fa fa-users" aria-hidden="true"></span>
                        </div>
                        <div class="stats-right">
                            <h6>Cơ tăng</h6>
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='900' data-delay='.5' data-increment="1">300KG</div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //Stats -->
    <!-- gallery -->
    <div class="gallery section" id="gallery">
        <div class="container">
            <h3 class="title1">Bộ sưu tập</h3>
            <div class="gallery_grids">
                <div class="col-xs-4 agile-gallery_grid_main">
                    <div class="gallery-img-grid gallery_grid1 hover14 column">
                        <div class="gallery_effect">

                                <figure>
                                    <img src="{{ asset('templates/fitness-freak/images/g1.jpg') }}" alt=" " class="img-responsive" />
                                </figure>

                        </div>
                    </div>
                    <div class="gallery-img-grid hover14 column">
                        <div class="gallery_effect">

                                <figure>
                                    <img src="{{ asset('templates/fitness-freak/images/g2.jpg') }}" alt=" " class="img-responsive" />
                                </figure>

                        </div>
                    </div>
                    <div class="gallery-img-grid hover14 column">
                        <div class="gallery_effect">

                                <figure>
                                    <img src="{{ asset('templates/fitness-freak/images/g3.jpg') }}" alt=" " class="img-responsive" />
                                </figure>

                        </div>
                    </div>
                </div>
                <div class="col-xs-4 agile-gallery_grid_main">
                    <div class="gallery-img-grid hover14 column">
                        <div class="gallery_effect">

                                <figure>
                                    <img src="{{ asset('templates/fitness-freak/images/t1.jpg') }}" alt=" " class="img-responsive" />
                                </figure>

                        </div>
                    </div>
                    <div class="gallery-img-grid hover14 column">
                        <div class="gallery_effect">

                                <figure>
                                    <img src="{{ asset('templates/fitness-freak/images/t3.jpg') }}" alt=" " class="img-responsive" />
                                </figure>

                        </div>
                    </div>
                </div>
                <div class="col-xs-4 agile-gallery_grid_main">
                    <div class="gallery-img-grid gallery_grid1 hover14 column">
                        <div class="gallery_effect">

                                <figure>
                                    <img src="{{ asset('templates/fitness-freak/images/g4.jpg') }}" alt=" " class="img-responsive" />
                                </figure>

                        </div>
                    </div>
                    <div class="gallery-img-grid hover14 column">
                        <div class="gallery_effect">

                                <figure>
                                    <img src="{{ asset('templates/fitness-freak/images/g5.jpg') }}" alt=" " class="img-responsive" />
                                </figure>

                        </div>
                    </div>
                    <div class="gallery-img-grid hover14 column">
                        <div class="gallery_effect">

                                <figure>
                                    <img src="{{ asset('templates/fitness-freak/images/g6.jpg') }}" alt=" " class="img-responsive" />
                                </figure>

                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //gallery -->
    <!--  pricing-->
    <div class="section price-main text-center" id="price">
        <div class="container">
            <h3 class="title1">dịch vụ thẻ tập</h3>
            <div class="sub-div">
                <div class="col-md-4 col-sm-4 plan-grid  text-center">
                    <ul class="price-plan">
                        <li class="price-type">beginner</li>
                        <li class="price-tag">300,000đ</li>
                    </ul>
                    <ul class="price-list">
                        <li>gói tập a.m</li>
                        <li>gói tập full time</li>
                        <li>gói tập v.i.p</li>
                        <li>gói tập nâng cao</li>
                    </ul>
                    <div class="price1-btn">
                        <a href="#">Liên hệ ngay</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  plan-grid  text-center">
                    <ul class="price-plan">
                        <li class="price-type">professional</li>
                        <li class="price-tag">500,000đ</li>
                    </ul>
                    <ul class="price-list">
                        <li>gói tập a.m</li>
                        <li>gói tập full time</li>
                        <li>gói tập v.i.p</li>
                        <li>gói tập nâng cao</li>
                    </ul>
                    <div class="price1-btn">
                        <a href="#">Liên hệ ngay</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  plan-grid  text-center">
                    <ul class="price-plan">
                        <li class="price-type">advanced</li>
                        <li class="price-tag">800,000đ</li>
                    </ul>
                    <ul class="price-list">
                        <li>gói tập a.m</li>
                        <li>gói tập full time</li>
                        <li>gói tập v.i.p</li>
                        <li>gói tập nâng cao</li>
                    </ul>
                    <div class="price1-btn">
                        <a href="#">Liên hệ ngay</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- // pricing -->
    <!-- testimonials -->
    <div class="feedback section" id="testimonials">
        <h3 class="title1 text-center">Khách hàng nói về chúng tôi</h3>
        <div class="sub-div">
            <div class="container">
                <div class="testimonials-grids">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="feedback-info">
                                <div class="feedback-top">
                                    <p> Phòng tập chất lượng, không gian thoải mái. </p>
                                </div>
                                <div class="feedback-grids">
                                    <div class="feedback-icon">
                                        <span class="fa fa-user-o" aria-hidden="true"></span>
                                    </div>
                                    <div class="feedback-img-info">
                                        <h5>Phong Khoa</h5>
                                        <p>Khách hàng</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feedback-info">
                                <div class="feedback-top">
                                    <p> Coach nhiệt tình, hướng dẫn chi tiết các bài tập. </p>
                                </div>
                                <div class="feedback-grids">
                                    <div class="feedback-icon">
                                        <span class="fa fa-user-o" aria-hidden="true"></span>
                                    </div>
                                    <div class="feedback-img-info">
                                        <h5>Hữu Hoàng</h5>
                                        <p>Khách hàng</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feedback-info">
                                <div class="feedback-top">
                                    <p> Phòng tập chất lượng, không gian thoải mái. </p>
                                </div>
                                <div class="feedback-grids">
                                    <div class="feedback-icon">
                                        <span class="fa fa-user-o" aria-hidden="true"></span>
                                    </div>
                                    <div class="feedback-img-info">
                                        <h5>Hữu Hòa</h5>
                                        <p>Khách hàng</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feedback-info">
                                <div class="feedback-top">
                                    <p> Phòng tập chất lượng, không gian thoải mái. </p>
                                </div>
                                <div class="feedback-grids">
                                    <div class="feedback-icon">
                                        <span class="fa fa-user" aria-hidden="true"></span>
                                    </div>
                                    <div class="feedback-img-info">
                                        <h5>Lê Quy</h5>
                                        <p>Khách hàng</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feedback-info">
                                <div class="feedback-top">
                                    <p> Phòng tập chất lượng, không gian thoải mái. </p>
                                </div>
                                <div class="feedback-grids">
                                    <div class="feedback-icon">
                                        <span class="fa fa-user" aria-hidden="true"></span>
                                    </div>
                                    <div class="feedback-img-info">
                                        <h5>Lăng LD</h5>
                                        <p>Khách hàng</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="feedback-info">
                                <div class="feedback-top">
                                    <p> Phòng tập chất lượng, không gian thoải mái. </p>
                                </div>
                                <div class="feedback-grids">
                                    <div class="feedback-icon">
                                        <span class="fa fa-user" aria-hidden="true"></span>
                                    </div>
                                    <div class="feedback-img-info">
                                        <h5>Tấn Hưng</h5>
                                        <p>Khách hàng</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonials -->
    <!-- team-->
    <div class="team text-center" id="team">
        <div class="team-layer">
            <h3 class="title">HLV Chuyên nghiệp</h3>
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="col-md-6 col-sm-6 w3_agile-team-grid ">
                                <img src="{{ asset('templates/fitness-freak/images/s1.png') }}" alt=" " class="img-responsive" />
                                <h5>Duy Khôi,
                                    <span>Body Builder</span>
                                </h5>
                                <p>HLV cao cấp / Senior Coach</p>
                                <ul class="social_list">
                                    <li>
                                        <a href="#" class="facebook">
                                            <span class="fa fa-facebook" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <span class="fa fa-twitter" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dribble">
                                            <span class="fa fa-dribbble" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="vimeo">
                                            <span class="fa fa-vimeo" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6  w3_agile-team-grid">
                                <img src="{{ asset('templates/fitness-freak/images/s2.png') }}" alt=" " class="img-responsive" />
                                <h5>Ngọc Đông,
                                    <span>Fitness </span>
                                </h5>
                                <p>Quản lý HLV / Coach Manager</p>
                                <ul class="social_list">
                                    <li>
                                        <a href="#" class="facebook">
                                            <span class="fa fa-facebook" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <span class="fa fa-twitter" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dribble">
                                            <span class="fa fa-dribbble" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="vimeo">
                                            <span class="fa fa-vimeo" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>

                        </li>
                        <li>
                            <div class="col-md-6 col-sm-6  w3_agile-team-grid">
                                <img src="{{ asset('templates/fitness-freak/images/s3.png') }}" alt=" " class="img-responsive" />
                                <h5>Bảo Trí,
                                    <span>Fitness</span>
                                </h5>
                                <p>Giảng dạy HLV / Education Manager</p>
                                <ul class="social_list">
                                    <li>
                                        <a href="#" class="facebook">
                                            <span class="fa fa-facebook" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <span class="fa fa-twitter" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dribble">
                                            <span class="fa fa-dribbble" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="vimeo">
                                            <span class="fa fa-vimeo" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-md-6 col-sm-6  w3_agile-team-grid">
                                <img src="{{ asset('templates/fitness-freak/images/s4.png') }}" alt=" " class="img-responsive" />
                                <h5>Hoàng Nhân,
                                    <span> Body Builder</span>
                                </h5>
                                <p>Quản lý HLV / Coach Manager</p>
                                <ul class="social_list">
                                    <li>
                                        <a href="#" class="facebook">
                                            <span class="fa fa-facebook" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <span class="fa fa-twitter" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dribble">
                                            <span class="fa fa-dribbble" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="vimeo">
                                            <span class="fa fa-vimeo" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <div class="clearfix"></div>
                        </li>

                    </ul>
                </div>
            </section>

        </div>
    </div>
    <!-- //team -->
    <!-- blog -->
    <div class="response section" id="blog">
        <div class="container">
            <h3 class="title1">Blog</h3>
            <div class="sub-div">
                <div class="col-md-6 blog-grids">
                    <div class="media response-info">
                        <div class="media-left response-text-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('templates/fitness-freak/images/n1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="media-body response-text-right">
                            <h5>Cách tập gym để giảm mỡ bụng dành cho cả nam và nữ</h5>
                            <ul>
                                <li>18/12/2020</li>
                                <li>8:00 am</li>
                                <li>Theo dõi : 258</li>
                                <li>Bình luận : 1180</li>
                            </ul>
                            <p>Cách tập gym để giảm mỡ bụng dành cho cả nam và nữ Lượng.</p>
                            <a href="#" class="view-btn" data-toggle="modal" data-target="#myModal1">Xem thêm</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="media response-info m2">
                        <div class="media-left response-text-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('templates/fitness-freak/images/n2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="media-body response-text-right">
                            <h5>Chế độ tập gym giảm mỡ bụng dành cho phái mạnh.</h5>
                            <ul>
                                <li>06/11/2020</li>
                                <li>1:00 Pm</li>
                                <li>Theo dõi : 258</li>
                                <li>Bình luận : 1180</li>
                            </ul>
                            <p>Chế độ tập gym giảm mỡ bụng dành cho phái mạnh Lớp mỡ.</p>
                            <a href="#" class="view-btn" data-toggle="modal" data-target="#myModal1">Xem thêm</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-6 blog-grids">
                    <div class="media response-info">
                        <div class="media-left response-text-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('templates/fitness-freak/images/n3.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="media-body response-text-right">
                            <h5>Cách tập gym hiệu quả nhưng vẫn đảm bảo an toàn.</h5>
                            <ul>
                                <li>18/12/2020</li>
                                <li>8:00 am</li>
                                <li>Theo dõi : 258</li>
                                <li>Bình luận : 1180</li>
                            </ul>
                            <p>Cách tập gym hiệu quả nhưng vẫn đảm bảo an toàn Việc tập.</p>
                            <a href="#" class="view-btn" data-toggle="modal" data-target="#myModal1">Xem thêm</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="media response-info m2">
                        <div class="media-left response-text-left">
                            <a href="#">
                                <img class="media-object" src="{{ asset('templates/fitness-freak/images/n4.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="media-body response-text-right">
                            <h5>Những bài tập gym giảm cân dành cho nam giới.</h5>
                            <ul>
                                <li>06/11/2020</li>
                                <li>1:00 Pm</li>
                                <li>Theo dõi : 258</li>
                                <li>Bình luận : 1180</li>
                            </ul>
                            <p>Những bài tập gym giảm cân hiệu quả cho phái mạnh Với...</p>
                            <a href="#" class="view-btn" data-toggle="modal" data-target="#myModal1">Xem thêm</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //blog -->
    <!-- modal -->
    <div class="modal about-modal fade" id="myModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">fitness freak</h4>
                </div>
                <div class="modal-body">
                    <div class="modal-info">
                        <img src="{{ asset('templates/fitness-freak/images/g2.jpg') }}" alt="" class="img-responsive" />
                        <p>Việc tập gym không đơn giản là chỉ đến phòng gym thực hiện bài tập mà bạn cần nắm rõ các kiến thức xung quanh việc tập để có được kết quả tốt nhất. Bài viết dưới đây, Chúng tôi sẽ hướng dẫn bạn cách tập gym đúng chuẩn mang tới hiệu quả cao nhưng vẫn đảm bảo an toàn khi luyện tập.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //modal -->
    <!-- Contact-form -->
    <div class="section" id="contact">
        <h3 class="title1 text-center">Liên hệ</h3>
        <div class="container-fluid">
            <div class="map-grid">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509687.090753893!2d-123.76387427440008!3d37.18697025540024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C+USA!5e0!3m2!1sen!2sin!4v1491201047627"
                    style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="w3layouts-contact-pos">
            <div class="w3layouts-contact-pos-grid">
                <span class="field-icon fa fa-map-marker" aria-hidden="true"></span>
                <ul>
                    <li>220/91 Nguyễn Văn Khối, Phường 9</li>
                    <li>Quận Gò Vấp,</li>
                    <li>TP Hồ Chí Minh.</li>
                </ul>
            </div>
            <div class="w3layouts-contact-pos-grid sr1">
                <span class="field-icon fa fa-phone" aria-hidden="true"></span>
                <ul>
                    <li>&nbsp;</li>
                    <li>035 618 5047</li>
                    <li>&nbsp;</li>
                </ul>
            </div>
            <div class="w3layouts-contact-pos-grid sr2">
                <span class="field-icon fa fa-envelope-o fa-lg" aria-hidden="true"></span>
                <ul>
                    <li>&nbsp;</li>
                    <li>
                        <a href="mailto:smartvietsolution@gmail.com">smartvietsolution@gmail.com</a>
                    </li>
                    <li>&nbsp;</li>
                </ul>
            </div>
            <div class="w3layouts-contact-pos-grid">
                <span class="field-icon fa fa-clock-o" aria-hidden="true"></span>
                <ul>
                    <li>Thứ 2-Thứ 6:
                        <span> 07:00 AM-22:00 PM</span>
                    </li>
                    <li>Thứ 7:
                        <span>06:00 AM-23:00 PM</span>
                    </li>
                    <li>Chủ nhật:
                        <span>06:00 AM-23:00 PM</span>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="contact-form">
            <div class="container">

                <form action="#">
                    <div class="contact-left-form">
                        <div class="field-input">
                            <span class="field-icon fa fa-user" aria-hidden="true"></span>
                            <input type="text" placeholder="Họ tên" name="name" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="field-input">
                            <span class="field-icon  fa fa-envelope-o fa-lg" aria-hidden="true"></span>
                            <input type="email" placeholder="Email" name="email" class="email" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="field-input">
                            <span class="field-icon  fa fa-phone" aria-hidden="true"></span>
                            <input type="text" class="Số điện thoại" placeholder="phone" name="phone" required="">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <textarea placeholder="Lời nhắn" name="message" required=""></textarea>
                    <button class="btn1">Gửi</button>
                </form>
            </div>
        </div>
    </div>
    <!-- //Contact-form -->
    <!-- footer -->
    <div class="footer-main text-center">
        <div class="footer-grid">
            <a href="#">
                <span class="fa fa-facebook-official icon" aria-hidden="true"></span>
                <h6>like on facebook</h6>
            </a>
        </div>
        <div class="footer-grid">
            <a href="#">
                <span class="fa fa-twitter-square icon" aria-hidden="true"></span>
                <h6>follow on twitter</h6>
            </a>
        </div>
        <div class="footer-grid">
            <a href="#">
                <span class="fa fa-youtube-square icon" aria-hidden="true"></span>
                <h6>watch on youtube</h6>
            </a>
        </div>
        <div class="footer-grid">
            <a href="#contact" class="scroll">
                <span class="fa fa-question-circle icon" aria-hidden="true"></span>
                <h6>Any qusetions?</h6>
            </a>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-copy text-center">
                <p>© 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt</p>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- js -->
    <script src="{{ asset('templates/fitness-freak/js/jquery-2.2.3.min.js') }}"></script>
    <!-- //js -->
    <!-- nav dropdown -->
    <script>
        $('ul.dropdown-menu li').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
    </script>
    <!-- //nav dropdown -->
    <!-- gallery -->
    <script src="{{ asset('templates/fitness-freak/js/smoothbox.jquery2.js') }}"></script>
    <!-- //gallery -->
    <!-- banner Slider script  -->
    <script src="{{ asset('templates/fitness-freak/js/responsiveslides.min.js') }}"></script>
    <script>
        $(function() {
            $("#slider, #slider1").responsiveSlides({
                auto: true,
                nav: false,
                speed: 1500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <!-- //banner Slider-JavaScript -->
    <!-- Team FlexSlider -->
    <script defer src="{{ asset('templates/fitness-freak/js/jquery.flexslider.js') }}"></script>
    <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- End- Flexslider-script -->
    <!-- Testimonials owl carousel -->
    <script src="{{ asset('templates/fitness-freak/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds
                autoPlay: false,
                items: 3,
                itemsDesktop: [991, 2],
                itemsDesktopSmall: [414, 4]

            });
        });
    </script>
    <!-- //Testimonials owl carousel -->
    <!-- start-smooth-scrolling -->
    <script src="{{ asset('templates/fitness-freak/js/move-top.js') }}"></script>
    <script src="{{ asset('templates/fitness-freak/js/easing.js') }}"></script>
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
    <script src="{{ asset('templates/fitness-freak/js/SmoothScroll.min.js') }}"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <script src="{{ asset('templates/fitness-freak/js/numscroller-1.0.js') }}"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('templates/fitness-freak/js/bootstrap.js') }}"></script>
</body>

</html>