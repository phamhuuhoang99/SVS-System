@extends('templates.gorocystore.master')
@section('title', 'Cửa hàng tạp hóa điện tử trực tuyến')
@section('content')
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('temp.gorocystore.index') }}">Trang chủ</a><span>|</span></li>
            <li>Nhà bếp</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    @include('templates.gorocystore.leftbanner')
    <div class="w3l_banner_nav_right">
        <div class="w3l_banner_nav_right_banner6">
            <h3>Ưu đãi khủng cho sản phẩm mới <span class="blink_me"></span></h3>
        </div>
        <div class="w3l_banner_nav_right_banner3_btm">
            <div class="col-md-4 w3l_banner_nav_right_banner3_btml">
                <div class="view view-tenth">
                    <img src="/templates/gorocystore/images/13.jpg" alt=" " class="img-responsive" />
                    <div class="mask">
                        <h4>Cửa hàng tạp hóa</h4>
                        <p>Cam kết chát lượng sản phẩm tốt nhất khi đến với khách hàng</p>
                    </div>
                </div>
                <h4>Đồ dùng</h4>
                <ol>
                    <li>Chất liệu men sứ trắng đẹp dày. </li>
                    <li>Sang trọng, dễ chùi rửa</li>
                    <li>Sử dụng nhiều trong nhà hàng, quán ăn.</li>
                </ol>
            </div>
            <div class="col-md-4 w3l_banner_nav_right_banner3_btml">
                <div class="view view-tenth">
                    <img src="/templates/gorocystore/images/20.jpg" alt=" " class="img-responsive">
                    <div class="mask">
                        <h4>Cửa hàng tạp hóa</h4>
                        <p>Cam kết chát lượng sản phẩm tốt nhất khi đến với khách hàng</p>
                    </div>
                </div>
                <h4>Rau</h4>
                <ol>
                    <li>Loại rau ăn rất ngon, giòn giòn.</li>
                    <li>Chứa nhiều vitamins, khoáng chất.</li>
                    <li>Chứa nhiều nguyên chất vi lượng</li>
                </ol>
            </div>
            <div class="col-md-4 w3l_banner_nav_right_banner3_btml">
                <div class="view view-tenth">
                    <img src="/templates/gorocystore/images/15.jpg" alt=" " class="img-responsive" />
                    <div class="mask">
                        <h4>Cửa hàng tạp hóa</h4>
                        <p>Cam kết chát lượng sản phẩm tốt nhất khi đến với khách hàng</p>
                    </div>
                </div>
                <h4>Bánh quy</h4>
                <ol>
                    <li>Bánh cung cấp nguồn năng lượng</li>
                    <li>Hương vị thơm ngon, hấp dẫn</li>
                    <li>Bánh được sản xuất theo quy trình tiên tiến khép kín</li>
                </ol>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="w3ls_w3l_banner_nav_right_grid">
            <div class="w3ls_w3l_banner_nav_right_grid_head">
                <h6>Danh mục phổ biến</h6>
            </div>
            <div class="w3ls_w3l_banner_nav_right_grid_head_grids">
                <div class="col-md-4 w3ls_w3l_banner_nav_right_grid_head_grid">
                    <img src="/templates/gorocystore/images/22.jpg" alt=" " class="img-responsive" />
                    <h4>Bánh mì</h4>
                    <ul>
                        <li><a href="{{ route('temp.gorocystore.bread') }}">Raising rolls</a></li>
                        <li><a href="{{ route('temp.gorocystore.bread') }}">Butter Croissants</a></li>
                        <li><a href="{{ route('temp.gorocystore.bread') }}">wheat pita</a></li>
                        <li><a href="{{ route('temp.gorocystore.bread') }}">Hot dog roll</a></li>
                    </ul>
                </div>
                <div class="col-md-4 w3ls_w3l_banner_nav_right_grid_head_grid">
                    <img src="/templates/gorocystore/images/23.jpg" alt=" " class="img-responsive" />
                    <h4>Dồ uống</h4>
                    <ul>
                        <li><a href="{{ route('temp.gorocystore.drinks') }}">Juices</a></li>
                        <li><a href="{{ route('temp.gorocystore.drinks') }}">Soft Drinks</a></li>
                        <li><a href="{{ route('temp.gorocystore.drinks') }}">Energy Drinks</a></li>
                    </ul>
                </div>
                <div class="col-md-4 w3ls_w3l_banner_nav_right_grid_head_grid">
                    <img src="/templates/gorocystore/images/24.jpg" alt=" " class="img-responsive" />
                    <h4>Thực phầm đông lạnh</h4>
                    <ul>
                        <li><a href="{{ route('temp.gorocystore.frozen') }}">Frozen Snacks</a></li>
                        <li><a href="{{ route('temp.gorocystore.frozen') }}">Frozen Nonveg</a></li>
                        <li><a href="{{ route('temp.gorocystore.frozen') }}">Frozen Sweet Corn</a></li>
                        <li><a href="{{ route('temp.gorocystore.frozen') }}">Frozen Mixed Vegetable</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h3>sản phẩm phổ biến</h3>
        <div class="agile_top_brands_grids">
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="tag"><img src="/templates/gorocystore/images/tag.png" alt=" " class="img-responsive" /></div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block" >
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img title=" " alt=" " src="/templates/gorocystore/images/1.png" /></a>
                                        <p>Dầu sunflower</p>
                                        <h4>200.000đ <span>250.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="dầu sunflower" />
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
                                <div class="snipcart-item block" >
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img title=" " alt=" " src="/templates/gorocystore/images/3.png" /></a>
                                        <p>gạo basmati ấn độ (5 Kg)</p>
                                        <h4>300.000đ <span>375.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="gạo basmati ấn độ" />
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
                                        <p>Pepsi (2 Lít)</p>
                                        <h4>200.000đ <span>250.000đ</span></h4>
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
                                        <p>đồ ăn cho chó (4 Kg)</p>
                                        <h4>225.000đ <span>275.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="đồ ăn cho chó" />
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
@endsection