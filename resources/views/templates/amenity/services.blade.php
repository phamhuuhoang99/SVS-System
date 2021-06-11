@extends('templates.amenity.master')
@section('title','Amenity')
@section('content')


<!--Breadcrumb-->
<div class="services-breadcrumb">
    <div class="inner_breadcrumb">
        <ul class="short_ls">
            <li>
                <a href={{route("temp.amenity.index") }}>Trang Chủ</a>
                <span>| |</span>
            </li>
            <li>Dịch Vụ</li>
        </ul>
    </div>
</div>
<!--//Breadcrumb-->
<!-- Services -->
<div class="services">
    <div class="container">
        <h3 class="tittle-w3layouts">Dịch Vụ</h3>
        <div class="services-left-sctn">
            <div class="services-left-sctn-grid">
                <div class="col-md-4 services-icon">
                    <div class="services-icon-info">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                    </div>
                    <div class="services-icon-text">
                        <h4>Sửa Chữa Nội Thất</h4>
                        <p class="paragraph-w3-agile">Khẳng định uy tín cũng như đẳng cấp hàng đầu, Chúng tôi Luôn đi đầu xu hướng và liên tục cập nhật những thiết kế mới, hiện đại nhất.</p>
                    </div>
                </div>
                <div class="col-md-4 services-icon">
                    <div class="services-icon-info">
                        <i class="fa fa-undo" aria-hidden="true"></i>
                    </div>
                    <div class="services-icon-text">
                        <h4>Khôi Phục Nội Thất Cũ</h4>
                        <p class="paragraph-w3-agile">Khẳng định uy tín cũng như đẳng cấp hàng đầu, Chúng tôi Luôn đi đầu xu hướng và liên tục cập nhật những thiết kế mới, hiện đại nhất.</p>
                    </div>
                </div>
                <div class="col-md-4 services-icon">
                    <div class="services-icon-info">
                        <i class="fa fa-magic" aria-hidden="true"></i>
                    </div>
                    <div class="services-icon-text">
                        <h4>Đánh Bóng & Sơn </h4>
                        <p class="paragraph-w3-agile">Khẳng định uy tín cũng như đẳng cấp hàng đầu, Chúng tôi Luôn đi đầu xu hướng và liên tục cập nhật những thiết kế mới, hiện đại nhất.</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="services-left-sctn-grid">
                <div class="col-md-4 services-icon">
                    <div class="services-icon-info">
                        <i class="fa fa-angellist" aria-hidden="true"></i>
                    </div>
                    <div class="services-icon-text">
                        <h4>Sửa  & Đánh Vinyl </h4>
                        <p class="paragraph-w3-agile">Khẳng định uy tín cũng như đẳng cấp hàng đầu, Chúng tôi Luôn đi đầu xu hướng và liên tục cập nhật những thiết kế mới, hiện đại nhất.</p>
                    </div>
                </div>
                <div class="col-md-4 services-icon">
                    <div class="services-icon-info">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    </div>
                    <div class="services-icon-text">
                        <h4>Cơ Chế & Bộ Phận</h4>
                        <p class="paragraph-w3-agile">Khẳng định uy tín cũng như đẳng cấp hàng đầu, Chúng tôi Luôn đi đầu xu hướng và liên tục cập nhật những thiết kế mới, hiện đại nhất.</p>
                    </div>
                </div>
                <div class="col-md-4 services-icon">
                    <div class="services-icon-info">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                    </div>
                    <div class="services-icon-text">
                        <h4>Hàng Nội Địa</h4>
                        <p class="paragraph-w3-agile">Khẳng định uy tín cũng như đẳng cấp hàng đầu, Chúng tôi Luôn đi đầu xu hướng và liên tục cập nhật những thiết kế mới, hiện đại nhất.</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
<!--// Services -->
@endsection