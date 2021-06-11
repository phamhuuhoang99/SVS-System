@extends('templates.eliteshoppy.master')
@section('title','Elite Shoppy')
@section('content')
    <!-- /banner_bottom_agile_info -->
    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>Women's <span>Wear  </span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href={{ route("temp.eliteshoppy.index") }}>Home</a><i>|</i></li>
                        <li>Women's Wear</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>

    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <!-- mens -->
            @include('templates.eliteshoppy.slidebar')
            <div class="col-md-8 products-right">
                <h5>Kết <span>Quả(0)</span></h5>
            <div class="sort-grid">
                <div class="sorting">
                    <h6>Lọc Theo</h6>
                    <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
					<option value="null">Mặc định</option>
					<option value="null">Tên(A - Z)</option>
					<option value="null">Tên(Z - A)</option>
					<option value="null">Giá(Cao - Thấp)</option>
					<option value="null">Giá(Thấp - Cao)</option>
					<option value="null">Kiểu(A - Z)</option>
					<option value="null">Kiểu(Z - A)</option>
				</select>
                    <div class="clearfix"></div>
                </div>
                <div class="sorting">
                    <h6>Hiển thị</h6>
                    <select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
					<option value="null">7</option>
					<option value="null">14</option>
					<option value="null">28</option>
					<option value="null">35</option>
				</select>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
                <div class="men-wear-top">

                    <div id="top" class="callbacks_container">
                        <ul class="rslides" id="slider3">
                            <li>
                                <img class="img-responsive" src={{ asset("templates/eliteshoppy/img/banner4.jpg") }} alt=" " />
                            </li>
                            <li>
                                <img class="img-responsive" src={{ asset("templates/eliteshoppy/img/banner3.jpg") }} alt=" " />
                            </li>
                            <li>
                                <img class="img-responsive" src={{ asset("templates/eliteshoppy/img/banner1.jpg") }} alt=" " />
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="men-wear-bottom">
                    <div class="col-sm-4 men-wear-left">
                        <img class="img-responsive" src={{ asset("templates/eliteshoppy/img/bb1.jpg") }} alt=" " />
                    </div>
                    <div class="col-sm-8 men-wear-right">
                        <h4><span>Bộ sưu tập</span> Thời Trang Nữ</h4>
                        <p>Thiết kế trẻ trung, năng động, thiết kế in hình độc đáo, gia công sắc sảo. Sản phẩm may từ chất liệu vải thun Mỹ cao cấp, được biết đến với đặc tính thấm hút mồ hôi tốt, thoáng mát ngay cả trong điều kiện thời thiết nóng bức cho form áo đứng, sang trọng.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w1.jpg','name'=>'Váy đen A-Line','price'=>'800000','pricefake'=>'900000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'4'])
                @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w2.jpg','name'=>'Áo Ngắn Tay Nữ','price'=>'1200000','pricefake'=>'1350000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'4'])
                @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w3.jpg','name'=>'Quần Jeans bó','price'=>'1250000','pricefake'=>'1300000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'4'])

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>

            <div class="single-pro">
                @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w4.jpg','name'=>'Quần Short đen','price'=>'500000','pricefake'=>'600000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w5.jpg','name'=>'Quần Tây Hồng Nữ','price'=>'600000','pricefake'=>'650000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w6.jpg','name'=>'Đồng hồ Analog','price'=>'3000000','pricefake'=>'3500000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w7.jpg','name'=>'Tất Cổ Dài Đen','price'=>'300000','pricefake'=>'320000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w8.jpg','name'=>'Quần nữ Reebok','price'=>'1000000','pricefake'=>'1100000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w1.jpg','name'=>'Váy đen A-Line','price'=>'800000','pricefake'=>'900000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w2.jpg','name'=>'Áo Ngắn Tay Nữ','price'=>'1200000','pricefake'=>'1350000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                    @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/w3.jpg','name'=>'Quần Jeans bó','price'=>'1250000','pricefake'=>'1300000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //mens -->
    @include('templates.eliteshoppy.grids')
@endsection
