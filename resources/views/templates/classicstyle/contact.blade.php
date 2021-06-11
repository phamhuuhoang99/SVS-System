@extends('templates.classicstyle.master')
@section('title','Classic Style')
@section('content')
<!--banner-->
<div class="banner-top">
    <div class="container">
        <h2>Liên hệ</h2>
        <h3><a href={{ route("temp.classicstyle.index") }}>Trang Chủ</a><label>/</label>Liên hệ</h3>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- contact -->
<div class="contact">
    <div class="container">


        <div class="col-md-8 contact-grids1 animated wow fadeInRight" data-wow-delay=".5s">
            <form>
                <div class="contact-form2">
                    <h4>Họ Tên</h4>

                    <input type="text" placeholder="" required="">

                </div>
                <div class="contact-form2">
                    <h4>Website</h4>

                    <input type="text" placeholder="" required="">

                </div>

                <div class="contact-form2">
                    <h4>Email</h4>

                    <input type="email" placeholder="" required="">

                </div>
                <div class="contact-form2">
                    <h4>Chủ đề</h4>

                    <input type="text" placeholder="" required="">

                </div>


                <div class="contact-me ">
                    <h4>Lời Nhăc</h4>

                    <textarea type="text" placeholder="" required=""> </textarea>
                </div>
                <input type="submit" value="Gửi">
            </form>

        </div>

        <div class="col-md-4 contact-grids">
            <div class=" contact-grid animated wow fadeInLeft" data-wow-delay=".5s">
                <div class="contact-grid1">
                    <div class="contact-grid2 ">
                        <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="contact-grid3">
                        <h4>Địa Chỉ</h4>
                        <p>220/91 Nguyễn Văn Khối, Phường 9 Quận Gò Vấp, <span>Hồ Chí Minh.</span></p>
                    </div>
                </div>
            </div>
            <div class=" contact-grid animated wow fadeInUp" data-wow-delay=".5s">
                <div class="contact-grid1">
                    <div class="contact-grid2 contact-grid4">
                        <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                    </div>
                    <div class="contact-grid3">
                        <h4>Số Điện Thoại</h4>
                        <p>035 618 5047</p>
                    </div>
                </div>
            </div>
            <div class=" contact-grid animated wow fadeInRight" data-wow-delay=".5s">
                <div class="contact-grid1">
                    <div class="contact-grid2 contact-grid5">
                        <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="contact-grid3">
                        <h4>Email</h4>
                        <p><a href="contactto:smartvietsolution@gmail.com">smartvietsolution@gmail.com</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="map">
    <iframe class="animated wow fadeInLeft" data-wow-delay=".5s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.9579945977393!2d-73.87657738464283!3d40.806916839740346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f510a78ff341%3A0xe5b1e682c2e91238!2sNYS+Agriculture+%26+Markets!5e0!3m2!1sen!2sin!4v1456403781501"
        frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- //contact -->
@endsection