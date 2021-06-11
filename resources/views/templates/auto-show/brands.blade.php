@extends('templates.auto-show.master')
@section('title', 'Auto Show')
@section('content')
    @include('templates.auto-show.men_banner')
    <div class="men">
        <div class="container">
            <div class="col-md-9 single_top">
                <h1 class="page-heading product-listing">
                    Thương hiệu
                    <span class="heading-counter">Có 4 Thương hiệu</span>
                </h1>
                <div class="product-count">Hiển thị 1 - 4 của 4 mục</div>
                <div class="brand_box">
                    <div class="left-side col-xs-12 col-sm-3">
                        <img src="{{ asset('templates/auto-show/images/2nd-day.jpg') }}" alt="" />
                    </div>
                    <div class="middle-side col-xs-12 col-sm-5">
                        <h4><a href="#">Rolls Royce</a></h4>
                        <p>Những mẫu xe của Rolls Royce thuộc sở hữu của những đại gia siêu giàu có trên thế giới. Với tiếng
                            tăm vốn có cùng kinh nghiệm lâu đời, Rolls Royce đang là cái tên mà rất nhiều người khao khát sở
                            hữu.</p>
                    </div>
                    <div class="right-side col-xs-12 col-sm-4">
                        <p><a href="#">1 Sản Phẩm</a></p>
                        <a href="{{ route('temp.auto-show.single') }}" title="Online Reservation"
                            class="btn btn1 btn-primary btn-normal btn-inline " target="_self">Xem Sản Phẩm</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="brand_box">
                    <div class="left-side col-xs-12 col-sm-3">
                        <img src="{{ asset('templates/auto-show/images/mih-jeans.jpg') }}" alt="" />
                    </div>
                    <div class="middle-side col-xs-12 col-sm-5">
                        <h4><a href="#">Audi</a></h4>
                        <p>Audi với các dòng xe này đều được thiết kế mang đến một phong cách sang trọng, lịch lãm nhưng
                            vẫn rất gọn gàng, động cơ mạnh mẽ.</p>
                    </div>
                    <div class="right-side col-xs-12 col-sm-4">
                        <p><a href="#">1 Sản phẩm</a></p>
                        <a href="{{ route('temp.auto-show.single') }}" title="Online Reservation"
                            class="btn btn1 btn-primary btn-normal btn-inline " target="_self">Xem Sản Phẩm</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="brand_box">
                    <div class="left-side col-xs-12 col-sm-3">
                        <img src="{{ asset('templates/auto-show/images/g-star-raw.jpg') }}" alt="" />
                    </div>
                    <div class="middle-side col-xs-12 col-sm-5">
                        <h4><a href="#">Lamborghini</a></h4>
                        <p>Lamborghini là thương hiệu xe thể thao cao cấp đến từ Ý, là một trong những hãng xe sản xuất siêu
                            xe nổi tiếng và có giá đắt nhất trên thế giới.</p>
                    </div>
                    <div class="right-side col-xs-12 col-sm-4">
                        <p><a href="#">1 Sản phẩm</a></p>
                        <a href="{{ route('temp.auto-show.single') }}" title="Online Reservation"
                            class="btn btn1 btn-primary btn-normal btn-inline " target="_self">Xem Sản Phẩm</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="brand_box">
                    <div class="left-side col-xs-12 col-sm-3">
                        <img src="{{ asset('templates/auto-show/images/weekday1.jpg') }}" alt="" />
                    </div>
                    <div class="middle-side col-xs-12 col-sm-5">
                        <h4><a href="#">Porsche</a></h4>
                        <p>Porsche là một trong các hãng ô tô tại Việt Nam có thương hiệu xe hạng sang đến từ Đức, được
                            thành lập tại TPHCM vào năm 2007 và tại Hà Nội vào năm 2012.</p>
                    </div>
                    <div class="right-side col-xs-12 col-sm-4">
                        <p><a href="#">1 Sản Phẩm</a></p>
                        <a href="{{ route('temp.auto-show.single') }}" title="Online Reservation"
                            class="btn btn1 btn-primary btn-normal btn-inline " target="_self">Xem Sản Phẩm</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            @include('templates.auto-show..components.relatedproduct')
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection
