@extends('templates.amenity.master') @section('title','Amenity') @section('content')

<!--Breadcrumb-->
<div class="services-breadcrumb">
    <div class="inner_breadcrumb">
        <ul class="short_ls">
            <li>
                <a href={{route("temp.amenity.index") }}>Trang Chủ</a>
                <span>| |</span>
            </li>
            <li>Liên Hệ</li>
        </ul>
    </div>
</div>
<!--//Breadcrumb-->
<!-- contact -->
<div class="contact-innpage">
    <div class="container">
        <h3 class="tittle-w3layouts">Liên Hệ</h3>
        <div class="mail_grid_w3l">
            <form>
                <div class="col-md-6 contact_left_grid" data-aos="fade-right">
                    <div class="contact-fields-w3ls">
                        <input type="text" name="Name" placeholder="Họ Tên" required="">
                    </div>
                    <div class="contact-fields-w3ls">
                        <input type="email" name="Email" placeholder="Email" required="">
                    </div>
                    <div class="contact-fields-w3ls">
                        <input type="text" name="Telephone" placeholder="Số điện thoại" required="">
                    </div>
                    <div class="contact-fields-w3ls">
                        <input type="text" name="Subject" placeholder="Chủ đề" required="">
                    </div>
                </div>
                <div class="col-md-6 contact_left_grid" data-aos="fade-left">
                    <div class="contact-fields-w3ls">
                        <textarea name="Message" placeholder="Lời nhắn..." required=""></textarea>
                    </div>
                    <input type="submit" value="Gửi">
                </div>
                <div class="clearfix"> </div>

            </form>
        </div>
    </div>
</div>
<!-- //contact -->
<!-- footer-w3 -->
<div class="map-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.495758873587!2d-74.0005340845242!3d40.72911557933012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25991b7473067%3A0x59fbd02f7b519ce8!2s550+LaGuardia+Pl%2C+New+York%2C+NY+10012%2C+USA!5e0!3m2!1sen!2sin!4v1516166447283"></iframe>
</div>

@endsection