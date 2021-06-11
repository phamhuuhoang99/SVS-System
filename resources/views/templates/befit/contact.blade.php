@extends('templates.befit.master')
@section('title', 'Befit')
@section('content')
    <!-- page details -->
    <div class="breadcrumb-agile">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('temp.befit.index') }}">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
        </ol>
    </div>
    <!-- //page details -->

    <!-- contact -->
    <section class="contact py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title-w3 text-bl text-center font-weight-bold">Liên hệ</h3>
            <p class="title-sub mb-sm-5 mb-4 text-center">Để được tư vấn và tham quan phòng tập miễn phí, hãy để lại số điện thoại</p>
            <!-- mail -->
            <div class="row mail-w3l-agile pt-xl-4">
                <div class="col-md-5 contact-left-w3ls">
                    <h3>Thông tin liên hệ</h3>
                    <div class="row visit">
                        <div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
                            <span class="fa fa-home" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 contact-text-agileinf0">
                            <h4>Địa chỉ</h4>
                            <p>220/91 Nguyễn Văn Khối, Phường 9</p>
                            <p>Quận Gò Vấp, Hồ Chí Minh</p>
                        </div>
                    </div>
                    <div class="row mail-w3 my-4">
                        <div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
                            <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 contact-text-agileinf0">
                            <h4>Email</h4>
                            <p><a href="mailto:info@example.com">info@example.com</a></p>
                        </div>
                    </div>
                    <div class="row call">
                        <div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
                            <span class="fa fa-phone" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10 contact-text-agileinf0">
                            <h4>Số điện thoại</h4>
                            <p>035 618 5047</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 agileinfo_mail_grid_right mt-md-0 mt-5">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" name="Name" class="form-control" placeholder="Họ tên" required="">
                        </div>
                        <div class="form-group">
                            <input type="email" name="Email" class="form-control" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <textarea name="Message" placeholder="Lời nhắn......." required=""></textarea>
                        </div>
                        <button type="submit" class="btn">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->

    <!-- map -->
    <div class="map p-2">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
            class="map" style="border:0" allowfullscreen=""></iframe>
    </div>
    <!-- //map -->
@endsection
