@extends('templates.gorocystore.master')
@section('title', 'Cửa hàng tạp hóa điện tử trực tuyến')
@section('content')
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('temp.gorocystore.index') }}">Trang chủ</a><span>|</span></li>
            <li>Thực phẩm đông lạnh</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    @include('templates.gorocystore.leftbanner')
    <div class="w3l_banner_nav_right">
        <div class="w3l_banner_nav_right_banner10">
            <h3>Ưu đãi đặc biệt cho sản phẩm mới<span class="blink_me"></span></h3>
        </div>
        <div class="w3l_banner_nav_right_banner3_btm">
            <div class="col-md-4 w3l_banner_nav_right_banner3_btml">
                <div class="view view-tenth">
                    <img src="/templates/gorocystore/images/24.jpg" alt=" " class="img-responsive">
                    <div class="mask">
                        <h4>cửa hàng tạp hóa</h4>
                        <p>Cam kết chát lượng sản phẩm tốt nhất khi đến với khách hàng</p>
                    </div>
                </div>
                <h4>Thịt đông lạnh</h4>
                <ol>
                    <li>Không làm thịt kém chất lượng</li>
                    <li>Chứng nhận vệ sinh an toàn thực phẩm</li>
                    <li>Giữ được vị ngọt của thịt, vị béo của mỡ và mùi vị thơm của gia vị</li>
                </ol>
            </div>
            <div class="col-md-4 w3l_banner_nav_right_banner3_btml">
                <div class="view view-tenth">
                    <img src="/templates/gorocystore/images/29.jpg" alt=" " class="img-responsive" />
                    <div class="mask">
                        <h4>cửa hàng tạp hóa</h4>
                        <p>Cam kết chát lượng sản phẩm tốt nhất khi đến với khách hàng</p>
                    </div>
                </div>
                <h4>Chocolate đông lạnh</h4>
                <ol>
                    <li>Vị sô cô la đậm đà</li>
                    <li>Bề mặt sô cô la không bị hiện tượng nứt, dễ cắt</li>
                    <li>Khả năng chịu nhiệt cao, chống dính bao bì</li>
                </ol>
            </div>
            <div class="col-md-4 w3l_banner_nav_right_banner3_btml">
                <div class="view view-tenth">
                    <img src="/templates/gorocystore/images/30.jpg" alt=" " class="img-responsive" />
                    <div class="mask">
                        <h4>cửa hàng tạp hóa</h4>
                        <p>Cam kết chát lượng sản phẩm tốt nhất khi đến với khách hàng</p>
                    </div>
                </div>
                <h4>Đậu tương đông lạnh</h4>
                <ol>
                    <li>Các bạn nhận được hàng chất lượng chính hãng lấy trực tiếp từ cơ sở sản xuất</li>
                    <li> Chúng tôi xin chịu đền bù 200% nếu như hạt bị ẩm mốc hư hỏng không đạt tiêu chuẩn</li>
                    <li>Bán hàng bằng niềm tin đó là mục tiêu mà chúng tôi hướng đến.</li>
                </ol>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_veg">
            <h3 class="w3l_fruit">Thực phẩm đông lạnh</h3>
            <div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="tag"><img src="/templates/gorocystore/images/tag.png" alt=" " class="img-responsive"></div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/64.png" alt=" " class="img-responsive" /></a>
                                        <p>Hạt tiêu (250 gam)</p>
                                        <h4>250.000đ <span>300.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Hạt tiêu" />
                                                <input type="hidden" name="amount" value="250000" />
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/65.png" alt=" " class="img-responsive" /></a>
                                        <p>Đậu Sumeru (500 gam)</p>
                                        <h4>225.000đ <span>275.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Đậu Sumeru" />
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/66.png" alt=" " class="img-responsive" /></a>
                                        <p>Gà tikka (300 gam)</p>
                                        <h4>150.000đ <span>200.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Gà tikka" />
                                                <input type="hidden" name="amount" value="150000" />
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/67.png" alt=" " class="img-responsive" /></a>
                                        <p>Rau trộn (500 gam)</p>
                                        <h4>150.000đ <span>175.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Rau trộn" />
                                                <input type="hidden" name="amount" value="150000" />
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/68.png" alt=" " class="img-responsive" /></a>
                                        <p>Xoài xấy (800 gam)</p>
                                        <h4>225.000đ <span>275.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Xoài xấy" />
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/69.png" alt=" " class="img-responsive" /></a>
                                        <p>Xoài ép (800 gam)</p>
                                        <h4>125.000đ <span>200.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Xoài ép" />
                                                <input type="hidden" name="amount" value="125000" />
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
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asd">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="tag"><img src="/templates/gorocystore/images/tag.png" alt=" " class="img-responsive" /></div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/70.png" alt=" " class="img-responsive" /></a>
                                        <p>Ngô ngọt (250 gam)</p>
                                        <h4>150.000đ <span>200.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Ngô ngọt" />
                                                <input type="hidden" name="amount" value="150000" />
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/71.png" alt=" " class="img-responsive" /></a>
                                        <p>Gà rán (1 kg)</p>
                                        <h4>100.000đ <span>150.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Gà rán" />
                                                <input type="hidden" name="amount" value="100000" />
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/72.png" alt=" " class="img-responsive" /></a>
                                        <p>Tỏi rán (400 gam)</p>
                                        <h4>125.000đ <span>175.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Tỏi rán" />
                                                <input type="hidden" name="amount" value="125000" />
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/73.png" alt=" " class="img-responsive" /></a>
                                        <p>Cá rán (200 gam)</p>
                                        <h4>200.000đ <span>250.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Cá ráng" />
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
                <div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asd">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="tag"><img src="/templates/gorocystore/images/tag.png" alt=" " class="img-responsive" /></div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/74.png" alt=" " class="img-responsive" /></a>
                                        <p>gà sumeru (500 ml)</p>
                                        <h4>275.000đ <span>325.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="gà sumeru" />
                                                <input type="hidden" name="amount" value="275000" />
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/75.png" alt=" " class="img-responsive" /></a>
                                        <p>Chả cuốn (400 gam)</p>
                                        <h4>175.000đ <span>225.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Chả cuốn" />
                                                <input type="hidden" name="amount" value="175000" />
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
    <div class="clearfix"></div>
</div>
<!-- //banner -->
@endsection