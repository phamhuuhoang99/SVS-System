@extends('templates.auto-show.master')
@section('title', 'Auto Show')
@section('content')
    @include('templates.auto-show.men_banner')
    <div class="men">
        <div class="container">
            <div class="col-md-9 single_top">
                <div class="single_left">
                    <div class="labout span_1_of_a1">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="{{ asset('templates/auto-show/images/s1.jpg') }}">
                                    <div class="thumb-image"> <img src="{{ asset('templates/auto-show/images/s1.jpg') }}"
                                            data-imagezoom="true" class="img-responsive"> </div>
                                </li>
                                <li data-thumb="{{ asset('templates/auto-show/images/s2.jpg') }}">
                                    <div class="thumb-image"> <img src="{{ asset('templates/auto-show/images/s2.jpg') }}"
                                            data-imagezoom="true" class="img-responsive"> </div>
                                </li>
                                <li data-thumb="{{ asset('templates/auto-show/images/s3.jpg') }}">
                                    <div class="thumb-image"> <img src="{{ asset('templates/auto-show/images/s3.jpg') }}"
                                            data-imagezoom="true" class="img-responsive"> </div>
                                </li>
                                <li data-thumb="{{ asset('templates/auto-show/images/s4.jpg') }}">
                                    <div class="thumb-image"> <img src="{{ asset('templates/auto-show/images/s4.jpg') }}"
                                            data-imagezoom="true" class="img-responsive"> </div>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="cont1 span_2_of_a1">
                        <h1>Lamborghini</h1>
                        <p class="availability">Trạng thái: <span class="color">Còn hàng</span></p>
                        <div class="price_single">
                            <span class="actual">500.000.000VNĐ - 800.000.000VNĐ</span>
                        </div>
                        <h2 class="quick">Giới thiệu:</h2>
                        <p class="quick_desc"> Lamborghini là thương hiệu xe thể thao cao cấp đến từ Ý, là một trong những
                            hãng xe sản xuất siêu xe nổi tiếng và có giá đắt nhất trên thế giới.</p>
                        <div class="wish-list">
                            <ul>
                                <li class="wish"><a href="#">Yêu thích</a></li>
                                <li class="compare"><a href="#">So sánh xe</a></li>
                            </ul>
                        </div>
                        <div class="tags">
                            <h5>Danh mục : Ô tô </h5>
                            {{-- <h4>Tag : Lorem ipsum,Sed perspiciatis.</h4>
                            --}}
                        </div>
                        <div class="quantity_box">
                            <ul class="single_social">
                                <li><a href="#"><i class="fb1"> </i> </a></li>
                                <li><a href="#"><i class="tw1"> </i> </a></li>
                                <li><a href="#"><i class="g1"> </i> </a></li>
                                <li><a href="#"><i class="linked"> </i> </a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <a href="#" title="Online Reservation" class="btn btn-primary btn-normal btn-inline "
                            target="_self">Đặt Hàng</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Mô tả sản phẩm</span>
                            </li>
                            <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Thông tin chi tiết</span>
                            </li>
                            <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Đánh giá</span></li>
                            <div class="clear"></div>
                        </ul>
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="facts">
                                    <ul class="tab_list">
                                        <li><a href="#">Chậm rãi "Nhìn","Chạm" và "Cảm nhận"hơi thở sành điệu, tự tin trong
                                                thiết kế KODO của mẫu xe thế hệ mới. Mẫu xe hướng bạn đến hình mẫu mà bạn
                                                khao khát.</a>
                                        </li>
                                        <li><a href="#">Một chiếc xe có thể lay động cảm xúc và gợi lên sự thích thú ngay từ ánh nhìn đầu tiên.</a></li>
                                        <li><a href="#">Lái xe dễ dàng ngay cả khi người dùng chưa đủ tự tin để lái xe.</a>
                                        </li>
                                        <li><a href="#">Lái xe với tâm trí thoải mái và tích cực, mang lại cảm hứng và sức sống.</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="facts">
                                    <ul class="tab_list">
                                        <li><a href="#">Chậm rãi "Nhìn","Chạm" và "Cảm nhận"hơi thở sành điệu, tự tin trong
                                            thiết kế KODO của mẫu xe thế hệ mới. Mẫu xe hướng bạn đến hình mẫu mà bạn
                                            khao khát.</a>
                                    </li>
                                    <li><a href="#">Một chiếc xe có thể lay động cảm xúc và gợi lên sự thích thú ngay từ ánh nhìn đầu tiên.</a></li>
                                    <li><a href="#">Lái xe dễ dàng ngay cả khi người dùng chưa đủ tự tin để lái xe.</a>
                                    </li>
                                    <li><a href="#">Lái xe với tâm trí thoải mái và tích cực, mang lại cảm hứng và sức sống.</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                <ul class="tab_list">
                                    <li><a href="#">Chậm rãi "Nhìn","Chạm" và "Cảm nhận"hơi thở sành điệu, tự tin trong
                                        thiết kế KODO của mẫu xe thế hệ mới. Mẫu xe hướng bạn đến hình mẫu mà bạn
                                        khao khát.</a>
                                </li>
                                <li><a href="#">Một chiếc xe có thể lay động cảm xúc và gợi lên sự thích thú ngay từ ánh nhìn đầu tiên.</a></li>
                                <li><a href="#">Lái xe dễ dàng ngay cả khi người dùng chưa đủ tự tin để lái xe.</a>
                                </li>
                                <li><a href="#">Lái xe với tâm trí thoải mái và tích cực, mang lại cảm hứng và sức sống.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('templates.auto-show.components.relatedproduct')
            <div class="clearfix"> </div>
        </div>
    </div>

@endsection
