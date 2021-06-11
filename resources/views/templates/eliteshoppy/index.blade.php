@extends('templates.eliteshoppy.master')
@section('title','Elite Shoppy')
@section('content')
<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        <li data-target="#myCarousel" data-slide-to="4" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Giảm Giá <span>Khủng</span></h3>
                    <p>Đặc biệt trong ngày hôm nay</p>
                    <a class="hvr-outline-out button2" href={{ route("temp.eliteshoppy.mens") }}>Mua Ngay </a>
                </div>
            </div>
        </div>
        <div class="item item2">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Thời Trang <span>Mùa Hè</span></h3>
                    <p>Giảm Giá Sản Phẩm Mới</p>
                    <a class="hvr-outline-out button2" href={{ route("temp.eliteshoppy.mens") }}>Mua Ngay </a>
                </div>
            </div>
        </div>
        <div class="item item3">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Giảm giá <span>Khủng</span></h3>
                    <p>Đặc biệt trong ngày hôm nay</p>
                    <a class="hvr-outline-out button2" href={{ route("temp.eliteshoppy.mens") }}>Mua Ngay </a>
                </div>
            </div>
        </div>
        <div class="item item4">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Thời Trang <span>Mùa Hè</span></h3>
                    <p>Giảm giá sản phẩm mới</p>
                    <a class="hvr-outline-out button2" href={{ route("temp.eliteshoppy.mens") }}>Mua Ngay </a>
                </div>
            </div>
        </div>
        <div class="item item5">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Giảm giá <span>Khủng</span></h3>
                    <p>Đặc biệt trong ngày hôm nay</p>
                    <a class="hvr-outline-out button2" href={{ route("temp.eliteshoppy.mens") }}>Mua Ngay </a>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!-- The Modal -->
</div>
<!-- //banner -->
<div class="banner_bottom_agile_info">
    <div class="container">
        <div class="banner_bottom_agile_info_inner_w3ls">
            <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                <figure class="effect-roxy">
                    <img src={{ asset("templates/eliteshoppy/img/bottom1.jpg") }} alt=" " class="img-responsive" />
                    <figcaption>
                        <h3><span>Đ</span>ặt Gạch</h3>
                        <p>Hàng mới về</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                <figure class="effect-roxy">
                    <img src={{ asset("templates/eliteshoppy/img/bottom2.jpg") }} alt=" " class="img-responsive" />
                    <figcaption>
                        <h3><span>Đ</span>ặt Gạch</h3>
                        <p>Hàng mới về</p>
                    </figcaption>
                </figure>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@include('templates.eliteshoppy.extendsindex')

<!-- /new_arrivals -->
<div class="new_arrivals_agile_w3ls_info">
    <div class="container">
        <h3 class="wthree_text_info"><span>Sản phẩm </span>Mới</h3>
        <div id="horizontalTab">
            <ul class="resp-tabs-list">
                <li> Đồ Nam</li>
                <li> Đồ Nữ</li>
                <li> Balo-Túi</li>
                <li> Giày-Dép</li>
            </ul>
            <div class="resp-tabs-container">
                <!--/tab_one-->
                <div class="tab1">
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/m1.jpg','name'=>'Áo sơ mi Xanh','price'=>'1150000','pricefake'=>'1725000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/m2.jpg','name'=>'Áo Hoodie Nam','price'=>'1500000','pricefake'=>'1700000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/m3.jpg','name'=>'Quần Joker Nam','price'=>'1200000','pricefake'=>'1350000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/m4.jpg','name'=>'Áo Thun Cổ Tròn','price'=>'1450000','pricefake'=>'1550000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/m5.jpg','name'=>'Quần Jeans Nam','price'=>'800000','pricefake'=>'1000000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/m7.jpg','name'=>'Đồng Hồ Analog','price'=>'2500000','pricefake'=>'2650000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/m6.jpg','name'=>'Thắt lưng da','price'=>'600000','pricefake'=>'700000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/m8.jpg','name'=>'Áo Vest Nam','price'=>'1000000','pricefake'=>'1100000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                <!--//tab_one-->
                <!--/tab_two-->
                </div>
                <div class="tab2">
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w1.jpg','name'=>'Váy đen A-Line','price'=>'800000','pricefake'=>'900000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w2.jpg','name'=>'Áo Ngắn Tay Nữ','price'=>'1200000','pricefake'=>'1350000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w3.jpg','name'=>'Quần Jeans bó','price'=>'1250000','pricefake'=>'1300000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w4.jpg','name'=>'Quần Short đen','price'=>'500000','pricefake'=>'600000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w5.jpg','name'=>'Quần Tây Hồng Nữ','price'=>'600000','pricefake'=>'650000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w6.jpg','name'=>'Đồng hồ Analog','price'=>'3000000','pricefake'=>'3500000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w7.jpg','name'=>'Tất Cổ Dài Đen','price'=>'300000','pricefake'=>'320000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w8.jpg','name'=>'Quần nữ Reebok','price'=>'1000000','pricefake'=>'1100000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    <div class="clearfix"></div>
                </div>
                <!--//tab_two-->
                <div class="tab3">
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/b1.jpg','name'=>'Cặp đựng laptop da','price'=>'2000000','pricefake'=>'2200000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/b2.jpg','name'=>'Balo Puma','price'=>'800000','pricefake'=>'900000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/b3.jpg','name'=>'Balo đựng laptop','price'=>'700000','pricefake'=>'800000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/b4.jpg','name'=>'Túi xách du lịch','price'=>'1300000','pricefake'=>'1350000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/b5.jpg','name'=>'Túi cầm tay','price'=>'900000','pricefake'=>'950000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/b6.jpg','name'=>'Túi bướm','price'=>'600000','pricefake'=>'700000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/b7.jpg','name'=>'Túi Thụy Sỹ','price'=>'3300000','pricefake'=>'4000000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/b8.jpg','name'=>'Túi cao cấp','price'=>'5000000','pricefake'=>'7000000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    <div class="clearfix"></div>
                </div>
                <div class="tab4">
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/s1.jpg','name'=>'Giày Da Cao Cấp','price'=>'3300000','pricefake'=>'3500000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/s2.jpg','name'=>'Giày Chạy Bộ','price'=>'800000','pricefake'=>'850000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/s3.jpg','name'=>'Giày đen','price'=>'1300000','pricefake'=>'1350000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/s4.jpg','name'=>'Dép Lào Nữ','price'=>'800000','pricefake'=>'830000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/s5.jpg','name'=>'Giày Búp Bê','price'=>'1300000','pricefake'=>'1350000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/s6.jpg','name'=>'Giàu đế mềm','price'=>'1200000','pricefake'=>'1350000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/s7.jpg','name'=>'Giày vải Thể Thao','price'=>'1300000','pricefake'=>'1350000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/s8.jpg','name'=>'Giày Cao giót','price'=>'2500000','pricefake'=>'3000000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //new_arrivals -->
<!-- /we-offer -->
@include('templates.eliteshoppy.offer')
<!-- //we-offer -->
@include('templates.eliteshoppy.grids')
@endsection