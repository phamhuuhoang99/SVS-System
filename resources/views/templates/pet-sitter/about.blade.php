@extends('templates.pet-sitter.master')
@section('title', 'Nhân viên chăm sóc')
@section('content')
    <!-- breadcrumbs -->
    <section class="w3l-inner-banner-main">
        <div class="about-inner editContent">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li class="right-side propClone"><a href="{{ route('temp.pet-sitter.index') }}"
                            class="editContent">Trang Chủ <span class="fa fa-angle-right" aria-hidden="true"></span></a>
                        <p>
                    </li>
                    <li class="active editContent">Về Chúng Tôi</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- breadcrumbs //-->
    <section class="w3l-content-with-photo-4" id="about">
        <div class="content-with-photo4-block editContent">
            <div class="container">
                <div class="row">
                    <div class="cwp4-image col-lg-6">
                        <img src="{{ asset('templates/pet-sitter//images/13.jpg') }}" alt="product"
                            class="img-responsive about-me">
                    </div>
                    <div class="cwp4-text col-lg-6 ">
                        <div class="posivtion-grid">
                            <h3 class="editContent"> Cơ Sở - Trang Trại<span class="color-text"> Của Chúng Tôi</span></h3>
                            <p class="para editContent">Chúng tôi sở hữu đội ngũ nhân viên là các chuyên gia nhân giống
                                thú cưng chuyên nghiệp và dày dặn kinh nghiệm. Vì vậy, những em thú được sinh ra tại trại
                                của chúng tôi luôn là những bé có chất lượng tốt nhất, ngoại hình đẹp.
                            </p>
                            <ul>
                                <li><span class="fa fa-circle mr-2" aria-hidden="true"></span><a href="#page">Mua thú
                                        cưng</a></li>
                                <li><span class="fa fa-circle mr-2" aria-hidden="true"></span><a href="#page">Bán thú
                                        cưng</a></li>
                                <li><span class="fa fa-circle mr-2" aria-hidden="true"></span><a href="#page">Trông giữ thú
                                        cưng</a></li>
                                <li><span class="fa fa-circle mr-2" aria-hidden="true"></span><a href="#page">Chó nhập
                                        ngoại</a></li>
                                <li><span class="fa fa-circle mr-2" aria-hidden="true"></span><a href="#page">Bán phụ kiện
                                        thú cưng</a></li>
                            </ul>

                        </div>
                        <a href="{{ route('temp.pet-sitter.about') }}" class="action-button btn">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-about ">
        <div class="skills-bars editContent text-center">
            <div class="container">
                <img src="{{ asset('templates/pet-sitter//images/3.jpg') }}" alt="product" class="img-responsive about-me">


                <h3>Hoạt Động Của Chúng Tôi</h3>

                <p class="para mt-md-4 mt-3">Chúng tôi đã không ngừng cố gắng, nỗ lực để trở thành thương hiệu mua bán thú
                    cưng uy tín nhất tại Việt Nam. Chúng tôi là một trong những đơn vị tiên phong đi đầu trong việc áp dụng
                    công nghệ hiện đại vào lĩnh vực chăm sóc & mua bán thú cưng.
                </p>

            </div>
        </div>
    </section>
    <section class="w3l-recent-work">
        <div class="jst-two-col">
            <div class="container">
                <div class="content-photo-1 row">
                    <div class="content-photo-left_sur col-lg-6">
                        <h3>Hãy để chúng tôi chăm sóc<span class="color-text"> Pet Của Bạn</span></h3>
                        <span class="price">800,000 VNĐ/tháng</span>
                        <p class="para mt-3">Dịch vụ trông giữ thú cưng của Chúng tôi sẽ đảm bảo đáp ứng được tất cả những
                            vấn đề trên của khách hàng. Chúng tôi có một môi trường sống lý tưởng, khoa học dành cho các bé
                            thú cưng. Tại đây, chúng sẽ được trải qua quy trình chăm sóc kỹ lưỡng, khoa học. Bao gồm: Vệ
                            sinh cá nhân, cho ăn uống, tập thể dục thể thao, huấn luyện…</p>
                        <a href="{{ route('temp.pet-sitter.about') }}" class="action-button btn mt-md-4 mt-3">Xem thêm</a>
                    </div>
                    <div class="content-photo-right_sur col-lg-6">
                        <div class="csslider infinity" id="slider1">
                            <input type="radio" name="slides" checked="checked" id="slides_1">
                            <input type="radio" name="slides" id="slides_2">
                            <input type="radio" name="slides" id="slides_3">
                            <ul class="banner_slide_bg">
                                <li>
                                    <img class="img" src="{{ asset('templates/pet-sitter//images/5.jpg') }}" alt="">
                                </li>
                                <li>
                                    <img class="img" src="{{ asset('templates/pet-sitter//images/9.jpg') }}" alt="">
                                </li>
                                <li>
                                    <img class="img" src="{{ asset('templates/pet-sitter//images/8.jpg') }}" alt="">
                                </li>

                            </ul>
                            <div class="arrows">
                                <label for="slides_1"></label>
                                <label for="slides_2"></label>
                                <label for="slides_3"></label>
                            </div>
                            <div class="navigation">
                                <div>
                                    <label for="slides_1"></label>
                                    <label for="slides_2"></label>
                                    <label for="slides_3"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-team-main-6" id="team">
        <!-- /team-grids -->
        <div class="team-content-page editContent">
            <div class="container">
                <div class="main-contteam-28">
                    <div class="team-main-19 ">
                        <div class="column-19">
                            <a href="#page"><img class="img-responsive"
                                    src="{{ asset('templates/pet-sitter//images/t4.jpg') }}" alt=" "></a>
                        </div>
                        <div class="right-team-9">
                            <h6><a href="F" class="title-team-28">Thanh Thúy</a></h6>
                            <p class="sm-text-28">Nhân viên chăm sóc</p>
                            <p class="para mt-3">Có nhiều năm kinh nghiệm trong việc chăm sóc  thú cưng.</p>
                            <ul class="team-details">
                                <li><a href="tel:+7-800-999-800"><span class="fa fa-mobile"></span> 035 618 5047</a>
                                </li>
                                <li><a href="mailto:petsitter1@mail.com" class="mail"><span
                                            class="fa fa-envelope-open-o"></span> petsitter3@mail.com</a></li>
                            </ul>
                            <div class="social-teams">
                                <a href="#team" class="facebook"><span class="fa fa-facebook"></span></a>
                                <a href="#team" class="twitter"><span class="fa fa-twitter"></span></a>
                                <a href="#team" class="pinterest"><span class="fa fa-pinterest"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-main-19">
                        <div class="column-19">
                            <a href="#page"><img class="img-responsive"
                                    src="{{ asset('templates/pet-sitter//images/t3.jpg') }}" alt=" "></a>
                        </div>
                        <div class="right-team-9">
                            <h6><a href="#page" class="title-team-28">Kim Như</a></h6>
                            <p class="sm-text-28">Nhân viên chăm sóc</p>
                            <p class="para mt-3">Có nhiều năm kinh nghiệm trong việc chăm sóc thú cưng.</p>
                            <ul class="team-details">
                                <li><a href="tel:+7-800-999-800"><span class="fa fa-mobile"></span> 035 618 5047</a>
                                </li>
                                <li><a href="mailto:petsitter1@mail.com" class="mail"><span
                                            class="fa fa-envelope-open-o"></span> petsitter4@mail.com</a></li>
                            </ul>
                            <div class="social-teams">
                                <a href="#team" class="facebook"><span class="fa fa-facebook"></span></a>
                                <a href="#team" class="twitter"><span class="fa fa-twitter"></span></a>
                                <a href="#team" class="pinterest"><span class="fa fa-pinterest"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-main-19">
                        <div class="column-19">
                            <a href="#page"><img class="img-responsive"
                                    src="{{ asset('templates/pet-sitter//images/t2.jpg') }}" alt=" "></a>
                        </div>
                        <div class="right-team-9">
                            <h6><a href="#page" class="title-team-28">Khánh Hạ</a></h6>
                            <p class="sm-text-28">Nhân viên chăm sóc</p>
                            <p class="para mt-3">Có nhiều năm kinh nghiệm trong việc chăm sóc thú cưng.</p>
                            <ul class="team-details">
                                <li><a href="tel:+7-800-999-800"><span class="fa fa-mobile"></span> 035 618 5047</a>
                                </li>
                                <li><a href="mailto:petsitter1@mail.com" class="mail"><span
                                            class="fa fa-envelope-open-o"></span> petsitter5@mail.com</a></li>
                            </ul>
                            <div class="social-teams">
                                <a href="#team" class="facebook"><span class="fa fa-facebook"></span></a>
                                <a href="#team" class="twitter"><span class="fa fa-twitter"></span></a>
                                <a href="#team" class="pinterest"><span class="fa fa-pinterest"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-main-19">
                        <div class="column-19">
                            <a href="#page"><img class="img-responsive"
                                    src="{{ asset('templates/pet-sitter//images/t1.jpg') }}" alt=" "></a>
                        </div>
                        <div class="right-team-9">
                            <h6><a href="#page" class="title-team-28">Thanh Thùy</a></h6>
                            <p class="sm-text-28">Nhân viên chăm sóc</p>
                            <p class="para mt-3">Có nhiều năm kinh nghiệm trong việc chăm sóc thú cưng.</p>
                            <ul class="team-details">
                                <li><a href="tel:+7-800-999-800"><span class="fa fa-mobile"></span> 035 618 5047</a>
                                </li>
                                <li><a href="mailto:petsitter1@mail.com" class="mail"><span
                                            class="fa fa-envelope-open-o"></span> petsitter6@mail.com</a></li>
                            </ul>
                            <div class="social-teams">
                                <a href="#team" class="facebook"><span class="fa fa-facebook"></span></a>
                                <a href="#team" class="twitter"><span class="fa fa-twitter"></span></a>
                                <a href="#team" class="pinterest"><span class="fa fa-pinterest"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /team-grids -->
    </section>
@endsection
