@extends('templates.edulearn.master')
@section('title','Edulearn')
@section('content')
    @include('templates.edulearn.banner')
<!-- breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('temp.edulearn.index') }}">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Tuyển sinh</li>
    </ol>
</nav>
<!-- breadcrumb -->
<!-- //banner -->

<!-- admission form -->
<div class="form-w3l py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Hình thức
            <span class="font-weight-bold">Tuyển sinh</span>
        </h3>
        <div class="register-form pt-md-4">
            <form action="#">
                <div class="styled-input form-group">
                    <input type="text" class="form-control" placeholder="Họ tên" name="Your name" required="">
                </div>
                <div class="styled-input form-group">
                    <input id="datepicker" class="form-control" placeholder="Ngày sinh" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
                </div>
                <div class="styled-input agile-styled-input-top form-group">
                    <select class="category2" required="">
							<option value="">Giới tính</option>
							<option value="">Nam</option>
							<option value="">Nữ</option>
							<option value="">Khác</option>
						</select>
                </div>
                <div class="styled-input form-group">
                    <input type="email" class="form-control" placeholder="E-mail" name="Email" required="">
                </div>
                <div class="styled-input form-group">
                    <input type="text" class="form-control" placeholder="Phone" name="Phone" required="">
                </div>
                <div class="styled-input agile-styled-input-top form-group">
                    <select class="category2" required="">
							<option value="">Chọn Khóa Học</option>
							<option value="">Ngoại Ngữ</option>
							<option value="">Giao Tiếp</option>
							<option value="">Kinh doanh</option>
							<option value="">Phần mềm</option>
							<option value="">Xã Hội</option>
							<option value="">Nhíp Ảnh</option>
							<option value="">Thiết Kế Web</option>
							<option value="">Công Nghệ Web</option>
							<option value="">Khoa Học Mát Tính</option>
							<option value="">Quản Lý Nhân Sự</option>
							<option value="">Marketing</option>
						</select>
                    <span></span>
                </div>
                <div class="styled-input form-group">
                    <div class="agileits_w3layouts_grid">
                        <select class="category2" name="category1" required="">
								<option value="">Chọn Thời Gian Học</option>
								<option value="">Thời gian: 8am - 10am</option>
								<option value="">Thời gian: 10am - 12pm</option>
								<option value="">Thời gian: 12pm - 4pm</option>
								<option value="">Thời gian: 4pm - 7pm</option>
								<option value="">Thời gian: 7pm - 9pm</option>
							</select>
                    </div>
                </div>
                <div class="styled-input">
                    <label class="header-admin-form font-weight-bold text-dark my-3">Địa chỉ của bạn</label>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Địa chỉ" title="Please enter your Address" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Line" title="Please enter your Line" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Thành phố" title="Please enter your City" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Zip Code" title="Please enter your Zip code" required="">
                    </div>
                </div>
                <input type="submit" value="Đăng Ký">
            </form>
        </div>
    </div>
</div>
<!-- admission form -->

@endsection