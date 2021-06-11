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
        <li class="breadcrumb-item active" aria-current="page">Đăng nhập</li>
    </ol>
</nav>
<!-- breadcrumb -->
<!-- //banner -->

<!-- login -->
<div class="login-w3ls py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Đăng Nhập
            <span class="font-weight-bold">Ngay</span>
        </h3>
        <!-- content -->
        <div class="sub-main-w3 pt-md-4">
            <form action="#">
                <div class="form-style-agile form-group">
                    <label>
							Tài Khoản
							<i class="fas fa-user"></i>
						</label>
                    <input placeholder="Tài Khoản" class="form-control" name="Name" type="text" required="">
                </div>
                <div class="form-style-agile form-group">
                    <label>
							Password
							<i class="fas fa-unlock-alt"></i>
						</label>
                    <input placeholder="Password" class="form-control" name="Password" type="password" required="">
                </div>
                <!-- switch -->
                <ul class="list-unstyled list-login">
                    <li class="switch-agileits float-left">
                        <label class="switch  text-capitalize">
								<input type="checkbox">
								<span class="slider-switch round"></span>
								Nhớ mật khẩu
							</label>
                    </li>
                    <li class="float-right">
                        <a href="#" class="text-right text-white text-capitalize">Quên mật khẩu?</a>
                    </li>
                </ul>
                <!-- //switch -->
                <input type="submit" value="Đăng Nhập">
                <p class="text-center dont-do mt-4 text-white">Không có tài khoản?
                    <a href="{{ route("temp.edulearn.register") }}" class="text-white  font-weight-bold">
							Đăng Ký</a>
                </p>
            </form>
        </div>
        <!-- //content -->
    </div>
</div>
<!-- //login -->

@endsection