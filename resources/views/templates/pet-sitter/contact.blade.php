@extends('templates.pet-sitter.master')
@section('title', 'Pet Sitter')
@section('content')
    <!-- breadcrumbs //-->
    <section class="w3l-contact-info-main" id="contact">
        <div class="contact-sec	editContent">
            <div class="container">
                <div class="main-titles-head text-center">
                    <h3 class="header-name editContent">
                        Liên Hệ
                    </h3>
                    <p class="tiltle-para editContent editContent">Chúng tôi đã không ngừng cố gắng, nỗ lực để trở thành
                        thương hiệu mua bán thú cưng uy tín nhất tại Việt Nam.</p>
                </div>
                <div class="d-grid contact-view">
                    <div class="cont-details">
                        <div class="cont-top">
                            <div class="cont-left text-center">
                                <span class="fa fa-phone text-primary"></span>
                            </div>
                            <div class="cont-right">
                                <p class="para"><a href="tel:+44 99 555 42">035 618 5047</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-envelope-o text-primary"></span>
                            </div>
                            <div class="cont-right">
                                <p class="para"><a href="mailto:example@mail.com"
                                        class="mail">smartvietsolution@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-map-marker text-primary"></span>
                            </div>
                            <div class="cont-right">
                                <p class="para"> 220/91 Nguyễn Văn Khối,
                                    <br> Phường 9 Quận Gò Vấp,<br> Hồ Chí Minh.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="map-iframe ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
                            width="100%" height="300" frameborder="0" style="border: 0px; pointer-events: none;"
                            allowfullscreen=""></iframe>
                    </div>

                </div>
                <div class="map-content-9 mt-5">
                    <form action="#">
                        <div class="twice-two">
                            <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Họ tên"
                                required="">
                            <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email"
                                required="">
                        </div>
                        <div class="twice">
                            <input type="text" class="form-control" name="w3lSubject" id="w3lSubject" placeholder="Chủ đề"
                                required="">
                        </div>
                        <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Lời nhắn"
                            required=""></textarea>

                        <div class="text-right">
                            <button type="submit" class="btn btn-contact">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
