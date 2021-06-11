@extends('templates.dental-health.master')
@section('title', 'Dental Health')
@section('content')
    <!-- banner -->
    <div class="banner" id="home">
        <div class="layer">
            <div class="container">
                <div class="banner-text-agile">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <!-- banner slider-->
                            <div class="csslider infinity" id="slider1">
                                <input type="radio" name="slides" checked="checked" id="slides_1" />
                                <input type="radio" name="slides" id="slides_2" />
                                <input type="radio" name="slides" id="slides_3" />
                                <ul class="banner_slide_bg">
                                    <li>
                                        <div class="container-fluid">
                                            <div class="w3ls_banner_txt">
                                                <h3 class="b-w3ltxt text-capitalize mt-md-4">Nha Khoa Số 1<span
                                                        style="display: block"> Tại Việt Nam.</span> </h3>
                                                <p class="w3ls_pvt-title my-3">Chúng tôi hi vọng là nơi tạo ra kết quả điều
                                                    trị hoàn hảo nhất và có dịch vụ chăm sóc khách hàng tốt nhất, mang lại
                                                    cho quý bệnh nhân một trải nghiệm hoàn toàn thoải mái và tin tưởng.
                                                </p>
                                                <a href="{{ route('temp.detal-health.about') }}"
                                                    class="btn btn-banner my-sm-3 mb-3">Xem thêm</a>
                                                <a href="{{ route('temp.detal-health.contact') }}"
                                                    class="btn btn-banner1 my-sm-3 mb-3">Tư vấn của Nha sỹ</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="container-fluid">
                                            <div class="w3ls_banner_txt">
                                                <h3 class="b-w3ltxt text-capitalize mt-md-4">Nha Khoa Số 1<span
                                                        style="display: block"> Về Số Lượng Khách Hàng Phục Vụ</span>
                                                </h3>
                                                <p class="w3ls_pvt-title my-3">Cam kết kết quả điều trị bằng văn bản có tính
                                                    pháp lý, và chịu hoàn toàn trách nhiệm trước mọi thất bại bất kể nguyên
                                                    nhân. Trực tiếp các chuyên gia đầu ngành điều trị
                                                </p>
                                                <a href="{{ route('temp.detal-health.about') }}"
                                                    class="btn btn-banner my-sm-3 mb-3">Xem thêm</a>
                                                <a href="{{ route('temp.detal-health.contact') }}"
                                                    class="btn btn-banner1 my-sm-3 mb-3">Tư vấn của Nha sỹ</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="container-fluid">
                                            <div class="w3ls_banner_txt">
                                                <h3 class="b-w3ltxt text-capitalize mt-md-4">Bác Sĩ Nha Khoa<span
                                                        style="display: block"> Được đào tạo chuyên nghiệp.</span> </h3>
                                                <p class="w3ls_pvt-title my-3">Tất cả các bác sĩ của chúng tôi đều có trình
                                                    độ từ thạc sĩ trở lên, đã từng học tập, công tác tại Pháp, Đức, Mỹ, Hàn
                                                    Quốc. Hiện là cố vấn chuyên môn cho nhiều hãng Implant và Chỉnh nha nổi
                                                    tiếng tại Việt Nam.
                                                </p>
                                                <a href="{{ route('temp.detal-health.about') }}"
                                                    class="btn btn-banner my-sm-3 mb-3">Xem thêm</a>
                                                <a href="{{ route('temp.detal-health.contact') }}"
                                                    class="btn btn-banner1 my-sm-3 mb-3">Tư vấn của Nha sỹ</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="navigation">
                                    <div>
                                        <label for="slides_1"></label>
                                        <label for="slides_2"></label>
                                        <label for="slides_3"></label>
                                    </div>
                                </div>
                            </div>
                            <!-- //banner slider-->

                        </div>
                        <div class="col-lg-6 col-md-8">
                            <img src="{{ asset('templates/detal-health/images/banner.png') }}" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->

    @include('templates.dental-health.sectionabout')

    @include('templates.dental-health.sectionservices')

    <!-- testimonials -->
    <section class="feedback" id="testimonials">
        <div class="feedback-layer py-5">
            <div class="container py-lg-5">
                <h3 class="heading text-center mb-sm-5 mb-4">Khách Hàng Nói Về Chúng Tôi</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="feedback-info">
                            <div class="feedback-top p-4">
                                <span class="fa fa-quote-right"></span>
                                <p> Mình đã tìm hiểu rất nhiều nha khoa, sau khi được bạn bè người thân tư vấn mình đã tự
                                    tin chọn Lạc Việt Intech</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="{{ asset('templates/detal-health/images/ser1.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Anh Thư</h5>
                                    <p class="font-italic">- 19/05/2020.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                        <div class="feedback-info">
                            <div class="feedback-top p-4">
                                <span class="fa fa-quote-right"></span>
                                <p> Trong thời gian điều trị em thấy các bác sĩ rất tận tình, tỉ mỉ và cẩn thận. Em rất tự
                                    tin với diện mạo mới này.</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="{{ asset('templates/detal-health/images/ser2.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Tấn Hưng</h5>
                                    <p class="font-italic">- 20/12/2020.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                        <div class="feedback-info">
                            <div class="feedback-top p-4">
                                <span class="fa fa-quote-right"></span>
                                <p>Các bác sĩ giỏi chuyên môn và có kinh nghiệm chỉnh nha lâu năm. Mình hoàn toàn yên tâm
                                    khi chỉnh nha tại đây</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="{{ asset('templates/detal-health/images/ser3.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Doãn Trung</h5>
                                    <p class="font-italic">- 20/11/2020.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //testimonials -->

    <!-- blog -->
    <section class="blog py-5">
        <div class="container py-md-5 py-3">
            <h3 class="heading text-center mb-sm-5 mb-4">Bài Viết Mới Nhất</h3>
            <div class="row blog-grids">
                <div class="col-lg-7 mb-lg-5 blog-img1">
                    <img src="{{ asset('templates/detal-health/images/blog1.jpg') }}" alt="" class="img-fluid" />
                    <a href="{{ route('temp.detal-health.single') }}">Blog #1</a>
                </div>
                <div class="col-lg-5 mb-lg-5 mb-4">
                    <h5>25/08/2020.</h5>
                    <h4 class="my-3">Nụ cười chuẩn vàng, dễ dàng trả góp.</h4>
                    <p class="my-3">Với mong muốn mang tới giải pháp mới nhằm hỗ trợ tốt nhất cho khách hàng có nhu cầu làm
                        đẹp, chỉnh nha tại cơ sở uy tín, chất lượng nhưng còn băn khoăn về tài chính, Nha khoa chúng tôi
                        chính thức triển khai chương trình ưu đãi.</p>
                    <a href="{{ route('temp.detal-health.single') }}" class="btn-banner"> Xem Thêm </a>
                </div>
                <div class="col-lg-5 mb-lg-0 mb-4">
                    <h5>25/06/2020</h5>
                    <h4 class="my-3">90% Trẻ em đang gặp vấn đề về răng miệng.</h4>
                    <p class="my-3">“Cái răng cái tóc là góc con người”, một hàm răng đẹp không chỉ mang đến hiệu quả thẩm
                        mỹ mà còn đảm bảo sức khỏe và ăn nhai tốt. Với trẻ em, vấn đề răng miệng lại càng cần được quan tâm
                        hơn nữa.</p>
                    <a href="{{ route('temp.detal-health.single') }}" class="btn-banner"> Xem Thêm </a>
                </div>
                <div class="col-lg-7 blog-img2">
                    <img src="{{ asset('templates/detal-health/images/blog1.jpg') }}" alt="" class="img-fluid" />
                    <a href="{{ route('temp.detal-health.single') }}">Blog #2</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //blog -->

    @include('templates.dental-health.appointment')
@endsection
