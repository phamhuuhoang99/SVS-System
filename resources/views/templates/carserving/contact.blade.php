@extends('templates.carserving.master')
@section('title', 'Carserving Started')
@section('content')
    <!-- about breadcrumb -->
    <section class="w3l-about-breadcrumb position-relative text-center">
        <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
            <div class="container py-lg-5 py-3">
                <h2 class="title">Liên Hệ</h2>
                <ul class="breadcrumbs-custom-path mt-2">
                    <li><a href="#url">Trang Chủ</a></li>
                    <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span> Liên Hệ </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //about breadcrumb -->
    <section class="w3l-contact-11">
        <div class="form-41-mian py-5">
            <div class="container py-lg-4">
                <div class="row align-form-map">
                    <div class="col-lg-6 contact-left pr-lg-4">
                        <div class="partners">
                            <div class="cont-details">
                                <div class="title-content text-left">
                                    <h6 class="sub-title">Liên Hệ</h6>
                                    <h3 class="hny-title">Liên Hệ Với Chúng Tôi</h3>
                                </div>
                                <p class="mt-3 mb-4 pr-lg-5">Dù ở bất kỳ nơi đâu, bất cứ lúc nào, bạn đều có thể liên hệ với
                                    Chúng tôi tiện lợi và dễ dàng, chúng tôi sẵn sàng trợ giúp tất cả các
                                    dịch vụ của quý khách bất kỳ khi cần.</p>
                                <h6 class="mb-4"> Để biết thêm thông tin về sản phẩm của chúng tôi và giá cả, vui lòng liên hệ với chúng tôi.</h6>
                            </div>
                            <div class="hours">
                                <h6 class="mt-4">Email:</h6>
                                <p> <a href="mailto:info@example.com">
                                    smartvietsolution@gmail.com</a></p>
                                <h6 class="mt-4">Địa Chỉ:</h6>
                                <p> 220/91 Nguyễn Văn Khối, Phường 9, Quận Gò Vấp, Hồ Chí Minh</p>
                                <h6 class="mt-4">Số điện thoại:</h6>
                                <p class="margin-top"><a href="#">
                                    035 618 5047</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 form-inner-cont">
                        <div class="title-content text-left">
                            <h3 class="hny-title mb-lg-5 mb-4">Gửi Tin Nhắn Cho Chúng Tôi</h3>
                        </div>
                        <form action="#" class="signin-form">
                            <div class="form-input">
                                <input type="text" name="w3lName" id="w3lName" placeholder="Họ Tên" />
                            </div>
                            <div class="row con-two">
                                <div class="col-lg-6 form-input">
                                    <input type="email" name="w3lSender" id="w3lSender" placeholder="Email" required="" />
                                </div>
                                <div class="col-lg-6 form-input">
                                    <input type="text" name="w3lSubect" placeholder="Chủ đề" class="contact-input" />
                                </div>
                            </div>
                            <div class="form-input">
                                <textarea placeholder="Lời Nhắn" name="w3lMessage" id="w3lMessage" required=""></textarea>
                            </div>
                            <div class="submit-button text-lg-right">
                                <button type="submit" class="btn btn-style">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001161.424489281!2d-78.01909140705047!3d42.72866436845163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sin!4v1570786994395!5m2!1sen!2sin"
                frameborder="0" allowfullscreen=""></iframe>
        </div>
    </section>
    <!-- //contact-form -->
@endsection
