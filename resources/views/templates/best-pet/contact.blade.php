@extends('templates.best-pet.master')
@section('title', 'Best Pet')
@section('content')
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <h3 class="agileits-title w3title2">Liên Hệ</h3>
            <div class="map-pos">
                <div class="col-md-4 address-row">
                    <div class="col-xs-2 address-left">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 address-right">
                        <h5>Địa chỉ</h5>
                        <p>Quận Gò Vấp, Hồ Chí Minh</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 address-row w3-agileits">
                    <div class="col-xs-2 address-left">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 address-right">
                        <h5>Mail</h5>
                        <p><a href="mailto:info@example.com"> smartvietsolution@gmail.com</a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 address-row">
                    <div class="col-xs-2 address-left">
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 address-right">
                        <h5>Số điện thoại</h5>
                        <p>035 618 5047
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <form action="#">
                <div class="col-sm-6 contact-left">
                    <input type="text" name="Name" placeholder="Họ tên" required="">
                    <input type="email" name="Email" placeholder="Email" required="">
                    <input type="text" name="Mobile Number" placeholder="Số điện thoại" required="">
                </div>
                <div class="col-sm-6 contact-right">
                    <textarea name="Message" placeholder="Lời nhắn" required=""></textarea>
                    <input type="submit" value="Gửi">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
    <!-- //contact -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24174.906176932098!2d-73.98255489041246!3d40.765031876857535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258bf12dbe975%3A0xf6bac5dd7bc5f711!2sPookie+and+Sebastian!5e0!3m2!1sen!2sin!4v1482923320436"></iframe>
    </div>
@endsection
