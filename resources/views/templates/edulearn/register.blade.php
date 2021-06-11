@extends('templates.edulearn.master')
@section('title', 'Edulearn')
@section('content')
    @include('templates.edulearn.banner')
<!-- breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('temp.edulearn.index') }}">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Đăng ký</li>
    </ol>
</nav>
<!-- breadcrumb -->
<!-- //banner -->

<!-- register -->
<div class="login-w3ls py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Đăng Ký
            <span class="font-weight-bold">Ngay</span>
        </h3>
        <!-- content -->
        <div class="sub-main-w3 pt-md-4">
            <form action="#">
                <div class="form-style-agile form-group">
                    <label>
							Họ Tên
							<i class="fas fa-user"></i>
						</label>
                    <input placeholder="Họ Tên" class="form-control" name="Name" type="text" required="">
                </div>
                <div class="form-style-agile form-group">
                    <label>
							Email
							<i class="fas fa-envelope"></i>
						</label>
                    <input placeholder="Email" class="form-control" name="Email" type="email" required="">
                </div>
                <div class="form-style-agile form-group">
                    <label>
							Password
							<i class="fas fa-unlock-alt"></i>
						</label>
                    <input placeholder="Password" class="form-control" name="Password" id="password1" type="password" required="">
                </div>
                <div class="form-style-agile form-group">
                    <label>
							Nhập Lại Mật Khẩu
							<i class="fas fa-unlock-alt"></i>
						</label>
                    <input placeholder="Nhập Lại Mật Khẩu" class="form-control" name="Confirm Password" id="password2" type="password" required="">
                </div>
                <!-- switch -->
                <ul class="list-unstyled list-login">
                    <li class="switch-agileits float-left">
                        <label class="switch  text-capitalize">
								<input type="checkbox">
								<span class="slider-switch slider-switch-2 round"></span>
								Tôi đồng ý với tất cả của Điều khoản
							</label>
                    </li>
                </ul>
                <!-- //switch -->
                <input type="submit" value="Đăng Ký">
            </form>
        </div>
        <!-- //content -->
    </div>
</div>
<!-- //register -->

@endsection