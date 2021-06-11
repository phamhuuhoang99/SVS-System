<!-- banner -->
<div class="main-banner-2">

</div>
<!-- //banner -->

<!-- page details -->
<div class="breadcrumb-agile bg-light py-2">
    <ol class="breadcrumb bg-light m-0">
        <li class="breadcrumb-item">
            <a href={{ URL::route("temp.tasty-burger.index") }}>Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
    </ol>
</div>
<!-- //page details -->

<!-- contact -->
<section class="ab-info-main py-5" id="contact">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-section text-center mb-md-5 mb-4">
            <h3 class="w3ls-title mb-3">Thông tin <span>liên hệ</span></h3>
            <p class="titile-para-text mx-auto">
                hãy liên lạc ngay với chúng tôi đển nhận được sự phục vụ tốt nhất
            </p>
        </div>
        <div class="row contact-agileinfo pt-lg-4">
            <!-- contact address -->
            <div class="col-md-5 address">
                <h3 class="footer-title mb-4 pb-lg-2">Thông tin liên lạc</h3>
                <div class="row address-info-w3ls">
                    <div class="col-3 address-left">
                        <img src={{ URL::asset("templates/tasty-burger/images/c1.png") }} alt="" class="img-fluid">
                    </div>
                    <div class="col-9 address-right mt-2">
                        <h5 class="address mb-2">Địa chỉ</h5>
                        <p>220/91 Nguyễn Văn Khối, Phường 9, Quận Gò Vấp, Hồ Chí Minh</p>
                    </div>
                </div>
                <div class="row address-info-w3ls my-2">
                    <div class="col-3 address-left">
                        <img src={{ URL::asset("templates/tasty-burger/images/c2.png") }} alt="" class="img-fluid">
                    </div>
                    <div class="col-9 address-right mt-2">
                        <h5 class="address mb-2">Email</h5>
                        <p>
                            <a href="mailto:smartvietsolution@gmail.com">smartvietsolution@gmail.com</a>
                        </p>
                    </div>
                </div>
                <div class="row address-info-w3ls">
                    <div class="col-3 address-left">
                        <img src={{ URL::asset("templates/tasty-burger/images/c3.png") }} alt="" class="img-fluid">
                    </div>
                    <div class="col-9 address-right mt-2">
                        <h5 class="address mb-2">Số điện thoại</h5>
                        <p>032 625 4592</p>
                    </div>
                </div>
            </div>
            <!-- //contact address -->
            <!-- contact form -->
            <div class="col-lg-7 contact-right mt-lg-0 mt-5">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6 form-group pr-lg-2">
                            <input type="text" class="form-control" name="Name" placeholder="Tên" required="">
                        </div>
                        <div class="col-lg-6 form-group pl-lg-2">
                            <input type="email" class="form-control" name="Email" placeholder="Email" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="Phone" placeholder="Số điện thoại" required="">
                    </div>
                    <div class="form-group">
                        <textarea name="Message" class="form-control" placeholder="Tin nhắn" required=""></textarea>
                    </div>
                    <button type="submit" class="btn submit-contact-main ml-auto">Gửi</button>
                </form>
            </div>
            <!-- contact form -->
        </div>
    </div>
</section>
<!-- contact -->

<!-- map -->
<section class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007"
        allowfullscreen></iframe>
</section>
<!-- //map -->