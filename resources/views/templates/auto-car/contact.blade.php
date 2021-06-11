@extends('templates.auto-car.master')
@section('title', 'Auto Car')
@section('content')
    <!-- Contact -->
    <div class="con-agile">
        <div class="container">
            <h2>Liên Hệ Với Chúng Tôi</h2>
            <div class="contact-form">
                <h4>Liên Hệ</h4>
                <form action="#">
                    <div class="col-md-6 form-left">
                        <input type="text" placeholder="Họ Tên" name="text" required="">
                    </div>
                    <div class="col-md-6 form-right">
                        <input class="email" type="email" name="email" placeholder="Email" required="">
                    </div>
                    <div class="clearfix"> </div>
                    <input class="" type="text" placeholder="Số điện thoại" name="phone" required="">
                    <textarea class="" placeholder="Lời nhắn" name="message" required=""></textarea>
                    <input type="submit" value="Gửi">
                </form>
            </div>
        </div>
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212126.07899261903!2d150.68928304602147!3d-33.82598834810063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1463468876401"
                allowfullscreen></iframe>
        </div>
    </div>
    <!-- //Contact -->
    <!-- //Main -->
@endsection
