@extends('templates.gorocystore.master')
@section('title', 'Cửa hàng tạp hóa điện tử trực tuyến')
@section('content')
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('temp.gorocystore.index') }}">Trang chủ</a><span>|</span></li>
            <li>Đồ uống</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    @include('templates.gorocystore.leftbanner')
    <div class="w3l_banner_nav_right">
        <div class="w3l_banner_nav_right_banner7">
            <h3>Ưu đãi đặc biệt cho sản phẩm mới<span class="blink_me"></span></h3>
        </div>
        <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
            <h3>Đồ uống</h3>
            <div class="w3ls_w3l_banner_nav_right_grid1">
                <h6>Nước ngọt</h6>
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/49.png" alt=" " class="img-responsive" /></a>
                                        <p>nước cam (250 ml)</p>
                                        <h4>125.000đ <span>175.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="nước cam" />
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/14.png" alt=" " class="img-responsive" /></a>
                                        <p>nước ép mận (1 lít)</p>
                                        <h4>100.000đ <span>125.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="nước ép mận" />
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
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="tag"><img src="/templates/gorocystore/images/tag.png" alt=" " class="img-responsive" /></div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/15.png" alt=" " class="img-responsive" /></a>
                                        <p>coco cola (330 ml)</p>
                                        <h4>75.000đ <span>125.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="coco cola" />
                                                <input type="hidden" name="amount" value="75000" />
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/16.png" alt=" " class="img-responsive" /></a>
                                        <p>Chai Sprite (2 lít)</p>
                                        <h4>75.000đ <span>100.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Chai Sprite" />
                                                <input type="hidden" name="amount" value="75000" />
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
            <div class="w3ls_w3l_banner_nav_right_grid1">
                <h6>Nước ép</h6>
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/13.png" alt=" " class="img-responsive" /></a>
                                        <p>Nước ép trái cây (1 lít)</p>
                                        <h4>75.000đ <span>100.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Nước ép trái cây" />
                                                <input type="hidden" name="amount" value="75000" />
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/50.png" alt=" " class="img-responsive" /></a>
                                        <p>Nước ép Aamras (250 ml)</p>
                                        <h4>100.000đ <span>125000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Nước ép Aamras" />
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
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="tag"><img src="/templates/gorocystore/images/tag.png" alt=" " class="img-responsive" /></div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/51.png" alt=" " class="img-responsive" /></a>
                                        <p>nước dừa (1000 ml)</p>
                                        <h4>125.000đ <span>200.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="nước dừa" />
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/52.png" alt=" " class="img-responsive" /></a>
                                        <p>nước cam ép (1 lít)</p>
                                        <h4>125.000đ <span>200.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="nước cam ép" />
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
            <div class="w3ls_w3l_banner_nav_right_grid1">
                <h6>Đồ uống tăng lực</h6>
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/53.png" alt=" " class="img-responsive" /></a>
                                        <p>Milo (250 gam)</p>
                                        <h4>250.000đ <span>300.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Milo" />
                                                <input type="hidden" name="amount" value="10.00" />
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/54.png" alt=" " class="img-responsive" /></a>
                                        <p>nước hương chanh (50 gam)</p>
                                        <h4>200.000đ <span>250.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="nước hương chanh" />
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
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <div class="tag"><img src="/templates/gorocystore/images/tag.png" alt=" " class="img-responsive" /></div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/55.png" alt=" " class="img-responsive" /></a>
                                        <p>nước Schweppes (250 lít)</p>
                                        <h4>125.000đ <span>175.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="nước Schweppes" />
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
                                        <a href="{{ route('temp.gorocystore.single') }}"><img src="/templates/gorocystore/images/56.png" alt=" " class="img-responsive" /></a>
                                        <p>red bull (250 ml)</p>
                                        <h4>175.000đ <span>225.000đ</span></h4>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="red bull" />
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