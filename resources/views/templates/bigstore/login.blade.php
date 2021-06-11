@extends('templates.bigstore.master')
@section('title', 'Cửa hàng thương mại điện tử trực tuyến')
@section('content')
<div class="banner-top">
	<div class="container">
		<h3 >Đăng nhập</h3>
		<h4><a href={{ route('temp.bigstore.index') }}>Trang chủ</a><label>/</label>Đăng nhập</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="login">
	<div class="main-agileits">
		<div class="form-w3agile">
			<h3>Đăng nhập</h3>
			<div class="key">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				<input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
				<div class="clearfix"></div>
			</div>
			<div class="key">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input  type="password" value="Mật khẩu" name="Mật khẩu" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mật khẩu';}" required="">
				<div class="clearfix"></div>
			</div>
			<input type="submit" value="Đăng nhập">
		</div>
		<div class="forg">
			<a href="" class="forg-left">Quên mật khẩu</a>
			<a href={{ route('temp.bigstore.register') }} class="forg-right">Đăng ký</a>
		<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection