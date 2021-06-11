@extends('templates.downyshoes.master')
@section('title','Downy Shoes')
@section('content')
<div class="banner_top innerpage" id="home">
	<!-- /banner_inner -->
	<div class="services-breadcrumb_w3ls_agileinfo">
		<div class="inner_breadcrumb_agileits_w3">
			<ul class="short">
				<li><a href={{ route("temp.downyshoes.index") }}>Trang Chủ</a><i>|</i></li>
				<li>Liên Hệ</li>
			</ul>
		</div>
	</div>
	<!-- //banner_inner -->
</div>
<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<h3 class="head">Liên hệ với chúng tôi</h3>
			<p class="head_para">Thêm một vài thông tin</p>
			<div class="inner_section_w3ls">
				<div class="col-md-7 contact_grid_right">
					<h6>Vui lòng điền vào mẫu này để liên hệ với chúng tôi.</h6>
					<form>
						<div class="col-md-6 col-sm-6 contact_left_grid">
							<input type="text" name="Name" placeholder="Tên" required="">
							<input type="email" name="Email" placeholder="Email" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact_left_grid">
							<input type="text" name="Số điện thoại" placeholder="Số điện thoại" required="">
							<input type="text" name="Chủ đề" placeholder="Chủ đề" required="">
						</div>
						<div class="clearfix"> </div>
						<textarea name="Nội dung" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nội dung...';}" required="">Nội dung...</textarea>
						<input type="submit" value="Gửi">
						<input type="reset" value="Hủy bỏ">
					</form>
				</div>
				<div class="col-md-5 contact-left">
					<h6>Thông tin liên lạc</h6>
					<div class="visit">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-home" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
							<h4>Địa chỉ</h4>
							<p>220/91 Nguyễn Văn Khối, Phường 9 Quận Gò Vấp, Hồ Chí Minh</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="mail-us">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
							<h4>Địa chỉ Email:</h4>
							<p><a href="mailto:smartvietsolution@gmail.com">smartvietsolution@gmail.com</a></p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="call">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-phone" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
							<h4>Số điện thoại</h4>
							<p>035 618 5047</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="visit">
						<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
							<span class="fa fa-fax" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
							<h4>Fax</h4>
							<p></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"> </div>

			</div>

			<div class="clearfix"></div>

		</div>
	</div>
	<div class="contact-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>
	</div>
@endsection
