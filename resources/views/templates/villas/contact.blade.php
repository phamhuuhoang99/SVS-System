@extends('templates.villas.master')
@section('title', 'Villas')
@section('content')


    <!-- page details -->
    <div class="breadcrumb-mobamu">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href={{ route("temp.villas.index") }}>Trang Chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Liên Hệ</li>
        </ol>
    </div>
    <!-- //page details -->

    <!-- contact -->
    <section class="contact py-5" id="contact">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center text-bl font-weight-bold">Liên Hệ</h3>
            <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Điều gì xuất phát từ trái tim, sẽ đi đến trái tim, nên cứ cố hết sức mình để làm sao chỉ với một chi phí hợp lý nhưng lữ khách cũng có thể trải nghiệm những gì hay ho và thoải mái nhất.</p>
            <ul class="list-unstyled row text-left pt-4 mb-lg-5">
                <li class="col-lg-4 adress-info mb-lg-0 mb-5">
                    <div class="row">
                        <div class="col-3 text-lg-center text-sm-right text-center adress-icon">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="col-9 text-left">
                            <h6>Địa Chỉ</h6>
                            <p>Quận Gò Vấp
								<p>Hồ Chí Minh</p>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4 adress-info mb-lg-0 mb-5">
                    <div class="row">
                        <div class="col-3 text-lg-center text-sm-right text-center adress-icon">
                            <span class="fa fa-envelope-open-o"></span>
                        </div>
                        <div class="col-9 text-left">
                            <h6>Email</h6>
                            <a href="mailto:smartvietsolution@gmail.com">smartvietsolution@gmail.com</a>
                            <br>
                            {{--  <a href="mailto:info@example.com">mail2@example.com</a>  --}}
                        </div>
                    </div>
                </li>
                <li class="col-lg-4 adress-info mb-lg-0 mb-5">
                    <div class="row">
                        <div class="col-3 text-lg-center text-sm-right text-center adress-icon">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="col-9 text-left">
                            <h6>Số điện thoại</h6>
                            <p>035 618 5047</p>
                            {{--  <p>+ 0987654321</p>  --}}
                        </div>
                    </div>
                </li>
            </ul>
            <div class="contact-form mx-auto text-left mt-lg-5 mt-4">
                <form name="contactform" id="contactform1">
                    <div class="row">
                        <div class="col-lg-4 con-gd">
                            <div class="form-group" data-aos="fade-up">
                                <label>Họ Tên *</label>
                                <input type="text" class="form-control" id="name" placeholder="" name="name" required="">
                            </div>
                        </div>
                        <div class="col-lg-4 con-gd">
                            <div class="form-group" data-aos="fade-up">
                                <label>Email *</label>
                                <input type="email" class="form-control" id="email" placeholder="" name="email" required="">
                            </div>
                        </div>
                        <div class="col-lg-4 con-gd">
                            <div class="form-group" data-aos="fade-up">
                                <label>Số điện thoại *</label>
                                <input type="text" class="form-control" id="phone" placeholder="" name="phone" required="">
                            </div>
                        </div>

                    </div>

                    <div class="form-group mb-5">
                        <label>Bạn cần hổ trợ thông tin gì?</label>
                        <textarea name="issues" class="form-control" id="iq" placeholder="" required=""></textarea>
                    </div>
                    <div class="contact-page">
                        <button type="submit" class="btn btn-default">Gửi</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- //contact -->

@endsection
