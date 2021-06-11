<!-- footer -->
<footer class="py-5">
    <div class="container py-xl-4">
        <div class="row footer-top">
            <div class="col-lg-4 footer-grid_section_1its footer-text">
                <!-- logo -->
                <h2>
                    <a class="logo text-wh" href={{ URL::route("temp.tasty-burger.index") }}>
                        <img src={{ URL::asset("templates/tasty-burger/images/logo.png") }} alt="" class="img-fluid"><span>Tasty</span> Burger
                    </a>
                </h2>
                <!-- //logo -->
                <p class="mt-lg-4 mt-3 mb-lg-5 mb-4">
                    Mọi thắc mặc xin hãy liên hệ với những địa chỉ bên cạnh, chúng tôi sẽ trả lời bạn
                    sớm nhất có thể
                </p>
                <!-- social icons -->
                <ul class="top-right-info">
                    <li>
                        <p>Theo dõi:</p>
                    </li>
                    <li class="facebook-w3">
                        <a href="#facebbok">
                            <span class="fa fa-facebook-f"></span>
                        </a>
                    </li>
                    <li class="twitter-w3">
                        <a href="#twitter">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                    <li class="google-w3">
                        <a href="#google">
                            <span class="fa fa-google-plus"></span>
                        </a>
                    </li>
                    <li class="dribble-w3">
                        <a href="#dribble">
                            <span class="fa fa-dribbble"></span>
                        </a>
                    </li>
                </ul>
                <!-- //social icons -->
            </div>
            <div class="col-lg-4 footer-grid_section_1its my-lg-0 my-sm-4 my-4">
                <div class="footer-title">
                    <h3>Contact Us</h3>
                </div>
                <div class="footer-text mt-4">
                    <p>Địa chỉ : 220/91 Nguyễn Văn Khối, Phường 9, Quận Gò Vấp, Hồ Chí Minh</p>
                    <p class="my-2">SĐT : 032 625 4592</p>
                    <p>Email : <a href="mailto:smartvietsolution@gmail.com">smartvietsolution@gmail.com</a></p>
                </div>
                <div class="footer-title mt-4 pt-md-2">
                    <h3>Thanh toán online</h3>
                </div>
                <ul class="list-unstyled payment-links mt-4">
                    <li>
                        <a href={{ URL::route("temp.tasty-burger.login") }}><img src={{ URL::asset("templates/tasty-burger/images/pay2.png") }} alt=""></a>
                    </li>
                    <li>
                        <a href={{ URL::route("temp.tasty-burger.login") }}><img src={{ URL::asset("templates/tasty-burger/images/pay5.png") }} alt=""></a>
                    </li>
                    <li>
                        <a href={{ URL::route("temp.tasty-burger.login") }}><img src={{ URL::asset("templates/tasty-burger/images/pay1.png") }} alt=""></a>
                    </li>
                    <li>
                        <a href={{ URL::route("temp.tasty-burger.login") }}><img src={{ URL::asset("templates/tasty-burger/images/pay4.png") }} alt=""></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 footer-grid_section_1its">
                <div class="footer-title">
                    <h3>Thông tin yêu cầu</h3>
                </div>
                <div class="info-form-right mt-4 p-0">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6 form-group mb-2 pr-lg-1">
                                <input type="text" class="form-control" name="Name" placeholder="Tên" required="">
                            </div>
                            <div class="col-lg-6 form-group mb-2 pl-lg-1">
                                <input type="text" class="form-control" name="Phone" placeholder="Số điện thoại"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <input type="email" class="form-control" name="Email" placeholder="Email" required="">
                        </div>
                        <div class="form-group mb-2">
                            <textarea name="Comment" class="form-control" placeholder="Lời nhắn" required=""></textarea>
                        </div>
                        <button type="submit" class="btn submit-contact ml-auto">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="cpy-right text-center py-3">
        <p>© 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt</p>
    </div>
    <!-- //copyright -->
</footer>
<!-- //footer -->

<!-- move top icon -->
<a href="#home" class="move-top text-center">
    <span class="fa fa-level-up" aria-hidden="true"></span>
</a>
<!-- //move top icon -->