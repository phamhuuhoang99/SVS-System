@extends('templates.classicstyle.master') @section('title','Classic Style') @section('content')
<!--banner-->
<div class="banner-top">
    <div class="container">
        <h2>Chi tiết</h2>
        <h3><a href={{ route("temp.classicstyle.index") }}>Trang Chủ</a><label>/</label>Chi Tiết</h3>
        <div class="clearfix"> </div>
    </div>
</div>
<!--content-->
<div class="product">
    <div class="container">
        @include('templates.classicstyle.slidebar')
        <div class="col-md-9 animated wow fadeInRight" data-wow-delay=".5s">
            <div class="col-md-5 grid-im">
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb={{ asset( "templates/classicstyle/img/si.jpg") }}>
                            <div class="thumb-image"> <img src={{ asset( "templates/classicstyle/img/si.jpg") }} data-imagezoom="true" class="img-responsive"> </div>
                        </li>
                        <li data-thumb={{ asset( "templates/classicstyle/img/si1.jpg") }}>
                            <div class="thumb-image"> <img src={{ asset( "templates/classicstyle/img/si1.jpg") }} data-imagezoom="true" class="img-responsive"> </div>
                        </li>
                        <li data-thumb={{ asset( "templates/classicstyle/img/si2.jpg") }}>
                            <div class="thumb-image"> <img src={{ asset( "templates/classicstyle/img/si2.jpg") }} data-imagezoom="true" class="img-responsive"> </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7 single-top-in">
                <div class="span_2_of_a1 simpleCart_shelfItem">
                    <h3>Đồng hồ Diamond D - Nữ</h3>
                    <p class="in-para"> Giá niêm yết.</p>
                    <div class="price_single">
                        <span class="reducedfrom item_price">đ2.000.000</span>
                        <a href="#" data-text="Thêm vào giỏ" class="but-hover1 item_add">Thêm vào giỏ</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!----- tabs-box ---->
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>Chi Tiết Sản Phẩm</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Thêm Thông Tin</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Nhận Xét</span></li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="resp-tabs-container">
                            <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Chi Tiết Sản Phẩm</h2>
                            <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                <div class="facts">
                                    <p> Thương hiệu: Đồng hồ Diamond D </p>
                                    <ul>
                                        <li>Kiểu dáng: Đồng hồ nữ</li>
                                        <li>Máy: Quartz</li>
                                        <li>Chất liệu vỏ: Hợp kim , đính đá swarovsky</li>
                                        <li>Chất liệu dây: Dây da</li>
                                        <li>Mặt kính: Sapphire ( Kính chống trầy )</li>
                                        <li>Đường kính mặt: 37mm</li>
                                    </ul>
                                </div>

                            </div>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Thêm Thông Tin </h2>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="facts1">

                                    <div class="color">
                                        <p>Màu</p>
                                        <span>Xanh, Đen, Đỏ</span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="color">
                                        <p>Size</p>
                                        <span>S, M, L, XL</span>
                                        <div class="clearfix"></div>
                                    </div>

                                </div>

                            </div>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Nhận xét</h2>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                <div class="comments-top-top">
                                    <div class="top-comment-left">
                                        <img class="img-responsive" src={{ asset( "templates/classicstyle/img/co.png") }} alt="">
                                    </div>
                                    <div class="top-comment-right">
                                        <h6><a href="#">Nguyễn Phong Khoa</a> - 03/07/2020</h6>
                                        <p>Tuyệt vời!</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                    <a class="add-re" href={{ route("temp.classicstyle.single") }}>Thêm Nhận xét</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!----->
            <div class="clearfix"> </div>
            <div class=" col-md-si">
                @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr1.jpg','img2'=>'/templates/classicstyle/img/pr.jpg','name'=>'Áo Thun Hồng Nữ','price'=>'500000','pricefake'=>'600000','href'=>'/temp/classicstyle/single'])
                @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr3.jpg','img2'=>'/templates/classicstyle/img/pr2.jpg','name'=>'Quần Jean Nữ','price'=>'600000','pricefake'=>'650000','href'=>'/temp/classicstyle/single'])
                @include('templates.classicstyle.item',['img1'=>'/templates/classicstyle/img/pr5.jpg','img2'=>'/templates/classicstyle/img/pr4.jpg','name'=>'Túi Xách Thời Trang','price'=>'700000','pricefake'=>'750000','href'=>'/temp/classicstyle/single'])
                <div class="clearfix"> </div>
            </div>
        </div class="clearfix">
    </div>
</div>
</div>
<!--//products-->
@endsection