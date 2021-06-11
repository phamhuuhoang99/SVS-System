@extends('templates.learning.master')
@section('title', 'Learning')
@section('content')
<!--contact start here-->
<div class="contact">
    <div class="container">
        <div class="contact-main">
            <div class="contact-top">
                <h2>Liên Hệ</h2>
                <p></p>
            </div>
            <div class="contact-block1">
                <div class="col-md-6 contact-address">
                    <h3>Thông Tin Liên Lạc</h3>
                    <p>Hãy liên hệ với chúng tôi đễ nhận thông tin ưu đãi mới nhất</p>
                    <ul>
                        <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"> </span>
                            <p>Quận Gò Vấp, Hồ Chí Minh.</p>
                        </li>
                        <li><span class="glyphicon glyphicon-phone" aria-hidden="true"> </span>
                            <p>035 618 5047</p>
                        </li>
                        <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"> </span>
                            <p><a href="mailto:smartvietsolution@gmail.com">smartvietsolution@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 contact-block-left">
                    <form action="#">
                        <input type="text" placeholder="Họ tên" required="" name="Name">
                        <input type="text" class="email" placeholder="Email" name="Email">
                        <input type="text" class="subject" placeholder="Chủ đề" name="Subject">
                        <textarea placeholder="Lời nhắn" name="message"></textarea>
                        <input type="submit" value="Gửi">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212126.07899261903!2d150.68928304602147!3d-33.82598834810063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1463468876401"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!--contact end here-->
@endsection