@extends('templates.classicstyle.master')
@section('title', 'Classic Style')
@section('content')
    <!--banner-->
    <div class="banner-top">
        <div class="container">
            <h2>Sản phẩm</h2>
            <h3><a href={{ route('temp.classicstyle.index') }}>Trang Chủ</a><label>/</label>Sản Phẩm<label>/</label>Thời Trang Nữ</h3>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--content-->
    <div class="product">
        <div class="container">
            @include('templates.classicstyle.slidebar')
            <div class="col-md-9 " data-wow-delay=".5s">
                <div class="mens-toolbar">
                    <p>Hiện 1–9 trong 21 kết quả</p>

                    <p class="showing">Lọc Theo
                        <select>
                            <option value=""> Tên</option>
                            <option value=""> Đánh giá</option>
                            <option value=""> Màu sắc </option>
                            <option value=""> Giá </option>
                        </select>
                    </p>
                    <p>Hiển thị
                        <select>
                            <option value=""> 9</option>
                            <option value=""> 10</option>
                            <option value=""> 11 </option>
                            <option value=""> 12 </option>
                        </select>
                    </p>
                    <div class="clearfix"></div>
                </div>

                <div class="mid-popular">
                    @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr1.jpg','img2'=>'/templates/classicstyle/img/pr.jpg',
                    'name'=>'Áo Thun Hồng Nữ','price'=>'500000','pricefake'=>'600000','href'=>'/temp/classicstyle/single'])
                    @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr3.jpg','img2'=>'/templates/classicstyle/img/pr2.jpg',
                    'name'=>'Quần Jean Nữ','price'=>'600000','pricefake'=>'650000','href'=>'/temp/classicstyle/single'])
                    @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr5.jpg','img2'=>'/templates/classicstyle/img/pr4.jpg',
                    'name'=>'Túi Xách Thời Trang','price'=>'700000','pricefake'=>'750000','href'=>'/temp/classicstyle/single'])
                    @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr12.jpg','img2'=>'/templates/classicstyle/img/pr13.jpg',
                    'name'=>'Sandal Nữ', 'price'=>'300000','pricefake'=>'350000','href'=>'/temp/classicstyle/single'])
                    @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr15.jpg','img2'=>'/templates/classicstyle/img/pr14.jpg',
                    'name'=>'Đồng hồ trẻ em','price'=>'500000','pricefake'=>'550000','href'=>'/temp/classicstyle/single'])
                    @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr17.jpg','img2'=>'/templates/classicstyle/img/pr16.jpg',
                    'name'=>'Áo Khoác Jean Nữ','price'=>'800000','pricefake'=>'830000','href'=>'/temp/classicstyle/single'])
                    @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr19.jpg','img2'=>'/templates/classicstyle/img/pr18.jpg',
                    'name'=>'Váy Thời Trang','price'=>'900000','pricefake'=>'930000','href'=>'/temp/classicstyle/single'])
                    @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr21.jpg','img2'=>'/templates/classicstyle/img/pr20.jpg',
                    'name'=>'Giày Nam','price'=>'1000000','pricefake'=>'1600000','href'=>'/temp/classicstyle/single'])
                    @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr23.jpg','img2'=>'/templates/classicstyle/img/pr22.jpg',
                    'name'=>'Đồng Hồ Nữ','price'=>'1500000','pricefake'=>'1600000','href'=>'/temp/classicstyle/single'])
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--//products-->

@endsection
