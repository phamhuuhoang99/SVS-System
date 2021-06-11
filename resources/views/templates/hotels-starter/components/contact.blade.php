<!-- //w3l-header -->
<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Liên hệ với chúng tôi</h2>
            <p><a href={{ URL::route("temp.hotels-starter.index") }}>Home</a> &nbsp; / &nbsp; Liên hệ</p>
        </div>
    </div>
</section>
<!-- contact1 -->
<section class="w3l-contact-1 py-5">
    <div class="contacts-9 py-lg-5 py-sm-4">
        <div class="container">
            <div class="d-grid contact-view">
                <div class="cont-details">
                    <p>Giữ liên lạc</p>
                    <h3 class="title-big">Thông tin và địa chỉ</h3>
                </div>
            </div>
            <div class="map-iframe my-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
                    width="100%" height="300" frameborder="0" style="border: 0px; pointer-events: none;"
                    allowfullscreen=""></iframe>
            </div>
            <div class="d-grid contact-view">
                <div class="cont-details">
                    <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="fa fa-phone text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Gọi cho chúng tôi</h6>
                            <p><a href="tel:035 618 5047">035 618 5047</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-envelope-o text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Hộp thư thoại</h6>
                            <p><a href="mailto:smartvietsolution@gmail.com" class="mail">smartvietsolution@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Địa chỉ</h6>
                            <p>Khách Sạn Luxury, 220/91 Nguyễn Văn Khối, Phường 9 Quận Gò Vấp, Hồ Chí Minh.</p>
                        </div>
                    </div>
                </div>
                <div class="map-content-9 mt-lg-0 mt-4">
                    <div class="twice-two">
                        <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Tên"
                            required="">
                        <input type="email" class="form-control" name="w3lSender" id="w3lSender"
                            placeholder="Email" required="">
                    </div>
                    <div class="twice">
                        <input type="text" class="form-control" name="w3lSubject" id="w3lSubject"
                            placeholder="Tiêu đề" required="">
                    </div>
                    <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Tin nhắn"
                        required=""></textarea>
                    <button type="submit" class="btn btn-contact">Gửi ngay</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /contact1 -->