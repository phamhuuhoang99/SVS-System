@extends('templates.mastery.master')
@section('title', 'Mastery')
@section('content')

<section class="w3l-contact-breadcrum">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Liên Hệ Với Chúng Tôi</h2>
            <p><a href="{{ route('temp.mastery.index') }}" >Trang chủ</a> &nbsp; / &nbsp; Liên Hệ</p>
        </div>
    </div>
</section>
<!-- contact -->
<section class="w3l-contacts-12" id="contact">
    <div class="contact-top pt-5">
        <div class="container py-md-3">

            <div class="row cont-main-top">

                <!-- contact address -->
                <div class="contact col-lg-4">
                    <div class="cont-subs">
                        <div class="cont-add">

                            <div class="cont-add-rgt">
                                <h4>Địa chỉ:</h4>
                                <p class="contact-text-sub"> Phường 9 Quận Gò Vấp, Hồ Chí Minh</p>
                            </div>
                            <div class="cont-add-lft">
                                <span class="fa fa-map-marker" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="cont-add add-2">

                            <div class="cont-add-rgt">
                                <h4>Email:</h4>
                                <a href="mailto:info@example.com">
                                    <p class="contact-text-sub">smartvietsolution@gmail.com</p>
                                </a>
                            </div>
                            <div class="cont-add-lft">
                                <span class="fa fa-envelope" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="cont-add">

                            <div class="cont-add-rgt">
                                <h4>Số điện thoại:</h4>
                                <a href="tel:0356185047">
                                    <p class="contact-text-sub">035 618 5047</p>
                                </a>
                            </div>
                            <div class="cont-add-lft">
                                <span class="fa fa-phone" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="cont-add add-3">

                            <div class="cont-add-rgt">
                                <h4>Theo Dõi:</h4>
                                <div class="main-social-1 mt-2">
                                    <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                                    <a href="#google-plus" class="google-plus"><span
                                            class="fa fa-google-plus"></span></a>
                                    <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                                </div>
                            </div>
                            <div class="cont-add-lft">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- //contact address -->
                <!-- contact form -->
                <div class="contacts12-main col-lg-8 mt-lg-0 mt-5">

                    <form action="#" class="main-input">
                        <div class="top-inputs d-grid">
                            <input type="text" placeholder="Tên" name="w3lName" id="w3lName" required="">
                            <input type="email" name="email" placeholder="Email" id="w3lSender" required="">
                        </div>
                        <input type="text" placeholder="Số điện thoại" name="w3lName" id="w3lName" required="">
                        <textarea placeholder="Lời nhắn" name="w3lMessage" id="w3lMessage" required=""></textarea>
                        <div class="text-right">
                            <button type="submit" class="btn btn-theme2">Gửi</button>
                        </div>
                    </form>
                </div>
                <!-- //contact form -->
            </div>
        </div>
        <!-- map -->
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.7281066703!2d-0.24168144921176335!3d51.5287718408761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sin!4v1569921526194!5m2!1sen!2sin"
                frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <!-- //map -->
    </div>
</section>
<!-- //contact -->
<!-- grids block 5 -->

@endsection