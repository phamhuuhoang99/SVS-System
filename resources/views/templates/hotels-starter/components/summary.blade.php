<!-- about -->
<section class="w3l-about py-5">
    <div class="container py-sm-4">
        <div class="row">
            <div class="col-lg-6 about-left mb-md-0 mb-5">
                <h3 class="title-big">Nơi nghỉ dưỡng tuyệt vời nhất</h3>
                <h5>Chúng tôi mang đến những trải nghiệm tốt nhất cho các bạn.</h5>
                <p class="mt-3">
                    Ứng dụng của chúng tôi là ứng dụng đặt phòng khách sạn hàng đầu Đông Nam Á với hơn
                    20 triệu người dùng, kết hợp với rất nhiều đối tác khác nhau từ dịch vụ hàng không,
                    nghỉ dưỡng cho đến dịch vụ thanh toán, mang đến cho bạn những trải nghiệm tốt nhất
                    trong chuyến du lịch của mình
                </p>
                <a href={{ URL::route("temp.hotels-starter.about") }} class="btn btn-style btn-primary mt-sm-5 mt-4">Về chúng tôi</a>
            </div>
            <div class="col-lg-6 about-right position-relative mt-lg-0 mt-5">
                <img src={{ URL::asset("templates/hotels-starter/images/top.jpg") }} alt="" class="img-fluid img-border mt-4" />
                <img src={{ URL::asset("templates/hotels-starter/images/bottom.jpg") }} alt="" class="img-fluid position-absolute img-position" />
            </div>
        </div>
    </div>
</section>
<!-- //about -->