<section class="w3l-index3">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src={{ URL::asset("templates/hotels-starter/images/videobg.jpg") }} alt="" class="img-fluid" />
                        <a href="#small-dialog"
                            class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="https://player.vimeo.com/video/246941769" allow="autoplay; fullscreen"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self">
                    <h6>Khám phá cùng chúng tôi</h6>
                    <h3 class="title-big">20 năm kinh nghiệm trong nghành dịch vụ và khách sạn</h3>
                    <p class="mt-3">
                        Tự hào là 1 trong những doanh nghiệp mang đến dịch vụ chất lượng nhất cho khách hàng.
                    </p>
                    <ul class="w3l-right-book mt-4">
                        <li><span class="fa fa-check" aria-hidden="true"></span>Mang lại giá trị tốt nhất cho khách hàng</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>DỊch vụ khách sạn chất lượng 5 sao</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Khách sạn hạng sang và resort sang trọng</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Nhiều lựa chọn về phòng nghỉ</li>
                        <li><span class="fa fa-check" aria-hidden="true"></span>Mang lại những trải nghiệm tuyệt vời</li>
                    </ul>
                    <a href={{ URL::route("temp.hotels-starter.about") }} class="btn btn-style btn-primary mt-4">Tìm hiểu thêm</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- quotation -->
<div class="quotation py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="welcome-left text-center py-md-5 py-3">
            <h3>Tận hưởng trải nghiệm cao cấp. Khám phá những điều thú vị. Nghỉ ngơi và tận hưởng kì nghỉ của bạn.</h3>
            <a href={{ URL::route("temp.hotels-starter.index") }} class="btn btn-style transparent-btn mt-sm-5 mt-4 mr-2">Đặt ngay</a>
            <a href={{ URL::route("temp.hotels-starter.contact") }} class="btn btn-style btn-primary mt-sm-5 mt-4">Liên hệ</a>
        </div>
    </div>
</div>
<!-- //quotation -->