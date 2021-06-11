@extends('templates.inwardly.master')
@section('title', 'Inwardly')
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href={{ route("temp.inwardly.index") }}>Trang Chủ</a>
    </li>
    <li class="breadcrumb-item active">Liên Hệ</li>
</ol>
<!-- contact -->
<section class="banner-bottom-w3ls pt-lg-5 pt-md-3 pt-3">
    <div class="inner-sec-wthreelayouts pt-md-5 pt-md-3 pt-3">
        <h2 class="tittle text-center mb-md-5 mb-4">Liên Hệ</h2>
        <div class="container">
            <div class="address row mb-5">
                <div class="col-lg-4 address-grid-w3l">
                    <div class="row address-info">
                        <div class="col-md-3 address-left text-center">
                            <i class="far fa-map"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            <h6 class="ad-info text-uppercase mb-2">Địa Chỉ</h6>
                            <p> Quận Gò Vấp, Hồ Chí Minh</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 address-grid-w3l">
                    <div class="row address-info">
                        <div class="col-md-3 address-left text-center">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            <h6 class="ad-info text-uppercase mb-2">Email</h6>
                            <p>
                                <a href="mailto:smartvietsolution@gmail.com"> smartvietsolution@gmail.com</a>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 address-grid-w3l">
                    <div class="row address-info">
                        <div class="col-md-3 address-left text-center">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            <h6 class="ad-info text-uppercase mb-2">Điện Thoại</h6>
                            <p> 035 618 5047</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007"
                        allowfullscreen></iframe>

                </div>
                <div class="col-md-6 main_grid_contact">
                    <div class="form">
                        <h4 class="mb-4 text-left">Gửi Lời Nhắn</h4>
                        <form>
                            <div class="form-group">
                                <label class="my-2">Họ Tên</label>
                                <input class="form-control" type="text" name="Name" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="Email" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Lời Nhắn</label>
                                <textarea id="textarea" placeholder=""></textarea>
                            </div>
                            <div class="input-group1">
                                <input class="form-control" type="submit" value="Gửi">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //contact -->

@endsection