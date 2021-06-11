@extends('templates.gorocystore.master')
@section('title', 'Cửa hàng tạp hóa điện tử trực tuyến')
@section('content')
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('temp.gorocystore.index') }}">Trang chủ</a><span>|</span></li>
            <li>Rau và trái cây</li>
        </ul>
    </div>
</div>
<div class="banner">
    @include('templates.gorocystore.leftbanner')
    <div class="w3l_banner_nav_right">
        <div class="w3l_banner_nav_right_banner5">
            <h3>Ưu đãi khủng cho sản phẩm mới<span class="blink_me"></span></h3>
        </div>
        <div class="w3l_banner_nav_right_banner3_btm">
            <div class="col-md-4 w3l_banner_nav_right_banner3_btml">
                <div class="view view-tenth">
                    <img src="/templates/gorocystore/images/18.jpg" alt=" " class="img-responsive" />
                    <div class="mask">
                        <h4>cửa hàng tạp hóa</h4>
                        <p>Cam kết chát lượng sản phẩm tốt nhất khi đến với khách hàng</p>
                    </div>
                </div>
                <h4>Rau củ quả</h4>
                <ol>
                    <li>Cam kết không nâng giá rồi chạy sale giảm giá để hút khách</li>
                    <li>Cam kết bán giá rẻ - hàng loại 1  đảm bảo ngon, chất lượng tốt nhất</li>
                    <li>Cam kết luôn trung thực về sản phẩm</li>
                </ol>
            </div>
            <div class="col-md-4 w3l_banner_nav_right_banner3_btml">
                <div class="view view-tenth">
                    <img src="/templates/gorocystore/images/19.jpg" alt=" " class="img-responsive" />
                    <div class="mask">
                        <h4>cửa hàng tạp hóa</h4>
                        <p>Cam kết chát lượng sản phẩm tốt nhất khi đến với khách hàng</p>
                    </div>
                </div>
                <h4>Trái cây khô</h4>
                <ol>
                    <li>Trái cây sấy dẻo giàu vitamin</li>
                    <li>Với công nghệ sấy hiện đại</li>
                    <li>Không chất bảo quản, không phẩm màu</li>
                </ol>
            </div>
            <div class="col-md-4 w3l_banner_nav_right_banner3_btml">
                <div class="view view-tenth">
                    <img src="/templates/gorocystore/images/20.jpg" alt=" " class="img-responsive" />
                    <div class="mask">
                        <h4>cửa hàng tạp hóa</h4>
                        <p>Cam kết chát lượng sản phẩm tốt nhất khi đến với khách hàng</p>
                    </div>
                </div>
                <h4>Rau</h4>
                <ol>
                    <li>Loại Rau Ăn Rất Ngon, Giòn Giòn.</li>
                    <li>Chứa Nhiều Vitamins, Khoáng Chất.</li>
                    <li>Chứa Nhiều Nguyên Chất Vi Lượng.</li>
                </ol>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_veg">
            <h3 class="w3l_fruit">Rau và trái cây</h3>
            <div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="tag"><img src="/templates/gorocystore/images/tag.png" alt=" " class="img-responsive"></div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/29.png" alt=" " class="img-responsive" /></a>
                                            <p>Chuối tươi (1 kg)</p>
                                            <h4>250.000 <span>300.000đ</span></h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="#">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Chuối tươi" />
                                                    <input type="hidden" name="amount" value="250000" />
                                                    <input type="hidden" name="discount_amount" value="25000" />
                                                    <input type="hidden" name="currency_code" value="USD" />
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
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/30.png" alt=" " class="img-responsive" /></a>
                                            <p>Súp lơ tươi (2 cái)</p>
                                            <h4>125.000đ <span>200.000đ</span></h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="#">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Súp lơ tươi" />
                                                    <input type="hidden" name="amount" value="125000" />
                                                    <input type="hidden" name="discount_amount" value="25000" />
                                                    <input type="hidden" name="currency_code" value="USD" />
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
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asd">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/31.png" alt=" " class="img-responsive" /></a>
                                            <p>Cà tím (1 kg)</p>
                                            <h4>50.000đ <span>75.000đ</span></h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="#">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Cà tím" />
                                                    <input type="hidden" name="amount" value="50000" />
                                                    <input type="hidden" name="discount_amount" value="25000" />
                                                    <input type="hidden" name="currency_code" value="USD" />
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
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/32.png" alt=" " class="img-responsive" /></a>
                                            <p>Cam tươi (500 gam)</p>
                                            <h4>150.000đ <span>175.000đ</span></h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="#">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Cam tươi" />
                                                    <input type="hidden" name="amount" value="150000" />
                                                    <input type="hidden" name="discount_amount" value="25000" />
                                                    <input type="hidden" name="currency_code" value="USD" />
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
            <div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/9.png" alt=" " class="img-responsive" /></a>
                                            <p>Cải tươi (palak)</p>
                                            <h4>50.000đ <span>75.000đ</span></h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="#">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Cải tươi" />
                                                    <input type="hidden" name="amount" value="50000" />
                                                    <input type="hidden" name="discount_amount" value="25000" />
                                                    <input type="hidden" name="currency_code" value="USD" />
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
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/10.png" alt=" " class="img-responsive" /></a>
                                            <p>Xoài tươi (1 kg)</p>
                                            <h4>125.000đ <span>200.000đ</span></h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="#">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Xoài tươi" />
                                                    <input type="hidden" name="amount" value="125000" />
                                                    <input type="hidden" name="discount_amount" value="25000" />
                                                    <input type="hidden" name="currency_code" value="USD" />
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
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asd">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="tag"><img src="/templates/gorocystore/images/tag.png" alt=" " class="img-responsive" /></div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/11.png" alt=" " class="img-responsive" /></a>
                                            <p>táo đỏ (1 kg)</p>
                                            <h4>150.000đ <span>200.000đ</span></h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="#">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="táo đỏ" />
                                                    <input type="hidden" name="amount" value="150000" />
                                                    <input type="hidden" name="discount_amount" value="25000" />
                                                    <input type="hidden" name="currency_code" value="USD" />
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
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/12.png" alt=" " class="img-responsive" /></a>
                                            <p>bông cải xanh (500 gam)</p>
                                            <h4>100.000đ <span>150.000đ</span></h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="#">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="bông cải xanh" />
                                                    <input type="hidden" name="amount" value="100000" />
                                                    <input type="hidden" name="discount_amount" value="25000" />
                                                    <input type="hidden" name="currency_code" value="USD" />
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
            <div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/33.png" alt=" " class="img-responsive" /></a>
                                            <p>Hành củ (1 kg)</p>
                                            <h4>125.000đ <span>175.000đ</span></h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="#">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Hành củ" />
                                                    <input type="hidden" name="amount" value="125000" />
                                                    <input type="hidden" name="discount_amount" value="25000" />
                                                    <input type="hidden" name="currency_code" value="USD" />
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
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/34.png" alt=" " class="img-responsive" /></a>
                                            <p>bí đỏ (1 kg)</p>
                                            <h4>100.000đ <span>125.000đ</span></h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="#">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="bí đỏ" />
                                                    <input type="hidden" name="amount" value="100000" />
                                                    <input type="hidden" name="discount_amount" value="25000" />
                                                    <input type="hidden" name="currency_code" value="USD" />
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
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asd">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="tag"><img src="/templates/gorocystore/images/tag.png" alt=" " class="img-responsive" /></div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/35.png" alt=" " class="img-responsive" /></a>
                                            <p>nấm (500 ml)</p>
                                            <h4>275.000đ <span>375.000đ</span></h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="#">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="nấm" />
                                                    <input type="hidden" name="amount" value="275000" />
                                                    <input type="hidden" name="discount_amount" value="25000" />
                                                    <input type="hidden" name="currency_code" value="USD" />
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
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="/templates/gorocystore/images/offer.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/36.png" alt=" " class="img-responsive" /></a>
                                            <p>dâu (1 hộp)</p>
                                            <h4>175.000đ <span>225.000đ</span></h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="#">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="dâu" />
                                                    <input type="hidden" name="amount" value="175000" />
                                                    <input type="hidden" name="discount_amount" value="25000" />
                                                    <input type="hidden" name="currency_code" value="USD" />
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
    <div class="clearfix"></div>
</div>
<!-- //banner -->
@endsection