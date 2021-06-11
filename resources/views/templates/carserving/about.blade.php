@extends('templates.carserving.master')
@section('title', 'Carserving Started')
@section('content')
    <!-- about breadcrumb -->
    <section class="w3l-about-breadcrumb position-relative text-center">
        <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
            <div class="container py-lg-5 py-3">
                <h2 class="title">Về Chúng Tôi</h2>
                <ul class="breadcrumbs-custom-path mt-2">
                    <li><a href="#url">Trang Chủ</a></li>
                    <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span> Về Chúng Tôi
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //about breadcrumb -->
    <!-- /content-6-->
    <section class="w3l-content-6">
        <!-- /content-6-main-->
        <div class="content-6-mian py-5">
            <div class="container py-lg-5">
                <div class="content-info-in row">
                    <div class="col-lg-6">
                        <img src="{{ asset('templates/carserving/images/ab1.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self  pl-lg-4">
                        <div class="title-content text-left mb-2">
                            <h6 class="sub-title">Giới Thiệu Công Ty</h6>
                            <h3 class="hny-title">Chúng Tôi Có Đủ Điều Kiện & Kinh Nghiệm Trong Lĩnh Vực Này</h3>
                        </div>
                        <p class="mt-3">Trở thành một Công ty chuyên nghiệp về kỹ thuật công nghệ chẩn đoán lớn nhất Việt
                            Nam.</p>
                        <a href="{{ route('temp.carserving.about') }}" class="btn btn-style btn-primary mt-4">Xem Thêm</a>
                    </div>
                    <div class="col-lg-6 mt-5 about-right-faq align-self order2">
                        <div class="title-content text-left mb-2">
                            <h6 class="sub-title">Chúng Tôi Là Ai</h6>
                            <h3 class="hny-title">Chất Lượng & Chuyên Nghiệp</h3>
                        </div>
                        <p class="mt-3">Tạo ra giá trị cho nhân viên – Khách hàng – Nâng tầm người thợ Việt. Sứ mệnh của
                            Chúng tôi là mang công nghệ chẩn đoán hiện đại, tiện nghi nhất đến cho mọi đối tượng từ sinh
                            viên, chủ xe,….</p>
                        <a href="{{ route('temp.carserving.about') }}" class="btn btn-style btn-primary mt-4">Xem Thêm</a>
                    </div>
                    <div class="col-lg-6 mt-5 pl-lg-4">
                        <img src="{{ asset('templates/carserving/images/ab2.jpg') }}" alt="" class="img-fluid">
                    </div>


                </div>
            </div>
    </section>
    <!-- //content-6-->
    <!-- /w3l-content-4 -->
    <section class="w3l-content-4">
        <!-- /content-6-section -->
        <div class="content-4-main py-5">
            <div class="container py-lg-4">
                <div class="content-info-in row">

                    <div class="content-right col-lg-6">
                        <img src="{{ asset('templates/carserving/images/ab4.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="content-left col-lg-6 pl-lg-5">
                        <h6 class="sub-title">
                            Nhân Viên</h6>
                        <h3 class="hny-title">
                            Tất cả các nhân viên đều được trang bị kỹ thuật mới nhất
                        </h3>
                        <p class="mt-3">Đội ngũ nhân viên được đào tạo chuyên nghiệp, đúng quy trình, nâng cao tay nghề.
                        </p>

                        <div class="content-4-bottom">
                            <div class="content4-right-grids mb-md-0 mb-4">

                                <div class="content4-right-info">
                                    <h6><a href="#">Tầm Nhìn</a></h6>
                                    <p>
                                        Trở thành một Công ty chuyên nghiệp về kỹ thuật công nghệ chẩn đoán lớn nhất Việt
                                        Nam.</p>
                                </div>

                            </div>
                            <div class="content4-right-grids mb-md-0 mb-4">

                                <div class="content4-right-info">
                                    <h6><a href="#">Sứ Mệnh</a></h6>
                                    <p>Chúng tôi tự tin sẽ tư vấn và đáp ứng tất cả những nhu cầu về chăm sóc chiếc xe
                                        của bạn.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //content-6-section -->

    <!--//content-5-->
    <div class="w3l-content-5 py-5">
        <div class="container py-lg-4">
            <div class="row content-5-grids">
                <div class="col-lg-4 col-md-6 content-5-one">
                    <div class="content5-gd-ingf">
                        <div class="icon-holder mb-3">
                            <span class="fa fa-users service-icon" aria-hidden="true"></span>
                        </div>
                        <h4>Dịch Vụ Xe Hơi</h4>
                        <p>Thực hiện các dịch vụ liên quan đến hệ thống xe với các kỹ thuật viên của chúng tôi</p>
                        <a href="{{ route('temp.carserving.services') }}" class="btn btn-style btn-primary mt-4">Xem
                            Thêm</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 content-5-one">
                    <div class="content5-gd-ingf">
                        <div class="icon-holder mb-3">
                            <span class="fa fa-heart-o service-icon" aria-hidden="true"></span>
                        </div>
                        <h4>Dịch Vụ Lốp Xe</h4>
                        <p>Kiểm soát và điều chỉnh vị trí góc đặt bánh xe để đảm bảo an toàn.</p>
                        <a href="{{ route('temp.carserving.services') }}" class="btn btn-style btn-primary mt-4">Xem
                            Thêm</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 content-5-one">
                    <div class="content5-gd-ingf">
                        <div class="icon-holder mb-3">
                            <span class="fa fa-handshake-o service-icon" aria-hidden="true"></span>
                        </div>
                        <h4>Gói Bảo Trì</h4>
                        <p>Kiểm tra an toàn xe theo định kỳ và trước mỗi chuyến đi dài cho khách hàng</p>
                        <a href="{{ route('temp.carserving.services') }}" class="btn btn-style btn-primary mt-4">Xem
                            Thêm</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//content-5-->

    <!-- team -->
    <section class="w3l-team-main py-5" id="team">
        <div class="container py-lg-4">
            <div class="title-content text-center mb-lg-5 mb-4">
                <h6 class="sub-title">Đội Ngũ Của Chúng Tôi</h6>
                <h3 class="hny-title">Gặp Gỡ Các Nhân Viên</h3>
            </div>
            <div class="row inner-sec-w3layouts-w3pvt-lauinfo">
                <div class="col-md-3 col-6">
                    <div class="team-grids text-center">
                        <img src="{{ asset('templates/carserving/images/team1.jpg') }}" class="img-fluid" alt="">
                        <div class="team-info">
                            <div class="caption">
                                <h4>Hữu Hoàng</h4>
                                <h6>Kỹ Thuật Viên</h6>
                            </div>
                        </div>
                    </div>
                    <div class="social-icons-section text-center">
                        <a class="fac" href="#url">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="twitter" href="#url">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="team-grids text-center">
                        <img src="{{ asset('templates/carserving/images/team2.jpg') }}" class="img-fluid" alt="">
                        <div class="team-info">
                            <div class="caption">
                                <h4>Phong Khoa</h4>
                                <h6>Kỹ Thuật Viên</h6>
                            </div>
                        </div>
                    </div>
                    <div class="social-icons-section text-center">
                        <a class="fac" href="#url">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="twitter" href="#url">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-4">
                    <div class="team-grids text-center">
                        <img src="{{ asset('templates/carserving/images/team3.jpg') }}" class="img-fluid" alt="">
                        <div class="team-info">
                            <div class="caption">
                                <h4>Tấn Hưng</h4>
                                <h6>Kỹ Thuật Viên</h6>
                            </div>
                        </div>
                    </div>
                    <div class="social-icons-section text-center">
                        <a class="fac" href="#url">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="twitter" href="#url">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-4">
                    <div class="team-grids text-center">
                        <img src="{{ asset('templates/carserving/images/team4.jpg') }}" class="img-fluid" alt="">
                        <div class="team-info">
                            <div class="caption">
                                <h4>Nhật Thiện</h4>
                                <h6>Kỹ Thuật Viên</h6>
                            </div>
                        </div>
                    </div>
                    <div class="social-icons-section text-center">
                        <a class="fac" href="#url">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="twitter" href="#url">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team -->

@endsection
