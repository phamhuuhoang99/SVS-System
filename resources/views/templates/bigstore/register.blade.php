@extends('templates.bigstore.master')
@section('title', 'Cửa hàng thương mại điện tử trực tuyến')
@section('content')
<div class="banner-top">
	<div class="container">
		<h3 >Đăng ký</h3>
		<h4><a href="{{ route('temp.bigstore.index') }}">Trang chủ</a><label>/</label>Đăng ký</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="login">
    <div class="main-agileits">
        <div class="form-w3agile form1">
            <h3>Đăng ký</h3>
            <div class="key">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input  type="text" value="Tên đăng nhập" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tên đăng nhập';}" required="">
                <div class="clearfix"></div>
            </div>
            <div class="key">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <div class="clearfix"></div>
            </div>
            <div class="key">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input  type="password" value="Mật khẩu" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mật khẩu';}" required="">
                <div class="clearfix"></div>
            </div>
            <div class="key">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input  type="password" value="Nhập lại mật khẩu" name="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nhập lại mật khẩu';}" required="">
                <div class="clearfix"></div>
            </div>
            <input type="submit" value="Tạo tài khoản">
        </div>
    </div>
</div>
@endsection