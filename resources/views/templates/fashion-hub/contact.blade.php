@extends('templates.fashion-hub.master')
@section('title','Trung tâm thời trang thương mại điện tử trực tuyến')
@section('content')
<div class="ibanner_w3 pt-sm-5 pt-3">
    <h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
        <span>f</span>ashion
        <span>h</span>ub</h4>
</div>
<!-- //inner banner -->
<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href={{ route("temp.fashion-hub.index") }}>Trang Chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!-- contact -->
<section class="wthree-row pt-3 pb-sm-5 w3-contact">
    <div class="container py-sm-5 pb-5">
        <h5 class="head_agileinfo text-center text-capitalize pb-5">
            <span>L</span>iên hệ</h5>
        <div class="row contact-form pt-lg-5">
            <div class="col-lg-6 wthree-form-left">
                <!-- contact form grid -->
                <div class="contact-top1">
                    <h5 class="text-dark mb-4 text-capitalize">Liên hệ & Đặt hàng</h5>
                    <form action="#" method="get" class="f-color">
                        <div class="form-group">
                            <label for="contactusername">Tên</label>
                            <input type="text" class="form-control" id="contactusername" required>
                        </div>
                        <div class="form-group">
                            <label for="contactemail">Email</label>
                            <input type="email" class="form-control" id="contactemail" required>
                        </div>
                        <div class="form-group">
                            <label for="contactcomment">Nội dung</label>
                            <textarea class="form-control" rows="5" id="contactcomment" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-info btn-block">Gửi</button>
                    </form>
                </div>
                <!--  //contact form grid ends here -->
            </div>
            <!-- contact details -->
            <div class="col-lg-6 contact-bottom pl-5 mt-lg-0 mt-5">
                <!-- contact details grid1-->
                <div class="address">
                    <h5 class="pb-3 text-capitalize">Địa chỉ</h5>
                    <address>
                        <p class="c-txt">220/91 Nguyễn Văn Khối, Phường 9 Quận Gò Vấp, Hồ Chí Minh.</p>
                    </address>
                </div>
                <!-- contact details grid2-->
                <div class="address my-5">
                    <h5 class="pb-3 text-capitalize">Số điện thoại</h5>
                    <p>035 618 5047</p>
                </div>
                <!-- contact details grid3 -->
                <div class="address mt-md-0 mt-3">
                    <h5 class="pb-3 text-capitalize">Email</h5>
                    <p>
                        <a href="mailto:smartvietsolution@gmail.com">smartvietsolution@gmail.com</a>
                    </p>
                </div>
                <!-- //contact details row ends here -->
            </div>
        </div>
        <!-- //contact details container -->
    </div>
    <!-- contact map grid -->
    <div class="map contact-right pb-5">
        <div class="pt-lg-5 bg-pricemain text-center">
            <h3 class="stat-title text-capitalize pb-5">Chỉ đường</h3>
            <span class="w3-line"></span>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"
            allowfullscreen></iframe>
    </div>
    <!--//contact map grid ends here-->
</section>
@endsection
