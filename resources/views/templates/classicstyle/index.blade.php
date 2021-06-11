@extends('templates.classicstyle.master')
@section('title','Classic Style')
@section('content')
<!-- banner -->
<div class="banner">
    <div class="banner-right">
        <ul id="flexiselDemo2">
            <li>
                <div class="banner-grid">
                    <h2>Sản Phẩm Nổi Bật</h2>
                    <div class="wome">
                        <a href={{ route( "temp.classicstyle.single") }} ><img class="img-responsive" src={{ asset( "templates/classicstyle/img/bi.jpg") }} alt="" />
                        </a>
                        <div class="women simpleCart_shelfItem">
                            <a href="#" ><img src={{ asset( "templates/classicstyle/img/ll.png") }} alt=""></a>
                            <h6><a href={{ route( "temp.classicstyle.single") }} >Kính mát Nam</a></h6>
                            <p class="ba-price"><del>đ500000</del><em class="item_price">đ400000</em></p>
                            <a href="#" data-text="Thêm Vào Giỏ" class="but-hover1 item_add">Thêm Vào Giỏ</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-grid">
                    <h2>Sản Phẩm Nổi Bật</h2>
                    <div class="wome">
                        <a href={{ route( "temp.classicstyle.single") }} ><img class="img-responsive" src={{ asset( "templates/classicstyle/img/bi2.jpg") }} alt="" />
                        </a>
                        <div class="women simpleCart_shelfItem">
                            <a href="#" ><img src={{ asset( "templates/classicstyle/img/ll.png") }} alt=""></a>
                            <h6><a href={{ route( "temp.classicstyle.single") }} >Áo Thun Nữ</a></h6>
                            <p class="ba-price"><del>đ400000</del><em class="item_price">đ300000</em></p>
                            <a href="#" data-text="Thêm Vào Giỏ" class="but-hover1 item_add">Thêm Vào Giỏ</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner-grid">
                    <h2>Sản Phẩm Nổi Bật</h2>
                    <div class="wome">
                        <a href={{ route( "temp.classicstyle.single") }} ><img class="img-responsive" src={{ asset( "templates/classicstyle/img/bi1.jpg") }} alt="" />
                        </a>
                        <div class="women simpleCart_shelfItem">
                            <a href="#" ><img src={{ asset( "templates/classicstyle/img/ll.png") }} alt=""></a>
                            <h6><a href={{ route( "temp.classicstyle.single") }} >Vòng tay Nữ</a></h6>
                            <p class="ba-price"><del>đ250000</del><em class="item_price">đ200000</em></p>
                            <a href="#" data-text="Thêm Vào Giỏ" class="but-hover1 item_add">Thêm Vào Giỏ</a>
                        </div>
                    </div>
                </div>
            </li>


        </ul>
    </div>
</div>

