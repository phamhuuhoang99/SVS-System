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
        <li class="breadcrumb-item active" aria-current="page">Sắp ra mắt</li>
    </ol>
</nav>
<!-- breadcrumb -->
<!-- //banner -->

<!-- coming soon -->
<div class="w3-main-coming py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Sắp
            <span class="font-weight-bold"> Ra Mắt</span>
        </h3>
        <!-- content -->
        <div class="main-content-agile pt-md-4">
            <div class="w3l-agile-coming text-center ">
                <h3 class="text-dark mb-4">Chúng tôi sẽ ra mắt sớm</h3>
                <p>Chúng tôi luôn luôn cập nhật những sản phẩm mới phục vụ cho khách hàng. </p>
            </div>
            <!--timer-->
            <div class="examples">
                <div class="simply-countdown-losange" id="simply-countdown-losange"></div>
                <div class="clear"></div>
            </div>
            <!--//timer-->
            <!-- newsletter -->
            <div class="sub-main-w3-2">
                <form action="#">
                    <p class="text-dark mb-3 text-right">Gửi thông báo cho tôi khi ra mắt</p>
                    <div class="form-style-agile-2">
                        <input placeholder="Email......" name="Name" type="email" required="">
                        <input type="submit" value="Đăng Ký">
                    </div>
                </form>
            </div>
            <!-- //newsletter -->
        </div>
        <!-- //content -->
    </div>
</div>
<!-- //coming soon -->

@endsection