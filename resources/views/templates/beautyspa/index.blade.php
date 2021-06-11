<!DOCTYPE html>
<html>

<head>
    <title>Beauty Spa</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Beauty Spa Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <!-- icon -->
    <link rel="icon" href={{ URL::asset('favicon.png') }} type="image/png">
    <!-- Custom-Files -->
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href={{ URL::asset('templates/beautyspa/css/bootstrap.css') }}>
    <!-- pop up box -->
    <link href={{ URL::asset('templates/beautyspa/css/popuo-box.css') }} rel="stylesheet" type="text/css" media="all" />
    <!-- gallery light box -->
    <link href={{ URL::asset('templates/beautyspa/css/lsb.css') }} rel="stylesheet" type="text/css" media="all">
    <!-- Style-CSS -->
    <link rel="stylesheet" href={{ URL::asset('templates/beautyspa/css/style.css') }} type="text/css" media="all" />
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href={{ URL::asset('templates/beautyspa/css/fontawesome-all.css') }}>
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Paytone+One&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <!-- //Web-Fonts -->


</head>

<body data-spy="scroll" data-target=".fixed-top">

    <div id="home">
        <!-- header -->
        <header>
            <!-- navbar -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand text-white font-weight-bold" href={{ route('temp.beautyspa.index') }}>
                    <span>B</span>eauty
                    <span>S</span>pa</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-center mr-xl-5 mt-lg-0 mt-3">
                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link scroll" href="#home">Trang Chủ
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link scroll" href="#about">Về SVS</a>
                        </li>
                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link scroll" href="#treat">Trị Liệu</a>
                        </li>
                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link scroll" href="#services">Dịch Vụ</a>
                        </li>
                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link scroll" href="#pricing">Bảng giá</a>
                        </li>
                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link scroll" href="#team">Đội Ngũ</a>
                        </li>
                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link scroll" href="#gallery">Bộ Sưu Tập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#contact">Liên Hệ</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- //navbar ends here -->
        </header>
        <!-- //header -->

        <!-- banner -->
        <div class="banner-w3l">
            <div class="container">
                <div class="banner-left-wthree">
                    <div class="banner-text-effectw3ls">
                        <div class="center-outer">
                            <div class="center-inner">
                                <h1>Beauty Spa</h1>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-dark text-capitalize sec-text-w3ls pt-lg-5 pt-4 pb-sm-4 pb-3">Thư giãn
                        <span>Cuộc sống</span>
                    </h4>
                    <p class="text-capitalize mb-sm-4 mb-3">“Nơi sức khỏe và hạnh phúc trở về”
                    </p>
                    <a href="#small-dialog1" class="play-icon popup-with-zoom-anim btn mt-md-4 mt-3"
                        title="Play Video">Xem Video</a>
                </div>
            </div>
        </div>
        <!-- popup video -->
        <div id="small-dialog1" class="mfp-hide">
            <div class="agileits_modal_body">
                <iframe src="https://player.vimeo.com/video/45062348"></iframe>
            </div>
        </div>
        <!-- //popup video -->
    </div>
    <!-- //banner -->

    <!-- about -->
    <div class="bottom-agile py-5" id="about">
        <div class="container py-xl-5 py-lg-3">
            <div class="about-top p-xl-5 p-sm-4 p-3 text-center">
                <h3>Trải nghiệm dịch vụ</h3>
                <p class="text-dark mt-2 mb-4 mx-auto" style="font-weight: bold">Tại Spa khách hàng sẽ được trải nghiệm
                    các dịch vụ chăm sóc sức khoẻ hàng đầu, đồng thời mang lại sự thư giãn thực sự cho khách hàng với
                    những bài massage ấn huyệt ứng dụng khí công và y học cổ truyền do chuyên gia có trên 25 năm kinh
                    nghiệm trực tiếp hướng dẫn.</p>
                <img src={{ asset('templates/beautyspa/images/bo2.png') }} alt="" class="img-fluid">
            </div>
            <div class="row about-bottom-w3ls mt-md-5 mt-4">
                <div class="col-md-4 grids-w3lsm">
                    <div class="top-head-abagile">
                        <h3 class="border-left text-capitalize text-dark pl-4 mb-4">Chăm sóc
                            <span>Da</span>
                        </h3>
                    </div>
                    <p> Chăm sóc, phục hồi và chống lão hóa da mặt bằng Mỹ phẩm cao cấp nội địa Nhật</p>
                </div>
                <div class="col-md-4 grids-w3lsm my-md-0 my-4">
                    <div class="top-head-abagile">
                        <h3 class="border-left text-capitalize text-dark pl-4 mb-4">massage
                            <span> Trị Liệu</span>
                        </h3>
                    </div>
                    <p> Massage trị liệu sẽ giúp bạn phục hồi sức khỏe & tái sinh sức sống cho tâm hồn</p>
                </div>
                <div class="col-md-4 grids-w3lsm">
                    <div class="top-head-abagile">
                        <h3 class="border-left text-capitalize text-dark pl-4 mb-4">Gội Đầu
                            <span>Thảo dược</span>
                        </h3>
                    </div>
                    <p>Sản phẩm nội địa Nhật với công thức nuôi dưỡng làn da & xương khớp hiệu quả.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- //about -->

    <!-- treatments -->
    <div class="treat-agile" id="treat" style="padding-top:30px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 left-treat-w3l pb-5">
                    <div class="py-xl-5 py-lg-3">
                        <h3 class="text-capitalize font-weight-bold title mb-4">Phương pháp trị liệu đặc biệt</h3>
                        <p></p>
                        <ul class="list-unstyled mt-4">
                            <li>
                                <i class="far fa-hand-point-right pr-xl-3 pr-2"></i>Giữ cho làn da của bạn rạng rỡ trong
                                mùa đông này.
                            </li>
                            <li class="my-3">
                                <i class="far fa-hand-point-right pr-xl-3 pr-2"></i>Được tạo ra từ thảo mộc thiên nhiên
                                - chiết xuất từ ​​rễ nhân sâm.
                            </li>
                            <li>
                                <i class="far fa-hand-point-right pr-xl-3 pr-2"></i>Cung cấp phương pháp điều trị và các
                                sản phẩm an toàn, vệ sinh.
                            </li>
                            <li class="my-3">
                                <i class="far fa-hand-point-right pr-xl-3 pr-2"></i>Số lượng sản phẩm từ BB Wellness &
                                Spa
                            </li>
                            <li>
                                <i class="far fa-hand-point-right pr-xl-3 pr-2"></i>Giữ cho làn da của bạn rạng rỡ trong
                                mùa đông này.
                            </li>
                            <li class="my-3">
                                <i class="far fa-hand-point-right pr-xl-3 pr-2"></i>Cung cấp các phương pháp điều trị và
                                sản phẩm an toàn.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 right-treat-w3l text-lg-right text-center px-lg-0">
                    <img src={{ asset('templates/beautyspa/images/treat3.png') }} alt="" class="img-fluid">
                </div>
            </div>
        </div>

    </div>
    <!-- //treatments -->

    <!-- middle -->
    <div class="middle-sec text-center py-5 ">
        <div class="container py-xl-5 py-md-3">
            <h4 class="text-uppercase text-white">Cải Thiện Chất Lượng Cuộc Sống Của Bạn</h4>
            <a href="#contact" class="scroll btn mt-sm-5 mt-4">Liên Hệ</a>
        </div>
    </div>
    <!-- //middle -->

    <!-- services -->
    <div class="services-w3ls py-5" id="services">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="text-capitalize font-weight-bold text-center title mb-sm-5 mb-4">dịch vụ nổi bật</h3>
            <div class="row text-sm-left text-center">
                <div class="col-lg-3 col-sm-6 service-grid">
                    <img src={{ asset('templates/beautyspa/images/s1.jpg') }} alt="" class="img-fluid">
                    <h4 class="text-capitalize text-dark my-sm-4 my-3">đá nóng</h4>
                    {{-- <p>Negrar èla storia di uoini donne dediti alla Nullam dui dolor,
                        sagittis ut nte eget.</p> --}}
                </div>
                <div class="col-lg-3 col-sm-6 service-grid mt-sm-0 mt-4">
                    <img src={{ asset('templates/beautyspa/images/s2.jpg') }} alt="" class="img-fluid">
                    <h4 class="text-capitalize text-dark  my-sm-4 my-3">dược liệu</h4>
                    {{-- <p>Negrar èla storia di uoini donne dediti alla Nullam dui dolor,
                        sagittis ut nte eget.</p> --}}
                </div>
                <div class="col-lg-3 col-sm-6 service-grid mt-lg-0 mt-sm-5 mt-4">
                    <img src={{ asset('templates/beautyspa/images/s3.jpg') }} alt="" class="img-fluid">
                    <h4 class="text-capitalize text-dark  my-sm-4 my-3">Đắp mặt nạ</h4>
                    {{-- <p>Negrar èla storia di uoini donne dediti alla Nullam dui dolor,
                        sagittis ut nte eget.</p> --}}
                </div>
                <div class="col-lg-3 col-sm-6 service-grid mt-lg-0 mt-sm-5 mt-4">
                    <img src={{ asset('templates/beautyspa/images/s4.jpg') }} alt="" class="img-fluid">
                    <h4 class="text-capitalize text-dark  my-sm-4 my-3">massages</h4>
                    {{-- <p>Negrar èla storia di uoini donne dediti alla Nullam dui dolor,
                        sagittis ut nte eget.</p> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- //services -->

    <!-- video -->
    <div class="video-agileits pb-5">
        <div class="container pb-xl-5 pb-lg-3">
            <div class="agileits_modal_body2">
                <iframe src="https://player.vimeo.com/video/123708006"></iframe>
            </div>
            <h3 class="text-capitalize font-weight-bold text-center title mb-4">Giới thiệu Spa</h3>
            <p class="text-white text-center">Spa sẽ đáp ứng đa dạng nhu cầu của bạn từ thư giãn đến điều trị bệnh lý.
                Đội ngũ của Spa luôn tận tâm, hết lòng vì sự hài lòng, sức khoẻ và sắc đẹp của khách hàng.</p>
        </div>
    </div>
    <!-- //video -->

    <!-- price-->
    <div class="price-sec py-5" id="pricing" style="padding-top: 30px">
        <div class="container pb-xl-5 pb-lg-3">
            <h3 class="text-capitalize font-weight-bold text-center title mb-sm-5 mb-4">Bảng Giá</h3>
            <div class="inner_sec_info_agile_w3_info">
                <div class="row price-grid-main">
                    <div class="col-lg-4 price-info">
                        <div class="prices">
                            <div class="prices-top">
                                <h3 class="text-center text-capitalize text-white pt-4">750.000đ
                                    <span>Mỗi ngày</span>
                                </h3>
                            </div>
                            <div class="prices-bottom text-center border p-4">
                                <div class="prices-h border-bottom pb-4">
                                    <p class="font-weight-bold">1 Người</p>
                                </div>
                                <ul class="mt-4">
                                    <li>Trang điểm</li>
                                    <li class="my-3">Nâng cơ mặt</li>
                                    <li>Làm móng</li>
                                    <li class="mt-3">Massage</li>
                                    <li class="my-3">Trẻ hóa da</li>
                                    <li>Cắt tóc</li>
                                    <li class="my-3">Chống lão hóa</li>
                                    <li>Giảm nhăn</li>
                                </ul>
                                <a href="#" data-toggle="modal" data-target="#myModal1" class="button mt-4">Đăng Ký</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 price-info my-lg-0 my-5">
                        <div class="prices">
                            <div class="prices-top">
                                <h3 class="text-center text-capitalize text-white pt-4">500.000đ
                                    <span>mỗi ngày</span>
                                </h3>
                            </div>
                            <div class="prices-bottom text-center border p-4">
                                <div class="prices-h border-bottom pb-4">
                                    <p class="font-weight-bold">2 Người</p>

                                </div>
                                <ul class="mt-4">
                                    <li>Phục hồi da</li>
                                    <li class="my-3">Nâng cơ mặt</li>
                                    <li>Làm móng</li>
                                    <li class="mt-3">Massage</li>
                                    <li class="my-3">Trẻ hóa da</li>
                                    <li>Cắt tóc</li>
                                    <li class="my-3">Chống lão hóa</li>
                                    <li>Giảm nhăn</li>
                                </ul>
                                <a href="#" data-toggle="modal" data-target="#myModal1" class="button mt-4">Đăng Ký</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 price-info">
                        <div class="prices">
                            <div class="prices-top">
                                <h3 class="text-center text-capitalize text-white pt-4">900.000đ
                                    <span>mỗi ngày</span>
                                </h3>
                            </div>
                            <div class="prices-bottom text-center border p-4">
                                <div class="prices-h border-bottom pb-4">
                                    <p class="font-weight-bold">3 Người</p>

                                </div>
                                <ul class="mt-4">
                                    <li>Trang điểm</li>
                                    <li class="my-3">Nâng cơ mặt</li>
                                    <li>Làm móng</li>
                                    <li class="mt-3">Massage</li>
                                    <li class="my-3">Trẻ hóa da</li>
                                    <li>Cắt tóc</li>
                                    <li class="my-3">Chống lão hóa</li>
                                    <li>Giảm nhăn</li>
                                </ul>
                                <a href="#" data-toggle="modal" data-target="#myModal1" class="button mt-4">Đăng Ký</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal1 -->
    <div class="modal" tabindex="-1" role="dialog" id="myModal1">
        <div class="modal-dialog" role="document">
            <div class="modal-content book-form p-3">
                <div class="modal-header p-3">
                    <h5 class="modal-title">Đăng Ký</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" name="Name" placeholder="Họ tên" class="form-control" required="" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="Email" class="email form-control" placeholder="Email"
                                required="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="Password" class="password form-control" placeholder="Mật Khẩu"
                                id="password1" required="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="Password" class="password form-control"
                                placeholder="Nhập Lại Mật Khẩu" id="password2" required="" />
                        </div>
                        <div class="check-box">
                            <input name="chekbox" type="checkbox" id="brand" value="">
                            <label for="brand">
                                <span></span>Nhớ Mật Khẩu</label>
                        </div>
                        <input type="submit" class="mt-4" value="Đăng Ký">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //modal1 -->
    <!--//price-->

    <!-- accordions -->
    <div class="accord-agile py-5">

        <div class="container py-xl-5 py-lg-3">
            <div class="left-treat-w3l-2 offset-lg-5">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link text-white heading-w3ls" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    DỊCH VỤ TƯ VẤN & TRỊ LIỆU TẠI NHÀ
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                Các bài massage ấn huyệt trị liệu của spa ứng dụng kỹ thuật day ấn huyệt, y học cổ
                                truyền, giúp khách hàng giảm nhức mỏi đáng kể ở các vùng đầu, cổ, vai, gáy, lưng, chân,
                                cánh tay, bàn chân, bàn tay.
                            </div>
                        </div>
                    </div>
                    <div class="card my-4">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed text-white heading-w3ls" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    GÓI CHĂM SÓC SỨC KHỎE "REAL CARE"
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Giúp nhân viên ngăn ngừa các bệnh hay gặp khi ngồi làm việc thường xuyên như: Rối loạn
                                tiền đình, suy nhược thần kinh, mất ngủ, đau đầu, căng thẳng, thoái hoá đốt sống cổ,
                                viêm xoang, hỗ trợ điều trị đau lưng, thoái hoá cột sống, thần kinh toạ.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed text-white heading-w3ls" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    HEAD MASSAGE | SPA SIGNATURE
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                                Head Massage sẽ là “cứu tinh” tuyệt vời cho bạn. Với tác động chính xác vào các vùng
                                huyệt đạo thuộc đầu, cổ, gáy, Head Massage mang lại công dụng kỳ diệu cho sức khỏe của
                                bạn.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //accordions -->

    <!-- team -->
    <div class="team-w3" id="team" style="padding-top: 40px">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="text-capitalize font-weight-bold text-center title  mb-sm-5 mb-4">Đội Ngũ</h3>
            <div class="row w3_services_grids">
                <div class="col-md-3 col-6 w3ls_team_grid">
                    <div class="w3ls_team_grid1 hover15">
                        <figure class="mb-0">
                            <img src={{ asset('templates/beautyspa/images/t1.jpg') }} alt=" " class="img-fluid" />
                        </figure>
                        <div class="w3ls_team_grid1_pos">
                            <ul class="social-icons">
                                <li>
                                    <a href="#" class="icon icon-border fab fa-facebook-f"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon icon-border fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon icon-border fab fa-instagram"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-text-w3ls p-3">
                        <h4 class="text-dark my-2">Lisa Jan</h4>
                        <p>Beauty Expert</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 w3ls_team_grid">
                    <div class="w3ls_team_grid1 hover15">
                        <figure class="mb-0">
                            <img src={{ asset('templates/beautyspa/images/t2.jpg') }} alt=" " class="img-fluid" />
                        </figure>
                        <div class="w3ls_team_grid1_pos">
                            <ul class="social-icons">
                                <li>
                                    <a href="#" class="icon icon-border fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon icon-border fab fa-instagram"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon icon-border fab fa-facebook-f"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-text-w3ls p-3">
                        <h4 class="text-dark my-2">Sally Zoe</h4>
                        <p>Beauty Expert</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 w3ls_team_grid mt-md-0 mt-4">
                    <div class="w3ls_team_grid1 hover15 w3l-tem-k">
                        <figure class="mb-0">
                            <img src={{ asset('templates/beautyspa/images/t3.jpg') }} alt=" " class="img-fluid" />
                        </figure>
                        <div class="w3ls_team_grid1_pos">
                            <ul class="social-icons">
                                <li>
                                    <a href="#" class="icon icon-border fab fa-instagram"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon icon-border fab fa-facebook-f"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon icon-border fab fa-twitter"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-text-w3ls p-3">
                        <h4 class="text-dark my-2">Maria Lily</h4>
                        <p>Beauty Expert</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 w3ls_team_grid mt-md-0 mt-4">
                    <div class="w3ls_team_grid1 hover15 w3l-tem-k-2">
                        <figure class="mb-0">
                            <img src={{ asset('templates/beautyspa/images/t4.jpg') }} alt=" " class="img-fluid" />
                        </figure>
                        <div class="w3ls_team_grid1_pos">
                            <ul class="social-icons">
                                <li>
                                    <a href="#" class="icon icon-border fab fa-pinterest-p"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon icon-border fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="icon icon-border fab fa-instagram"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-text-w3ls p-3">
                        <h4 class="text-dark my-2">Ella Gra</h4>
                        <p>Beauty Expert</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //team -->

    <!-- gallery -->
    <div class="gallery pb-5" id="gallery" style="padding-top: 80px">
        <div class="container-fluid pb-xl-5 pb-lg-3">
            <h3 class="text-capitalize font-weight-bold text-center title  mb-sm-5 mb-4">Bộ sưu tập</h3>
            <div class="row w3layouts_gallery_grids">
                <div class="col-md-3 col-sm-6 w3layouts_gallery_grid p-0">
                    <a href={{ asset('templates/beautyspa/images/g1.jpg') }} class="lsb-preview"
                        data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src={{ asset('templates/beautyspa/images/g1.jpg') }} alt=" " class="img-fluid">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3 class="text-white font-weight-bold">Beauty Spa</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 w3layouts_gallery_grid p-0">
                    <a href={{ asset('templates/beautyspa/images/g2.jpg') }} class="lsb-preview"
                        data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src={{ asset('templates/beautyspa/images/g2.jpg') }} alt=" " class="img-fluid">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3 class="text-white font-weight-bold">Beauty Spa</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 w3layouts_gallery_grid p-0">
                    <a href={{ asset('templates/beautyspa/images/g3.jpg') }} class="lsb-preview"
                        data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src={{ asset('templates/beautyspa/images/g3.jpg') }} alt=" " class="img-fluid">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3 class="text-white font-weight-bold">Beauty Spa</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 w3layouts_gallery_grid p-0">
                    <a href={{ asset('templates/beautyspa/images/g4.jpg') }} class="lsb-preview"
                        data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src={{ asset('templates/beautyspa/images/g4.jpg') }} alt=" " class="img-fluid">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3 class="text-white font-weight-bold">Beauty Spa</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row w3layouts_gallery_grids">
                <div class="col-md-3 col-sm-6 w3layouts_gallery_grid p-0">
                    <a href={{ asset('templates/beautyspa/images/g5.jpg') }} class="lsb-preview"
                        data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src={{ asset('templates/beautyspa/images/g5.jpg') }} alt=" " class="img-fluid">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3 class="text-white font-weight-bold">Beauty Spa</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 w3layouts_gallery_grid p-0">
                    <a href={{ asset('templates/beautyspa/images/g6.jpg') }} class="lsb-preview"
                        data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src={{ asset('templates/beautyspa/images/g6.jpg') }} alt=" " class="img-fluid">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3 class="text-white font-weight-bold">Beauty Spa</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 w3layouts_gallery_grid p-0">
                    <a href={{ asset('templates/beautyspa/images/g7.jpg') }} class="lsb-preview"
                        data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src={{ asset('templates/beautyspa/images/g7.jpg') }} alt=" " class="img-fluid">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3 class="text-white font-weight-bold">Beauty Spa</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 w3layouts_gallery_grid p-0">
                    <a href={{ asset('templates/beautyspa/images/g8.jpg') }} class="lsb-preview"
                        data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src={{ asset('templates/beautyspa/images/g8.jpg') }} alt=" " class="img-fluid">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text">
                                    <h3 class="text-white font-weight-bold">Beauty Spa</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- //gallery -->

    <!-- contact -->
    <div class="mail" id="contact" style="padding-top: 80px">
        <div class="container pb-sm-5 pb-3">
            <h3 class="text-capitalize font-weight-bold text-center title  mb-sm-5 mb-4">Liên Hệ</h3>
            <div class="row agileinfo_mail_grids">
                <div class="col-lg-8 agileinfo_mail_grid_right">
                    <form>
                        <div class="row">
                            <div class="col-md-6 wthree_contact_left_grid pr-md-0">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Họ tên"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-6 wthree_contact_left_grid">
                                <div class="form-group">
                                    <input type="text" name="phone number" class="form-control"
                                        placeholder="Số điện thoại" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Chủ đề"
                                        required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Lời nhắc" class="form-control" required=""></textarea>
                        </div>
                        <div class="submit-buttons">
                            <input type="submit" value="Gửi">
                            <input type="reset" value="Xóa">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50996.31320435244!2d-122.06676498187694!3d36.97949802442312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e441b7c36d549%3A0x52ca104b2ad7f985!2sSanta+Cruz%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1469096018666"
                style="border:0"></iframe>
            <div class="contact-grid-agiles p-xl-5 p-4">
                <h4 class="heading-con-w3ls text-white mb-xl-5 mb-4">Thông tin liên hệ
                    <i class="fas fa-hand-point-down ml-2"></i>
                </h4>
                <ul class="list-unstyled">
                    <li class="text-light">
                        <i class="fas fa-map-marker pr-3 text-dark"></i>Phường 9, Quận Gò Vấp, Hồ Chí Minh
                    </li>
                    <li class="text-light my-3">
                        <i class="fas fa-phone pr-3 text-dark"></i>032 625 4592
                    </li>
                    <li>
                        <i class="far fa-envelope-open pr-2 text-dark"></i>
                        <a href="mailto:smartvietsolution@gmail.com" class="text-light">smartvietsolution@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //contact -->

    <!-- footer -->
    <footer class="text-center py-sm-5 py-4">
        <div class="container">
            <div class="footer-posi-agileinfo">
                <h2 class="logo-2 font-weight-bold">
                    <a href={{ route('temp.beautyspa.index') }} class="text-dark">
                        <span>B</span>eauty
                        <span>S</span>pa</a>
                </h2>
                <div class="social my-4">
                    <ul>
                        <li>
                            <a href="#" class="link facebook" target="_parent">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="mx-3">
                            <a href="#" class="link twitter" target="_parent">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="link google-plus" target="_parent">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- copyright -->
                <p class="copy-right-grids">
                    © 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt
                </p>
                <!-- //copyright -->
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js files -->

    <!-- JavaScript -->
    <script src="{{ asset('templates/beautyspa/js/jquery-2.2.3.min.js') }}"></script>
    <!-- Default-JavaScript-File -->

    <!-- Necessary-JavaScript-File-For-Bootstrap -->
    <script src="{{ asset('templates/beautyspa/js/bootstrap.js') }}"></script>

    <!-- Text effect -->
    <script src="{{ asset('templates/beautyspa/js/text_effect.js') }}"></script>

    <!-- pop-up-box -->
    <script src="{{ asset('templates/beautyspa/js/jquery.magnific-popup.js') }}"></script>

    <!-- particles (bg effect) -->
    <script src="{{ asset('templates/beautyspa/js/jquery.canvas.particles.min.js') }}"></script>

    <!-- gallery light box -->
    <script src="{{ asset('templates/beautyspa/js/lsb.min.js') }}"></script>

    <!-- smooth scrolling -->
    <script src="{{ asset('templates/beautyspa/js/SmoothScroll.min.js') }}"></script>

    <!-- move-top -->
    <script src="{{ asset('templates/beautyspa/js/move-top.js') }}"></script>

    <!-- easing -->
    <script src="{{ asset('templates/beautyspa/js/easing.js') }}"></script>

    <!--  necessary snippets for few javascript files -->
    <script src="{{ asset('templates/beautyspa/js/beauty_spa.js') }}"></script>

    <!-- //Js files -->

</body>

</html>
