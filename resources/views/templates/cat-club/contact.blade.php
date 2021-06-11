@extends('templates.cat-club.master')
@section('title', 'Cat Club')
@section('content')
	<!-- contact -->
	<div class="contact-top">
		<!-- container -->
		<div class="container">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d158858.18237072596!2d-0.10159865000003898!3d51.52864165000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1436514341845" allowfullscreen></iframe>
			</div>
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left">
					<h3>Địa chỉ</h3>
					<h5>Liên hệ với chúng tôi để được tư vấn miễn phí <span>Nhận thông tin khuyến mãi</span></h5>
					<h4>Trụ sở chính</h4>
					<p>220/91 Nguyễn Văn Khối,
						<span>Phường 9</span>
						Quận Gò Vấp, Hồ Chí Minh
					</p>
					<h4>Liên hệ</h4>
					<p>Số điện thoại: 035 618 5047
						{{--  <span>FAX: +1 234 567 9871</span>  --}}
					<span>	E-mail: <a href="mailto:info@example.com">smartvietsolution@gmail.com</a></span>
					</p>
				</div>
				<div class="col-md-6 contact-form">
					<form action="#">
						<input type="text" name="Name" placeholder="Họ và tên" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Subject" placeholder="Chủ đề" required="">
						<textarea name="Message" placeholder="Nội dung" required=""></textarea>
						<input type="submit" value="GỬI">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //contact -->
@endsection