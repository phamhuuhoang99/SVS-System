<!DOCTYPE html>
<html lang="en">

<head>
    <title>Car Clean</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Car Services Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!--// Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="{{ asset('templates/car-clean/css/bootstrap.css') }}">
    <!-- Bootstrap-Core-CSS -->
    <link href="{{ asset('templates/car-clean/css/JiSlider.css') }}" rel="stylesheet">
    <!-- //banner-slider -->
    <link rel="stylesheet" href="{{ asset('templates/car-clean/css/smoothbox.css') }}" type='text/css' media="all" />
    <!-- gallery lightbox -->
    <link rel="stylesheet" href="{{ asset('templates/car-clean/css/style.css') }}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="{{ asset('templates/car-clean/css/fontawesome-all.css') }}">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dr+Sugiyama&amp;subset=latin-ext" rel="stylesheet">
    <!-- //Web-Fonts -->

</head>

<body>
    <!-- banner & header section -->
    <div class="main">
        <!-- header -->
        <header>
            <div class="container-fluid">
                <div class="row header-w3ls-top pt-lg-5 pt-md-4 pt-3 px-lg-5 px-3">
                    <div class="col-xl-10 col-md-9 col-sm-8 col-6 logo">
                        <h1>
                            <a href="{{ route('temp.car-clean.index') }}">
                                <span>C</span>ar
                                <span>S</span>ervices
                            </a>
                        </h1>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-4 col-6 menu-agile text-center">
                        <a href="#menu" id="toggle">
                            <span></span>
                        </a>
                        <div id="menu" class="menustyles">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{ route('temp.car-clean.index') }}">Trang Chủ</a>
                                </li>
                                <li>
                                    <a href="#about" class="scroll">Về Chúng Tôi</a>
                                </li>
                                <li>
                                    <a href="#services" class="scroll">Dịch Vụ</a>
                                </li>
                                <li>
                                    <a href="#team" class="scroll">Đội Ngũ</a>
                                </li>
                                <li>
                                    <a href="#gallery" class="scroll">Bộ Sưu Tập</a>
                                </li>
                                <li>
                                    <a href="#testi" class="scroll">Đánh Giá Khách Hàng</a>
                                </li>
                                <li>
                                    <a href="#contact" class="scroll">Liên Hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- //header -->
        <!-- banner -->
        <div class="banner-silder">
            <div id="JiSlider" class="jislider">
                <ul>
                    <li>
                        <div class="banner-top banner-top1">
                            <div class="container">
                                <div class="banner-info">
                                    <h3 class="name text-white text-uppercase text-center">
                                        <span class="name-part w3l-text2">Chào mừng</span>
                                        <span class="name-part w3l-text1">Bạn</span>
                                        <span class="name-part w3l-text3">Cùng trải nghiệm dịch vụ rửa và chăm sóc
                                            <label>Của</label> Chúng tôi</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner-top banner-top2">
                            <div class="container">
                                <div class="banner-info">
                                    <h3 class="name text-white text-uppercase text-center">
                                        <span class="name-part w3l-text1">Chúng tôi</span>
                                        <span class="name-part w3l-text2">yêu</span>
                                        <span class="name-part w3l-text3"> Xe của bạn giống như cách
                                            <label>bạn</label> xe của mình</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner-top banner-top3">
                            <div class="container">
                                <div class="banner-info">
                                    <h3 class="name text-white text-uppercase text-center">
                                        <span class="name-part w3l-text2">Chào mừng</span>
                                        <span class="name-part w3l-text1">Bạn</span>
                                        <span class="name-part w3l-text3">Cùng trải nghiệm dịch vụ rửa và chăm sóc
                                            <label>Của</label> Chúng tôi</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner-top banner-top4">
                            <div class="container">
                                <div class="banner-info">
                                    <h3 class="name text-white text-uppercase text-center">
                                        <span class="name-part w3l-text1">Chúng tôi</span>
                                        <span class="name-part w3l-text2">yêu</span>
                                        <span class="name-part w3l-text3"> Xe của bạn giống như cách
                                            <label>bạn</label> xe của mình</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //banner -->
    </div>
    <!-- banner & header section -->

    <!-- about -->
    <div class="about py-5" id="about">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">Về Chúng Tôi
                <span></span>
            </h3>
            <div class="row mb-5">
                <div class="col-lg-6 aboutright ml-2 mr-sm-0 mr-3">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="{{ asset('templates/car-clean/images/g1.jpg') }}"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="{{ asset('templates/car-clean/images/g4.jpg') }}"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="{{ asset('templates/car-clean/images/g3.jpg') }}"
                                    alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 aboutleft ml-xl-4">
                    <h4 class="about-left-agile text-dark text-capitalize mb-2">Chuỗi Rửa Và Chăm Sóc Xe
                        <span>Hàng Đầu</span>
                    </h4>
                    <p class="border-left pl-3">Chúng tôi cam kết mang đến sự hài lòng cho khách hàng về chất lượng dịch
                        vụ, giá thành cạnh tranh với hệ thống đặt hẹn thông minh cùng đội ngũ nhân viên chuyên nghiệp.
                    </p>
                    <h4 class="about-left-agile text-dark text-capitalize mt-4 mb-2">mang lại vẻ ngoài và nội thất
                        <span>sạch sẽ,</span>
                        <span>toả sáng</span>!
                    </h4>
                    <p>Chúng tôi luôn đề cao sứ mệnh đem đến cho khách hàng những trải nghiệm thân thiện nhất khi rửa xe
                        truyền thống cũng như kết hợp với các dịch vụ chăm sóc xe ô tô chuyên nghiệp khác.</p>
                </div>
            </div>
        </div>
    </div>
    <!--//about-->

    <!-- about bottom -->
    <div class="about-bottom-wthree py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="row py-4 posi-w3ls-bottom">
                <div class="col-lg-4 bottom-w3ls1">
                    <h4 class="text-white mb-4">Đội Ngũ Nhân Viên</h4>
                    <p>Chúng tôi sở hữu đội ngũ nhân viên thân thiện và chuyên nghiệp.</p>
                    <i class="fas fa-users text-white"></i>
                </div>
                <div class="col-lg-4 bottom-w3ls1 my-lg-0 my-5">
                    <h4 class="text-white mb-4">Chất Lượng Hoàn Hảo</h4>
                    <p>Hệ thống máy rửa xe tự động, dụng cụ và dung dịch chăm sóc chất lượng.</p>
                    <i class="fas fa-tachometer-alt text-white"></i>
                </div>
                <div class="col-lg-4 bottom-w3ls1">
                    <h4 class="text-white mb-4">Cam Kết Chất Lượng</h4>
                    <p>Cam kết làm khách hàng hài với mỗi dịch vụ của Chúng tôi.</p>
                    <i class="fas fa-american-sign-language-interpreting text-white"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- //about bottom -->

    <!-- gallery -->
    <div class="agileits-services text-center py-5" id="gallery">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">Bộ Sưu Tập
                <span></span>
            </h3>
            <div class="w3ls_gallery_grids">
                <div class="row agileits_w3layouts_gallery_grid">
                    <div class="col-md-4 agileits_w3layouts_gallery_grid1 hover14">
                        <div class="w3_agile_gallery_effect">
                            <a href="{{ asset('templates/car-clean/images/g1.jpg') }}" class="sb"
                                title="Chúng tôi cũng yêu chiếc xe của bạn như bạn">
                                <figure>
                                    <img src="{{ asset('templates/car-clean/images/g1.jpg') }}" alt=" "
                                        class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 agileits_w3layouts_gallery_grid1 hover14 my-md-0 my-2">
                        <div class="w3_agile_gallery_effect">
                            <a href="{{ asset('templates/car-clean/images/g2.jpg') }}" class="sb"
                                title="Chúng tôi cũng yêu chiếc xe của bạn như bạn">
                                <figure>
                                    <img src="{{ asset('templates/car-clean/images/g2.jpg') }}" alt=" "
                                        class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 agileits_w3layouts_gallery_grid1 hover14">
                        <div class="w3_agile_gallery_effect">
                            <a href="{{ asset('templates/car-clean/images/g3.jpg') }}" class="sb"
                                title="Chúng tôi cũng yêu chiếc xe của bạn như bạn">
                                <figure>
                                    <img src="{{ asset('templates/car-clean/images/g3.jpg') }}" alt=" "
                                        class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row agileits_w3layouts_gallery_grid mt-2">
                    <div class="col-md-4 agileits_w3layouts_gallery_grid1 hover14">
                        <div class="w3_agile_gallery_effect">
                            <a href="{{ asset('templates/car-clean/images/g4.jpg') }}" class="sb"
                                title="Chúng tôi cũng yêu chiếc xe của bạn như bạn">
                                <figure>
                                    <img src="{{ asset('templates/car-clean/images/g4.jpg') }}" alt=" "
                                        class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 agileits_w3layouts_gallery_grid1 hover14 my-md-0 my-2">
                        <div class="w3_agile_gallery_effect">
                            <a href="{{ asset('templates/car-clean/images/g1.jpg') }}" class="sb"
                                title="Chúng tôi cũng yêu chiếc xe của bạn như bạn">
                                <figure>
                                    <img src="{{ asset('templates/car-clean/images/g1.jpg') }}" alt=" "
                                        class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 agileits_w3layouts_gallery_grid1 hover14">
                        <div class="w3_agile_gallery_effect">
                            <a href="{{ asset('templates/car-clean/images/g2.jpg') }}" class="sb"
                                title="Chúng tôi cũng yêu chiếc xe của bạn như bạn">
                                <figure>
                                    <img src="{{ asset('templates/car-clean/images/g2.jpg') }}" alt=" "
                                        class="img-fluid" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //gallery -->

    <!-- services -->
    <div class="services py-5" id="services">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">Dịch Vụ
                <span></span>
            </h3>
            <div class="row">
                <div class="col-md-7">
                    <div class="img1 img-grid  d-flex align-items-end justify-content-center p-3">
                        <div class="img_text_w3ls px-4">
                            <h4>Rửa Xe Sạch, An Toàn</h4>
                            <span> </span>
                            <p class="text-white">Phương pháp rửa xe cam kết chất lượng, loại bỏ bụi bẩn, sình lầy bám
                                trên xe và gầm xe nhưng đảm bảo an toàn 100% cho lớp sơn xe.</p>
                            <button type="button" class="btn btn-primary seri-w3ls text-white my-4" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                Xem Thêm
                                <i class="fas fa-long-arrow-alt-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 px-md-0 my-md-0 mt-3">
                    <div class="img1 img2 img-grid  d-flex align-items-end justify-content-center p-3">
                        <div class="img_text_w3ls px-3">
                            <h4>Đánh Bóng Xe Hơi</h4>
                            <span> </span>
                            <p class="text-white">Kỹ thuật đánh bóng 5 bước chuyên nghiệp mang lại vẻ ngoài như xe mới.
                            </p>
                            <button type="button" class="btn btn-primary seri-w3ls text-white my-4" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                Xem Thêm
                                <i class="fas fa-long-arrow-alt-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-7">
                    <div class="img1 img3 img-grid  d-flex align-items-end justify-content-center p-3">
                        <div class="img_text_w3ls px-4">
                            <h4>Vệ Sinh Nội Thất</h4>
                            <span> </span>
                            <p class="text-white">Làm sạch nội thất ô tô, bảo dưỡng ghế, giặt ghế.</p>
                            <button type="button" class="btn btn-primary seri-w3ls text-white my-4" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                Xem Thêm
                                <i class="fas fa-long-arrow-alt-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 px-md-0 my-md-0 mt-3">
                    <div class="img1 img4 img-grid  d-flex align-items-end justify-content-center p-3">
                        <div class="img_text_w3ls px-3">
                            <h4>Vệ Sinh Khoang Máy</h4>
                            <span> </span>
                            <p class="text-white">Chúng tôi cung cấp dịch vụ vệ sinh khoang máy, dọn khoang máy chất
                                lượng giá rẻ nhất tại TPHCM.</p>
                            <button type="button" class="btn btn-primary seri-w3ls text-white my-4" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                Xem Thêm
                                <i class="fas fa-long-arrow-alt-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 my-md-0 mb-3">
                    <div class="img1 img5 img-grid  d-flex align-items-end justify-content-center p-3">
                        <div class="img_text_w3ls px-3">
                            <h4>Khử Mùi Hôi, Mùi Thuốc Lá</h4>
                            <span> </span>
                            <p class="text-white">Chúng tôi có công nghệ khử mùi thuốc lá, mùi hôi xe tuyệt đối.</p>
                            <button type="button" class="btn btn-primary seri-w3ls text-white my-4" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                Xem Thêm
                                <i class="fas fa-long-arrow-alt-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 px-md-0">
                    <div class="img1 img6 img-grid  d-flex align-items-end justify-content-center p-3">
                        <div class="img_text_w3ls px-4">
                            <h4>Phủ Ceramic</h4>
                            <span> </span>
                            <p class="text-white">Cam kết bảo hành chất lượng ceramic, hiệu ứng lá sen, hiệu ứng gương
                                trên xe, giúp lớp sơn xe chống trầy nhẹ, chống tia UV, và luôn sáng bóng như xe mới.</p>
                            <button type="button" class="btn btn-primary seri-w3ls text-white my-4" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                Xem Thêm
                                <i class="fas fa-long-arrow-alt-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Car Wash</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('templates/car-clean/images/g1.jpg') }}" alt=" " class="img-fluid">
                    <h5 class="text-capitalize my-3">Chúng tôi cung cấp dịch vụ tốt nhất</h5>
                    <p>Chúng tôi cam kết mang đến sự hài lòng cho khách hàng về chất lượng dịch vụ, giá thành cạnh tranh
                        với hệ thống đặt hẹn thông minh cùng đội ngũ nhân viên chuyên nghiệp.</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal -->
    <!-- //services -->

    <!-- team -->
    <div class="team py-5" id="team">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">Đội Ngũ
                <span></span>
            </h3>
            <div class="row team-bottom">
                <div class="col-sm-4 team-grid">
                    <img src="{{ asset('templates/car-clean/images/team1.jpg') }}" class="img-fluid img-thumbnail"
                        alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Hoàng Nhân</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f f1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter f2"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g f3"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 team-grid mt-sm-0 mt-3">
                    <img src="{{ asset('templates/car-clean/images/team2.jpg') }}" class="img-fluid img-thumbnail"
                        alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Anh Thư</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f f1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter f2"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g f3"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 team-grid  mt-sm-0 mt-3">
                    <img src="{{ asset('templates/car-clean/images/team4.jpg') }}" class="img-fluid img-thumbnail"
                        alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Thanh Thúy</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f f1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter f2"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g f3"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row team-bottom mt-sm-4 mt-3">
                <div class="col-sm-4 team-grid">
                    <img src="{{ asset('templates/car-clean/images/team3.jpg') }}" class="img-fluid img-thumbnail"
                        alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Phạm Huệ</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f f1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter f2"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g f3"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 team-grid mt-sm-0 mt-3">
                    <img src="{{ asset('templates/car-clean/images/team5.jpg') }}" class="img-fluid img-thumbnail"
                        alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Tấn Hưng</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f f1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter f2"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g f3"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 team-grid mt-sm-0 mt-3">
                    <img src="{{ asset('templates/car-clean/images/team6.jpg') }}" class="img-fluid img-thumbnail"
                        alt="">
                    <div class="caption">
                        <div class="team-text">
                            <h4>Mỹ Duyên</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f f1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter f2"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g f3"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //team -->

    <!-- iframe video -->
    <div class="video-w3ls bg-dark py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="row">
                <div class="col-lg-6 w3ls-agile-video">
                    <iframe src="https://player.vimeo.com/video/16307238"></iframe>
                </div>
                <div class="col-lg-6 w3ls-agile-video-right mt-lg-0 mt-4">
                    <h4 class="about-left-agile text-white text-capitalize mb-2">Ưu Đãi Hơn Với Các Combo
                        <span> Chăm Sóc Xe</span>
                    </h4>
                    <p>Chúng tôi cam kết mang đến sự hài lòng cho khách hàng về chất lượng dịch vụ, giá thành cạnh tranh
                        với hệ thống đặt hẹn thông minh cùng đội ngũ nhân viên chuyên nghiệp.</p>
                    <p>Hơn thế nữa, chúng tôi luôn đề cao sứ mệnh đem đến cho khách hàng những trải nghiệm thân thiện
                        nhất khi rửa xe truyền thống cũng như kết hợp với các dịch vụ chăm sóc xe ô tô chuyên nghiệp
                        khác.</p>
                    <button type="button" class="btn btn-primary seri-w3ls text-white my-4" data-toggle="modal"
                        data-target="#exampleModalCenter">
                        Xem Thêm
                        <i class="fas fa-long-arrow-alt-right ml-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- //iframe video -->

    <!-- testimonials -->
    <div class="testimonials py-5" id="testi">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">Khánh Hàng Đánh Giá
                <span></span>
            </h3>
            <div class="w3_testimonials_grids w3_testimonials_grids">
                <div class="sreen-gallery-cursual">
                    <div id="owl-demo" class="owl-carousel">
                        <div class="row item-owl">
                            <div class="col-md-4 img-agile ml-4">
                                <img src="{{ asset('templates/car-clean/images/te1.jpg') }}" class="img-fluid" alt="" />
                            </div>
                            <div class="col-md-7 test-review test-tooltip1">
                                <h6 class="mb-4">Thanh Thùy</h6>
                                <p class="quotew3ls">
                                    <i class="fas fa-quote-left"></i> Mình làm ở gần đây, xe để ngoài đường lâu ngày lớp
                                    sơn bị oxy hoá với có nhiều vết trầy, bị cả hologram nữa. Cho xe đi rửa với đánh
                                    bóng ở đây.
                                    <i class="fas fa-quote-right"></i>
                                </p>
                                <ul class="list-unstyled mt-4">
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star-half-alt"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row item-owl">
                            <div class="col-md-4 img-agile ml-4">
                                <img src="{{ asset('templates/car-clean/images/te2.jpg') }}" class="img-fluid" alt="" />
                            </div>
                            <div class="col-md-7 test-review test-tooltip1">
                                <h6 class="mb-4">Mơ Nguyễn</h6>
                                <p class="quotew3ls">
                                    <i class="fas fa-quote-left"></i> Rửa và chăm sóc xe rất chuyên nghiệp, đội ngũ kỹ
                                    thuật viên có tay nghề. Điểm 10 cho chất lượng. Mình làm dịch vụ tẩy ố kính và vệ
                                    sinh khoang máy ở đây. Sau khi tẩy kính bị ố xong thì trong như xe máy, khoang máy
                                    sạch mới.
                                    <i class="fas fa-quote-right"></i>
                                </p>
                                <ul class="list-unstyled mt-4">
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star-half-alt"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row item-owl">
                            <div class="col-md-4 img-agile ml-4">
                                <img src="{{ asset('templates/car-clean/images/te3.jpg') }}" class="img-fluid" alt="" />
                            </div>
                            <div class="col-md-7 test-review test-tooltip1">
                                <h6 class="mb-4">My My</h6>
                                <p class="quotew3ls">
                                    <i class="fas fa-quote-left"></i> Rửa và chăm sóc xe rất chuyên nghiệp, đội ngũ kỹ
                                    thuật viên có tay nghề. Điểm 10 cho chất lượng. Mình làm dịch vụ tẩy ố kính và vệ
                                    sinh khoang máy ở đây. Sau khi tẩy kính bị ố xong thì trong như xe máy, khoang máy
                                    sạch mới.
                                    <i class="fas fa-quote-right"></i>
                                </p>
                                <ul class="list-unstyled mt-4">
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star-half-alt"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonials -->

    <!-- contact -->
    <div class="contact py-5" id="contact">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize text-white text-center pb-3 mb-sm-5 mb-4">Liên Hệ
                <span></span>
            </h3>
            <div class="d-flex">
                <div class="col-lg-6 contact-right">
                    <div class="w3l-agile">
                        <form action="#">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Họ Tên" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Chủ Đề" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone number" placeholder="Số Điện Thoại" class="form-control"
                                    required="">
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Lời Nhắn" class="form-control"
                                    required=""></textarea>
                            </div>
                            <input type="submit" value="Gửi">
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 contact-left mt-lg-0 mt-5">
                    <div class="w3l-agile ">
                        <div class="address">
                            <h4 class="text-white">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>Địa chỉ
                            </h4>
                            <p>Quận Gò Vấp, Hồ Chí Minh.</p>
                        </div>
                        <div class="phone my-4">
                            <h4 class="text-white">
                                <i class="fa fa-phone" aria-hidden="true"></i>Số điện thoại
                            </h4>
                            <p>035 618 5047.</p>
                        </div>
                        <div class="email">
                            <h4 class="text-white">
                                <i class="fas fa-envelope"></i>E-mail
                            </h4>
                            <p>
                                <a href="mailto:info@example.com">smartvietsolution@gmail.com.</a>
                            </p>
                        </div>
                        <!-- map -->
                        <div class="map-w3ls mt-4">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22702.22744502486!2d11.113366067229226!3d44.662878362361056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fc3eca9065c15%3A0x12ec8a03aadae866!2s40019+Sant&#39;Agata+Bolognese+BO%2C+Italy!5e0!3m2!1sen!2sin!4v1451281303075"
                                allowfullscreen></iframe>
                        </div>
                        <!-- //map -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //contact -->
    <!-- footer -->
    <div class="footer-bot py-5 text-center">
        <div class="container">
            <div class="logo2">
                <h2>
                    <a href="index.html">
                        <span>C</span>ar
                        <span>S</span>ervices
                    </a>
                </h2>
            </div>
            <!-- social icons -->
            <div class="agileinfo_social_icons my-4">
                <ul class="agileits_social_list list-unstyled">
                    <li>
                        <a href="#" class="w3_agile_facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="mx-2">
                        <a href="#" class="agile_twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="w3_agile_dribble">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>
                    <li class="ml-2">
                        <a href="#" class="w3_agile_google">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- social icons -->
            <!-- copyright -->
            <p class="copyright-w3ls">
                © 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt
            </p>
            <!-- //copyright -->
        </div>
    </div>
    <!-- //footer -->


    <!-- Js files -->
    <!-- JavaScript -->
    <script src="{{ asset('templates/car-clean/js/jquery-2.2.3.min.js') }}"></script>
    <!-- <script src="{{ asset('templates/car-clean/js/jquery-1.11.3.min.js') }}"></script> -->
    <!-- Default-JavaScript-File -->
    <script src="{{ asset('templates/car-clean/js/bootstrap.js') }}"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->

    <!--banner-slider-->
    <script src="{{ asset('templates/car-clean/js/JiSlider.js') }}"></script>
    <script>
        $(window).load(function() {
            $('#JiSlider').JiSlider({
                color: '#fff',
                start: 3,
                reverse: true
            }).addClass('ff')
        })

    </script>
    <!-- //banner-slider -->

    <!-- smooth scrolling -->
    <script src="{{ asset('templates/car-clean/js/SmoothScroll.min.js') }}"></script>
    <!-- //smooth scrolling -->

    <!-- move-top -->
    <script src="{{ asset('templates/car-clean/js/move-top.js') }}"></script>
    <!-- easing -->
    <script src="{{ asset('templates/car-clean/js/easing.js') }}"></script>
    <!--  necessary snippets for few javascript files -->
    <script src="{{ asset('templates/car-clean/js/car_services.js') }}"></script>
    <!-- banner text -->
    <script src="{{ asset('templates/car-clean/js/text.js') }}"></script>
    <!-- menu -->
    <script src="{{ asset('templates/car-clean/js/menu.js') }}"></script>
    <!-- lightbox -->
    <script src="{{ asset('templates/car-clean/js/smoothbox.jquery2.js') }}"></script>

    <!-- testimonials -->
    <!-- required-js-files-->
    <link href="{{ asset('templates/car-clean/css/owl.carousel.css') }}" rel="stylesheet">
    <script src="{{ asset('templates/car-clean/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items: 1,
                lazyLoad: true,
                autoPlay: false,
                navigation: true,
                navigationText: true,
                pagination: true,
            });
        });

    </script>
    <!-- //required-js-files-->
    <!-- //Js files -->

</body>

</html>
