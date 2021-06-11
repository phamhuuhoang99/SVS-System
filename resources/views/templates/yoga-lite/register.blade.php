@extends('templates.yoga-lite.master')
@section('title', 'Yoga Lite')
@section('content')
    <!-- banner-bottom -->
    <section class="contact-main py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">Đăng Ký Ngay</h3>

            <div class="login px-sm-4 mx-auto mw-100 login-wrapper">
                <form class="login-wrapper w3pvt_mail_grid_right" action="#">
                    <div class="form-group">
                        <label>Tên Đăng Nhập</label>
                        <input class="form-control" type="text" name="Name" placeholder="" required="">
                    </div>

                    <div class="form-group">
                        <label>Số Điện Thoại</label>
                        <input class="form-control" type="text" name="number" placeholder="" required="">
                    </div>

                    <div class="form-group">
                        <label class="mb-2">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                    </div>
                    <button type="submit" class="btn btn-primary submit mt-2 read-more">Đăng Ký</button>
                    {{--  <p class="text-center mt-4">
                        <a href="#">By clicking Signup, I agree to your terms</a>

                    </p>  --}}
                </form>
            </div>
        </div>
    </section>
    <!-- //banner-bottom -->
    <!--/help-line -->
    @include('templates.yoga-lite.help')
    <!--//help-line -->
@endsection