@extends('templates.edulearn.master')
@section('title', 'Edulearn')
@section('content')
    @include('templates.edulearn.banner')
<!-- breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('temp.edulearn.index') }}">Trang Chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
    </ol>
</nav>
<!-- breadcrumb -->
<!-- //banner -->

<!-- contact -->
<div class="contact py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Liên
            <span class="font-weight-bold">Hệ</span>
        </h3>
        <div class="row contact-grids agile-1 py-sm-5 pb-sm-0 pb-5">
            <div class="col-sm-4 contact-grid agileinfo-6 mt-sm-0 mt-2">
                <div class="contact-grid1 text-center">
                    <div class="con-ic">
                        <i class="fas fa-map-marker-alt rounded-circle"></i>
                    </div>
                    <h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Địa chỉ</h4>
                    <p>Phường 9, Quận Gò Vấn, TPHCM
                    </p>
                </div>
            </div>
            <div class="col-sm-4 contact-grid agileinfo-6 my-sm-0 my-4">
                <div class="contact-grid1 text-center">
                    <div class="con-ic">
                        <i class="fas fa-phone rounded-circle"></i>
                    </div>
                    <h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Số điện thoại</h4>
                    <p>035 618 5047</p>
                </div>
            </div>
            <div class="col-sm-4 contact-grid agileinfo-6">
                <div class="contact-grid1 text-center">
                    <div class="con-ic">
                        <i class="fas fa-envelope-open rounded-circle"></i>
                    </div>
                    <h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Email</h4>
                    <p>
                        <a href="mailto: smartvietsolution@gmail.com"> smartvietsolution@gmail.com</a>

                    </p>
                </div>
            </div>
        </div>
        <!-- form -->
        <form action="#">
            <div class="contact-grids1 w3agile-6">
                <div class="row">
                    <div class="col-md-6 col-sm-6 contact-form1 form-group">
                        <label class="col-form-label">Họ</label>
                        <input type="text" class="form-control" name="First Name" placeholder="" required="">
                    </div>
                    <div class="col-md-6 col-sm-6 contact-form1 form-group">
                        <label class="col-form-label">Tên</label>
                        <input type="text" class="form-control" name="Last Name" placeholder="" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 contact-form1 form-group">
                        <label class="col-form-label">Chủ đề</label>
                        <input type="text" class="form-control" name="Subject" placeholder="" required="">
                    </div>
                    <div class="col-md-6 col-sm-6 contact-form1 form-group">
                        <label class="col-form-label">E-mail</label>
                        <input type="email" class="form-control" name="Email" placeholder="" required="">
                    </div>
                </div>
                <div class="contact-me animated wow slideInUp form-group">
                    <label class="col-form-label">Lời nhắn</label>
                    <textarea name="Message" class="form-control" placeholder="" required=""> </textarea>
                </div>
                <div class="contact-form">
                    <input type="submit" value="Gửi">
                </div>
            </div>
        </form>
        <!-- //form -->
    </div>
</div>
<!-- //contact -->


@endsection