@extends('templates.downyshoes.master')
@section('title','Downy Shoes')
@section('content')
<div class="banner_top innerpage" id="home">
	<!-- /banner_inner -->
	<div class="services-breadcrumb_w3ls_agileinfo">
		<div class="inner_breadcrumb_agileits_w3">
			<ul class="short">
				<li><a href={{ route("temp.downyshoes.index") }}>Trang Chủ</a><i>|</i></li>
				<li>Thanh toán</li>
			</ul>
		</div>
	</div>
	<!-- //banner_inner -->
</div>
<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h3>Thanh <span>toán</span></h3>
				<!--/tabs-->
				<div class="responsive_tabs">
					<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Trả Tiền mặt khi giao hàng (COD)</li>
							<li>tín dụng/nợ</li>
							<li>Internet Banking</li>
							<li>Tài khoản Paypal</li>
						</ul>
						<div class="resp-tabs-container">
							<!--/tab_one-->
							<div class="tab1">
								<div class="pay_info">
									<div class="vertical_post check_box_agile">
										<h5>COD</h5>
										<div class="checkbox">
											<div class="check_box_one cashon_delivery">
												<label class="anim">
													<input type="checkbox" class="checkbox">
														<span> Chúng tôi cũng chấp nhận thẻ Tín dụng / Thẻ ghi nợ khi giao hàng. Vui lòng kiểm tra với các đại lý.</span>

												</label>
											</div>

										</div>
									</div>
								</div>

							</div>
							<!--//tab_one-->
							<div class="tab2">
								<div class="pay_info">
									<form class="creditly-card-form agileinfo_form">
										<section class="creditly-wrapper wthree, w3_agileits_wrapper">
											<div class="credit-card-wrapper">
												<div class="first-row form-group">
													<div class="controls">
														<label class="control-label">Chủ thẻ</label>
														<input class="billing-address-name form-control" type="text" name="name" placeholder="Họ tên">
													</div>
													<div class="w3_agileits_card_number_grids">
														<div class="w3_agileits_card_number_grid_left">
															<div class="controls">
																<label class="control-label">Số thẻ</label>
																<input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
																    autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
															</div>
														</div>
														<div class="w3_agileits_card_number_grid_right">
															<div class="controls">
																<label class="control-label">CVV</label>
																<input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
															</div>
														</div>
														<div class="clear"> </div>
													</div>
													<div class="controls">
														<label class="control-label">Ngày hết hạn</label>
														<input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
													</div>
												</div>
												<button class="submit"><span>Thanh toán </span></button>
											</div>
										</section>
									</form>

								</div>
							</div>
							<div class="tab3">

								<div class="pay_info">
									<div class="vertical_post">
										<form>
											<h5>Ngân hàng phổ biến</h5>
											<div class="swit-radio">
												<div class="check_box_one">
													<div class="radio_one"> <label><input type="radio" name="radio" checked=""><i></i> VietinBank</label> </div>
												</div>
												<div class="check_box_one">
													<div class="radio_one"> <label><input type="radio" name="radio"><i></i> Eximbank</label></div>
												</div>
												<div class="check_box_one">
													<div class="radio_one"> <label><input type="radio" name="radio"><i></i> Đông Á Bank</label> </div>
												</div>
												<div class="check_box_one">
													<div class="radio_one"> <label><input type="radio" name="radio"><i></i> Sacombank</label> </div>
												</div>
												<div class="check_box_one">
													<div class="radio_one"> <label><input type="radio" name="radio"><i></i> Vietcombank</label> </div>
												</div>
												<div class="clearfix"></div>
											</div>
											<h5>Một số ngân hàng khác</h5>
											<div class="section_room_pay">
												<select class="year"><option value="">=== Ngân Hàng Khác ===</option><option value="ALB-NA">Nam Á</option><option value="ADB-NA">SHB</option><option value="BBK-NA">Đông Á</option><option value="BBC-NA">HDBank</option><option value="BBR-NA">BIDV</option><option value="BOI-NA">Techcombank</option><option value="BOM-NA">VIB</option><option value="CSB-NA">TPBank</option><option value="CBI-NA">OCB</option><option value="CUB-NA">MB Bank</option></select>
											</div>
											<input type="submit" value="Thanh toán ngay">
										</form>
									</div>
								</div>
							</div>

							<div class="tab4">
								<div class="pay_info">
									<div class="col-md-6 tab-grid">
										<img class="pp-img" src={{ asset("templates/downyshoes/img/paypal.png") }} alt="Image Alternative text" title="Image Title">
										<p>Chú ý: Bạn sẽ đến trang web của PayPal để hoàn tất thanh toán một cách an toàn.</p><a class="btn btn-primary">Thanh toán trên PayPal</a>
									</div>
									<div class="col-md-6">
										<form class="cc-form">
											<div class="clearfix">
												<div class="form-group form-group-cc-number">
													<label>Số thẻ</label>
													<input class="form-control" placeholder="xxxx xxxx xxxx xxxx" type="text"><span class="cc-card-icon"></span>
												</div>
												<div class="form-group form-group-cc-cvc">
													<label>CVV</label>
													<input class="form-control" placeholder="xxxx" type="text">
												</div>
											</div>
											<div class="clearfix">
												<div class="form-group form-group-cc-name">
													<label>Tên chủ thẻ</label>
													<input class="form-control" type="text">
												</div>
												<div class="form-group form-group-cc-date">
													<label>Ngày hết hạn</label>
													<input class="form-control" placeholder="mm/yy" type="text">
												</div>
											</div>
											<div class="checkbox checkbox-small">
												<label>
                                        <input class="i-check" type="checkbox" checked="">Thêm vào thẻ của tôi</label>
											</div>
											<input class="btn btn-primary submit" type="submit" value="Thanh toán">
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!--//tabs-->
			</div>

		</div>
		<!-- //payment -->

		<div class="clearfix"></div>
	</div>
	<!-- //top products -->
	@include('templates.downyshoes.anotherexam')
@endsection