</div>
<!-- //banner -->
<!--content-->
<div class="content">
    <div class="content-head">

        <div class="col-md-6 col-m1 animated wow fadeInLeft" data-wow-delay=".1s">
            <div class="col-1">
                <div class="col-md-6 col-2">
                    <a href={{ route( "temp.classicstyle.single") }} ><img src={{ asset( "templates/classicstyle/img/pi3.jpg") }} class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-p">
                    <h5>Bộ Sưu Tập</h5>
                    <p>Thiết kế thời trang mang phong cách mạnh mẽ và năng động. Giá cả tốt nhất thị trường nếu cùng chất lượng</p>
                    <a href={{ route( "temp.classicstyle.single") }} class="shop" data-hover="Shop Now">Mua Ngay</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-1">
                <div class="col-md-6 col-p">
                    <h5>Bộ Sưu Tập</h5>
                    <p>Thiết kế thời trang mang phong cách mạnh mẽ và năng động. Giá cả tốt nhất thị trường nếu cùng chất lượng</p>
                    <a href={{ route( "temp.classicstyle.single") }} class="shop" data-hover="Shop Now">Mua Ngay</a>
                </div>
                <div class="col-md-6 col-2">
                    <a href={{ route( "temp.classicstyle.single") }} ><img src={{ asset( "templates/classicstyle/img/pi.jpg") }} class="img-responsive" alt="">
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="col-md-6 col-m2 animated wow fadeInRight" data-wow-delay=".1s">

            <!-- start content_slider -->
            <div id="owl-demo" class="owl-carousel">
                <div class="item">

                    <a href={{ route( "temp.classicstyle.single") }} ><img class="img-responsive" src={{ asset( "templates/classicstyle/img/bb.png") }} alt="" /></a>
                    <a href={{ route( "temp.classicstyle.single") }} class="shop-2">Mua Ngay</a>

                </div>
                <div class="item">

                    <a href={{ route( "temp.classicstyle.single") }} ><img class="img-responsive" src={{ asset( "templates/classicstyle/img/bb1.png") }} alt="" /></a>
                    <a href={{ route( "temp.classicstyle.single") }} class="shop-2">Mua Ngay</a>

                </div>

                <div class="item">

                    <a href={{ route( "temp.classicstyle.single") }} ><img class="img-responsive" src={{ asset( "templates/classicstyle/img/bb.png") }} alt="" /> </a>
                    <a href={{ route( "temp.classicstyle.single") }} class="shop-2">Mua Ngay</a>

                </div>
                <div class="item">

                    <a href={{ route( "temp.classicstyle.single") }} ><img class="img-responsive" src={{ asset( "templates/classicstyle/img/bb1.png") }} alt="" /></a>
                    <a href={{ route( "temp.classicstyle.single") }} class="shop-2">Mua Ngay</a>

                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<!---->

<div class="content-top">
    <div class="col-md-5 col-md1 animated wow fadeInLeft" data-wow-delay=".1s">
        <div class="col-3">
            <a href={{ route( "temp.classicstyle.single") }} ><img src={{ asset( "templates/classicstyle/img/pi1.jpg") }} class="img-responsive " alt="">
                <div class="col-pic">
                    <h5> Thời Trang Nữ</h5>
                    <p>Trẻ trung, năng động, hiện đại</p>
                </div>
            </a>
        </div>

    </div>
    <div class="col-md-7 col-md2 animated wow fadeInRight" data-wow-delay=".1s">
        @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr1.jpg','img2'=>'/templates/classicstyle/img/pr.jpg','name'=>'Áo Thun Hồng Nữ','price'=>'500000','pricefake'=>'600000','href'=>'/temp/classicstyle/single'])
        @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr3.jpg','img2'=>'/templates/classicstyle/img/pr2.jpg','name'=>'Quần Jean Nữ','price'=>'600000','pricefake'=>'650000','href'=>'/temp/classicstyle/single'])
        @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr5.jpg','img2'=>'/templates/classicstyle/img/pr4.jpg','name'=>'Túi Xách Thời Trang','price'=>'700000','pricefake'=>'750000','href'=>'/temp/classicstyle/single'])
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
<!----->
<!---->
<div class="content-top">

    <div class="col-md-7 col-md2 animated wow fadeInLeft" data-wow-delay=".1s">
        @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr6.jpg','img2'=>'/templates/classicstyle/img/pr7.jpg','name'=>'Đồng Hồ  Nam','price'=>'2500000','pricefake'=>'2600000','href'=>'/temp/classicstyle/single'])
                @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr9.jpg','img2'=>'/templates/classicstyle/img/pr8.jpg','name'=>'Áo Thun Đen Nam ','price'=>'500000','pricefake'=>'600000','href'=>'/temp/classicstyle/single'])
                @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr10.jpg','img2'=>'/templates/classicstyle/img/pr11.jpg','name'=>'Giày Chạy Bộ','price'=>'800000','pricefake'=>'900000','href'=>'/temp/classicstyle/single'])
        <div class="clearfix"></div>
    </div>
    <div class="col-md-5 col-md1 animated wow fadeInRight" data-wow-delay=".1s">
        <div class="col-3">
            <a href={{ route( "temp.classicstyle.single") }} ><img src={{ asset( "templates/classicstyle/img/pi2.jpg") }} class="img-responsive " alt="">
                <div class="col-pic">
                    <h5> Thời Trang Nam</h5>
                    <p>Trẻ trung, năng động, hiện đại</p>
                </div>
            </a>
        </div>

    </div>
    <div class="clearfix"></div>
</div>
@endsection