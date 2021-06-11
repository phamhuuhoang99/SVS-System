@extends('templates.classicstyle.master')
@section('title','Classic Style')
@section('content')
<!--banner-->
<div class="banner-top">
    <div class="container">
        <h2>Sản phẩm</h2>
        <h3><a href={{ route("temp.classicstyle.index") }}>Trang Chủ</a><label>/</label>Sản Phẩm<label>/</label>Thời Trang Nam</h3>
        <div class="clearfix"> </div>
    </div>
</div>
<!--content-->
<div class="product">
    <div class="container">
        @include('templates.classicstyle.slidebar')
        <div class="col-md-9">
            <div class="mens-toolbar">
                <p>Hiện 1–9 trong 21 kết quả</p>

                <p class="showing">Lọc theo
                    <select>
			            <option value=""> Tên</option>
			            <option value="">  Đánh giá</option>
			            <option value=""> Màu sắc </option>
			            <option value=""> Giá </option>
			        </select>
                </p>
                <p>Hiện thị
                    <select>
			        	<option value=""> 9</option>
			        	<option value="">  10</option>
			        	<option value=""> 11 </option>
			        	<option value=""> 12 </option>
			        </select>
                </p>


                <div class="clearfix"></div>
            </div>

            <div class="mid-popular">
                @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr6.jpg','img2'=>'/templates/classicstyle/img/pr7.jpg','name'=>'Đồng Hồ  Nam','price'=>'2500000','pricefake'=>'2600000','href'=>'/temp/classicstyle/single'])
                @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr9.jpg','img2'=>'/templates/classicstyle/img/pr8.jpg','name'=>'Áo Thun Đen Nam ','price'=>'500000','pricefake'=>'600000','href'=>'/temp/classicstyle/single'])
                @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr10.jpg','img2'=>'/templates/classicstyle/img/pr11.jpg','name'=>'Giày Chạy Bộ','price'=>'800000','pricefake'=>'900000','href'=>'/temp/classicstyle/single'])
                @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr25.jpg','img2'=>'/templates/classicstyle/img/pr24.jpg','name'=>'Sandal Nam','price'=>'900000','pricefake'=>'1000000','href'=>'/temp/classicstyle/single'])
                @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr27.jpg','img2'=>'/templates/classicstyle/img/pr26.jpg','name'=>'Quần Jean Nam','price'=>'550000','pricefake'=>'590000','href'=>'/temp/classicstyle/single'])
                @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr29.jpg','img2'=>'/templates/classicstyle/img/pr28.jpg','name'=>'Kính mát','price'=>'200000','pricefake'=>'250000','href'=>'/temp/classicstyle/single'])
                @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr9.jpg','img2'=>'/templates/classicstyle/img/pr8.jpg','name'=>'Áo Thun Đen Nam ','price'=>'500000','pricefake'=>'600000','href'=>'/temp/classicstyle/single'])
                @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr10.jpg','img2'=>'/templates/classicstyle/img/pr11.jpg','name'=>'Giày Chạy Bộ','price'=>'800000','pricefake'=>'900000','href'=>'/temp/classicstyle/single'])
                @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr6.jpg','img2'=>'/templates/classicstyle/img/pr7.jpg','name'=>'Đồng Hồ Thời Trang Nam','price'=>'2500000','pricefake'=>'2600000','href'=>'/temp/classicstyle/single'])
                <div class="clearfix"></div>
            </div>
        </div>

    </div class="clearfix">
</div>
</div>
<!--//products-->
@endsection