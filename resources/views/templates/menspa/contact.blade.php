@extends('templates.menspa.master')
@section('title', 'Men Spa')
@section('content')
    <!-- banner -->
    <section class="inner-page-banner" id="home">
    </section>
    <!-- //banner -->

    <!-- page details -->
    <div class="breadcrumb-agile">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href={{ route("temp.menspa.index") }}>Trang Chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Liên Hệ</li>
        </ol>
    </div>
    <!-- //page details -->
    <!-- //banner-botttom -->
    <section class="content-info py-5">
        <div class="container py-md-5">
            <div class="text-center px-lg-5">
                <h3 class="heading text-center mb-3 mb-sm-5">Liên hệ</h3>
                <div class="title-desc text-center px-lg-5">
                    <p class="px-lg-5 sub-wthree">Quán tin tưởng & nỗ lực mỗi ngày để kết nối bàn tay tài hoa của người thợ Việt cùng quy trình khoa học 30 phút nhằm đem đến cho phái mạnh toàn cầu kiểu tóc đẹp trai, làn da khoẻ mạnh cuốn hút phái đẹp; tinh thần thư giãn để bứt phá trong sự nghiệp.</p>
                </div>
            </div>
            <div class="contact-w3pvt-form mt-5">
                <form  class="w3layouts-contact-fm">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Họ</label>
                                <input class="form-control" type="text" name="Name" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" type="text" name="Name" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="Email" placeholder="" required="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Lời nhắn</label>
                                <textarea class="form-control" name="Message" placeholder="" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group mx-auto mt-3">
                            <button type="submit" class="btn submit">Gửi</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <!-- //banner-botttom -->

    <div class="map-w3layouts">
        <iframe
            src={{ URL::asset("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007") }} allowfullscreen=""></iframe>
    </div>
@endsection
