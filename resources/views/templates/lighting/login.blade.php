@extends("templates.lighting.master")
@section('title', 'Lighting')
@section('content')
    <div class="login_sec">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href={{ route('temp.lighting.index') }}>Trang Chủ</a></li>
                <li class="active">Đăng Nhập</li>
            </ol>
            <h2>Đăng Nhập</h2>
            <div class="col-md-6 log">
                <form>
                    <h5>Tên Đăng Nhập</h5>
                    <input type="text" value="">
                    <h5>Mật Khẩu</h5>
                    <input type="password" value="">
                    <input type="submit" value="Đăng Nhập">
                    <a class="acount-btn" href={{ route('temp.lighting.account') }}>Tạo Một Tài Khoản</a>
                </form>
                <a href="#">Quên mật khẩu?</a>

            </div>

            <div class="clearfix"></div>
        </div>
    </div>
@endsection
