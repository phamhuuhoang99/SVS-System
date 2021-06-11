@extends('templates.classicstyle.master')
@section('title','Classic Style')
@section('content')
<!--banner-->
<div class="banner-top">
    <div class="container">
        <h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Đăng nhập</h2>
        <h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href={{ route("temp.classicstyle.index") }}>Trang Chủ</a><label>/</label>Đăng Nhập</h3>
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
                    <input type="password" placeholder="Mật Khẩu" required="">
                    <i class="glyphicon glyphicon-lock"></i>
                </div>
                <a class="news-letter " href="#">
                    <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Quên mật khẩu</label>
                </a>
            </div>
            <div class="col-md-6 login-do animated wow fadeInRight" data-wow-delay=".5s">
                <label class="hvr-sweep-to-top login-sub">
					<input type="submit" value="Đăng Nhập">
					</label>
                <p>Bạn chưa có tài khoản?</p>
                <a href={{ route("temp.classicstyle.register") }} class="hvr-sweep-to-top">Đăng Ký </a>
            </div>

            <div class="clearfix"> </div>
        </form>

    </div>
</div>
@endsection