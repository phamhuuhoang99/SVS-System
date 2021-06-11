@extends('templates.classicstyle.master')
@section('title','Classic Style')
@section('content')
<!--banner-->
<div class="banner-top">
    <div class="container">
        <h2>Đăng ký</h2>
        <h3><a href={{ route("temp.classicstyle.index") }}>Trang Chủ</a><label>/</label>Đăng ký</h3>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- contact -->
<div class="login">
    <div class="container">
        <form>
            <div class="col-md-6 login-do1 animated wow fadeInLeft" data-wow-delay=".5s">
                <div class="login-mail">
                    <input type="text" placeholder="Email" required="">
                    <i class="glyphicon glyphicon-envelope"></i>
                </div>
                <div class="login-mail">
                    <input type="password" placeholder="Mật khẩu" required="">
                    <i class="glyphicon glyphicon-lock"></i>
                </div>
                <div class="login-mail">
                    <input type="password" placeholder="Nhập lại mật khẩu" required="">
                    <i class="glyphicon glyphicon-lock"></i>
                </div>
                <a class="news-letter" href="#">
                    <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Tôi đồng ý với các điều khoản</label>
                </a>

            </div>
            <div class="col-md-6 login-do animated wow fadeInRight" data-wow-delay=".5s">
                <label class="hvr-sweep-to-top login-sub">
					<input type="submit" value="Xác nhận">
					</label>
                <p>Đã đăng ký</p>
                <a href={{ route("temp.classicstyle.login") }} class="hvr-sweep-to-top">Đăng Nhập</a>
            </div>
            <div class="clearfix"> </div>
        </form>
    </div>
</div>
@endsection