@extends('templates.gorocystore.master')
@section('title', 'Cửa hàng tạp hóa điện tử trực tuyến')
@section('content')
<!-- banner -->
<div class="banner">
    @include('templates.gorocystore.leftbanner')
    <div class="w3l_banner_nav_right">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="w3l_banner_nav_right_banner">
                            <h3>Bách hóa online <span>Tiệc SALE</span> thương hiệu.</h3>
                            <div class="more">
                                <a href="{{ route('temp.gorocystore.products') }}" class="button--saqui button--round-l button--text-thick" data-text="Mua ngay">Mua ngay</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner1">
                            <h3>bách hóa online <span>tiệc sale</span> thương hiệu.</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Mua ngay">Mua ngay</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner2">
                            <h3>Giảm đến <i>50%</i>Tuần lễ vàng.</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Mua ngay">Mua ngay</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- flexSlider -->
        <link rel="stylesheet" href={{ URL::asset("templates/gorocystore/css/flexslider.css") }} type="text/css" media="screen" property="" />
        <script defer src={{ URL::asset("templates/gorocystore/js/jquery.flexslider.js") }}></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->
    </div>
    <div class="clearfix"></div>
</div>
<!-- banner -->
<div class="banner_bottom">
    <div class="wthree_banner_bottom_left_grid_sub">
    </div>
    <div class="wthree_banner_bottom_left_grid_sub1">
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="/templates/gorocystore/images/4.jpg" alt=" " class="img-responsive" />
                <div class="wthree_banner_bottom_left_grid_pos">
                    <h4>Giảm đến <span>25%</span></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="/templates/gorocystore/images/5.jpg" alt=" " class="img-responsive" />
                <div class="wthree_banner_btm_pos">
                    <h3>đặt gạch <span>chặt giá</span><i>-50%</i></h3>
                </div>
            </div>
        </div>
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="/templates/gorocystore/images/6.jpg" alt=" " class="img-responsive" />
                <div class="wthree_banner_btm_pos1">
                    <h3>Tiết kiệm <span>lên đến</span> 250.000đ</h3>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h3>Ưu Đãi Khủng</h3>
        <div class="agile_top_brands_grids">
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="tag"><img src="/templates/gorocystore/images/tag.png" alt=" " class="img-responsive" /></div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img title=" " alt=" " src="/templates/gorocystore/images/1.png" /></a>
                                        <p>Dầu sunflower</p>
                                        <h4>200.000đ  <span>250.000đ </span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="{{ route('temp.gorocystore.checkout') }}" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
                                                <input type="hidden" name="amount" value="200000" />
                                                <input type="hidden" name="discount_amount" value="25000" />
                                                <input type="hidden" name="currency_code" value="VND" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Thêm vào giỏ" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img title=" " alt=" " src="/templates/gorocystore/images/3.png" /></a>
                                        <p>Cháo dinh dưỡng (5 Kg)</p>
                                        <h4>300.000đ  <span>375.000đ </span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Cháo dinh dưỡng" />
                                                <input type="hidden" name="amount" value="300000" />
                                                <input type="hidden" name="discount_amount" value="25000" />
                                                <input type="hidden" name="currency_code" value="VND" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Thêm vào giỏ" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/2.png" alt=" " class="img-responsive" /></a>
                                        <p>Pepsi(2 lít)</p>
                                        <h4>200.000đ  <span>250.000đ </span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Pepsi" />
                                                <input type="hidden" name="amount" value="200000" />
                                                <input type="hidden" name="discount_amount" value="25000" />
                                                <input type="hidden" name="currency_code" value="VND" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Thêm vào giỏ" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/4.png" alt=" " class="img-responsive" /></a>
                                        <p>thức ăn cho chó (4 Kg)</p>
                                        <h4>225.000đ  <span>275.000đ </span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="thức ăn cho chó" />
                                                <input type="hidden" name="amount" value="225000" />
                                                <input type="hidden" name="discount_amount" value="25000" />
                                                <input type="hidden" name="currency_code" value="VND" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Thêm vào giỏ" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //top-brands -->
<!-- fresh-vegetables -->
<div class="fresh-vegetables">
    <div class="container">
        <h3>Tìm Kiếm Hàng đầu</h3>
        <div class="w3l_fresh_vegetables_grids">
            <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">
                <div class="w3l_fresh_vegetables_grid2">
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">Tất cả nhãn hàng</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{route('temp.gorocystore.vegetables')}}">Rau</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{route('temp.gorocystore.vegetables')}}">Trái cây</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{route('temp.gorocystore.drinks')}}">Nước ép</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{route('temp.gorocystore.pet')}}">Thức ăn cho thú cưng</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{route('temp.gorocystore.bread')}}">Tiệm bánh mì</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{route('temp.gorocystore.household')}}">Vệ sinh nhà cửa</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{route('temp.gorocystore.products')}}">Gia vị</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{route('temp.gorocystore.products')}}">Trái cây khô</a></li>
                        <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{route('temp.gorocystore.products')}}">Bơ sữa</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 w3l_fresh_vegetables_grid_right">
                <div class="col-md-4 w3l_fresh_vegetables_grid">
                    <div class="w3l_fresh_vegetables_grid1">
                        <img src="/templates/gorocystore/images/8.jpg" alt=" " class="img-responsive" />
                    </div>
                </div>
                <div class="col-md-4 w3l_fresh_vegetables_grid">
                    <div class="w3l_fresh_vegetables_grid1">
                        <div class="w3l_fresh_vegetables_grid1_rel">
                            <img src="/templates/gorocystore/images/7.jpg" alt=" " class="img-responsive" />
                            <div class="w3l_fresh_vegetables_grid1_rel_pos">
                                <div class="more m1">
                                    <a href="{{ route('temp.gorocystore.products') }}" class="button--saqui button--round-l button--text-thick" data-text="Mua ngay">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w3l_fresh_vegetables_grid1_bottom">
                        <img src="/templates/gorocystore/images/10.jpg" alt=" " class="img-responsive" />
                        <div class="w3l_fresh_vegetables_grid1_bottom_pos">
                            <h5>Ưu đãi Đặc biệt</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 w3l_fresh_vegetables_grid">
                    <div class="w3l_fresh_vegetables_grid1">
                        <img src="/templates/gorocystore/images/9.jpg" alt=" " class="img-responsive" />
                    </div>
                    <div class="w3l_fresh_vegetables_grid1_bottom">
                        <img src="/templates/gorocystore/images/11.jpg" alt=" " class="img-responsive" />
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="agileinfo_move_text">
                    <div class="agileinfo_marquee">
                        <h4>Nhận <span class="blink_me"> ưu đãi 25%</span> cho đơn hàng đầu tiên và phiếu quà tặng</h4>
                    </div>
                    <div class="agileinfo_breaking_news">
                        <span> </span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //fresh-vegetables -->
@endsection