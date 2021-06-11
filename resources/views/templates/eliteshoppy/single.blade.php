@extends('templates.eliteshoppy.master')
@section('title','Elite Shoppy')
@section('content')
    <!--/single_page-->
    <!-- /banner_bottom_agile_info -->
    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>Sản <span>Phẩm </span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href={{ route("temp.eliteshoppy.index") }}>Trang Chủ</a><i>|</i></li>
                        <li>Sản Phẩm</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
	</div>

    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <div class="col-md-4 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">

                        <ul class="slides">
                            <li data-thumb={{ asset("templates/eliteshoppy/img/d2.jpg") }}>
                                <div class="thumb-image"> <img src={{ asset("templates/eliteshoppy/img/d2.jpg") }} data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb={{ asset("templates/eliteshoppy/img/d1.jpg") }}>
                                <div class="thumb-image"> <img src={{ asset("templates/eliteshoppy/img/d1.jpg") }} data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb={{ asset("templates/eliteshoppy/img/d3.jpg") }}>
                                <div class="thumb-image"> <img src={{ asset("templates/eliteshoppy/img/d3.jpg") }} data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 single-right-left simpleCart_shelfItem">
                <h3>Giày Sneaker Wing</h3>
                <p><span class="item_price">đ1500000</span> <del>- đ1700000</del></p>
                <div class="rating1">
                    <span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
                </div>
                <div class="description">
                    <h5>Kiểm tra giao hàng, thanh toán khi nhân hàng</h5>
                    <form>
                        <input type="text" value="Nhập code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nhập code';}" required="">
                        <input type="submit" value="Kiểm tra">
                    </form>
                </div>
                <div class="color-quality">
                    <div class="color-quality-right">
                        <h5>Chất lượng :</h5>
                        <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">5 Qty</option>
								<option value="null">6 Qty</option>
								<option value="null">7 Qty</option>
								<option value="null">10 Qty</option>
							</select>
                    </div>
                </div>
                <div class="occasional">
                    <h5>Loại :</h5>
                    <div class="colr ert">
                        <label class="radio"><input type="radio" name="radio" checked=""><i></i>Giày thường</label>
                    </div>
                    <div class="colr">
                        <label class="radio"><input type="radio" name="radio"><i></i>Sneakers </label>
                    </div>
                    <div class="colr">
                        <label class="radio"><input type="radio" name="radio"><i></i>Giày dự tiệc</label>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                        <form action="#">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="business" value=" ">
                                <input type="hidden" name="item_name" value="Giày Sneaker Wing">
                                <input type="hidden" name="amount" value="1500000">
                                <input type="hidden" name="discount_amount" value="25000">
                                <input type="hidden" name="currency_code" value="VND">
                                <input type="hidden" name="return" value=" ">
                                <input type="hidden" name="cancel_return" value=" ">
                                <input type="submit" name="submit" value="Thêm vào giỏ" class="button">
                            </fieldset>
                        </form>
                    </div>

                </div>
                <ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
                    <li class="share">Chia Sẻ : </li>
                    <li>
                        <a href="#" class="facebook">
                            <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="instagram">
                            <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="pinterest">
                            <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        </a>
                    </li>
                </ul>

            </div>
            <div class="clearfix"> </div>
            <!-- /new_arrivals -->
            <div class="responsive_tabs_agileits">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Mô tả</li>
                        <li>Đánh giá</li>
                        <li>Thông tin</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <!--/tab_one-->
                        <div class="tab1">

                            <div class="single_page_agile_its_w3ls">
                                <h6>Chất liệu cao cấp</h6>
                                <p>- Giày Thể thao Sneaker được làm từ chất liệu cao cấp, rất mềm mại và êm ái, tạo cảm giác thoải mái cho từng bước đi. Phần đế làm bằng cao su tổng hợp với phần rãnh chống trơn trượt, đảm bảo sự an toàn cho người mang. Kiểu dáng tinh tế, hợp xu hướng.</p>
                                <p class="w3ls_para">- Giày thể thao Sneaker được thiết kế theo phong cách hiện đại, giày chú trọng phom dáng với từng đừơng may chắn chắn, làm toát lên nét trẻ trung, thanh lịch.</p>
                            </div>
                        </div>
                        <!--//tab_one-->
                        <div class="tab2">

                            <div class="single_page_agile_its_w3ls">
                                <div class="bootstrap-tab-text-grids">
                                    <div class="bootstrap-tab-text-grid">
                                        <div class="bootstrap-tab-text-grid-left">
                                            <img src={{ asset("templates/eliteshoppy/img/t1.jpg") }} alt=" " class="img-responsive">
                                        </div>
                                        <div class="bootstrap-tab-text-grid-right">
                                            <ul>
                                                <li><a href="#">Quản trị viên</a></li>
                                                <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Phản Hồi</a></li>
                                            </ul>
                                            <p>Chúng tôi có nền tảng thương mại SVS được xây dựng nhằm cung cấp cho người dùng những trải nghiệm dễ dàng, an toàn và nhanh chóng khi mua hàng trực tuyến thông qua hệ thống hổ trợ và vận hành vững mạnh.</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="add-review">
                                        <h4>THÊM ĐÁNH GIÁ</h4>
                                        <form >
                                            <input type="text" name="Name" required="Họ Tên">
                                            <input type="email" name="Email" required="Email">
                                            <textarea name="Message" required=""></textarea>
                                            <input type="submit" value="GỬI">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab3">

                            <div class="single_page_agile_its_w3ls">
                                <h6>Giày Sneaker Wing </h6>
                                <p>Giày Thể thao Sneaker là một “item” đa năng khi có thể dễ dàng phối với bất kì trang phục nào. Chỉ cần một chút nhấn nhá với các phụ kiện, bạn đã có ngay một set đồ hoàn hảo để tự tin đến nơi công sở hoặc dạo phố.</p>
                                <p class="w3ls_para">Giày thể thao nam Sneaker với thiết kế đơn giản mang lại vẻ đẹp tao nhã, tự do, phóng khoáng nhưng đầy cuốn hút. Sản phẩm có thiết kế hoàn hảo để bạn dễ dàng phối hợp cùng mọi loại trang phục.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //new_arrivals -->
            <!--/slider_owl-->

            <div class="w3_agile_latest_arrivals">
                <h3 class="wthree_text_info"><span>Sản Phẩm </span>Mới</h3>
				@include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/b1.jpg','name'=>'Cặp đựng laptop da','price'=>'2000000','pricefake'=>'2200000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
				@include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/b2.jpg','name'=>'Balo Puma','price'=>'800000','pricefake'=>'900000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
				@include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/s1.jpg','name'=>'Giày Da Cao Cấp','price'=>'3300000','pricefake'=>'3500000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                @include('templates.eliteshoppy.item',['img'=>'/templates/eliteshoppy/img/s2.jpg','name'=>'Giày Chạy Bộ','price'=>'800000','pricefake'=>'850000','discount'=>'25000','href'=>'/temp/eliteshoppy/single','col'=>'3'])
                <div class="clearfix"> </div>
                <!--//slider_owl-->
            </div>
        </div>
    </div>
	<!--//single_page-->
	@include('templates.eliteshoppy.grids')
@endsection

