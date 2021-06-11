@extends('templates.hairsalon.master')
@section('title', 'Hair Salon')
@section('content')

    <!-- breadcrumb -->
    <div class="w3_breadcrumb">
        <div class="breadcrumb-inner">
            <ul>
                <li><a href={{ route('temp.hairsalon.index') }}>Trang Chủ</a> <i>//</i></li>

                <li>Liên Hệ</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumb -->
    <!--/content-inner-section-->
    <div class="w3_content_agilleinfo_inner">
        <div class="container">
            <div class="title-agileits">
                <h2 class="w3l-agile">Liên hệ</h2>
            </div>
            <div class="w3_mail_grids">
                <form>
                    <div class="col-md-6 w3_agile_mail_grid">
                        <input type="text" placeholder="Họ tên" required="">
                        <input type="email" placeholder="Email" required="">
                        <input type="text" placeholder="Số điện thoại" required="">


                    </div>
                    <div class="col-md-6 w3_agile_mail_grid">
                        <textarea name="Message" placeholder="Lời nhắn" required=""></textarea>
                        <input type="submit" value="Gửi">
                    </div>
                    <div class="clearfix"> </div>
                </form>
            </div>
        </div>
        <div class=" map">
            <iframe
                src={{ URL::asset("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12947831.742778081!2d-95.665!3d37.599999999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1422444552833")}}></iframe>
        </div>
    </div>
    <!--//content-inner-section-->
@endsection
