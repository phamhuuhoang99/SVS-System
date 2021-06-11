<!-- footer-66 -->
<footer class="w3l-footer-66">
    <section class="footer-inner-main">
        <div class="footer-hny-grids py-5">
            <div class="container py-lg-4">
                <div class="text-txt">
                    <div class="row newsletter-grids-footer">
                        <div class="col-lg-6 newsletter-text pr-lg-5">
                            <h3 class="hny-title two">Bản Tin</h3>
                            <h4>Đăng ký để nhận tin tức khuyến mãi mới nhất của chúng tôi
                            </h4>
                        </div>
                        <div class="col-lg-6 newsletter-right">
                            <form action="#" class="footer-newsletter">

                                <input type="email" name="email" class="form-input" placeholder="Nhập email của bạn..">

                                <button type="submit" class="btn">Đăng Ký</button>
                            </form>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="row sub-columns">
                            <div class="col-lg-4 col-md-6 sub-one-left pr-lg-4">
                                <h2><a class="navbar-brand" href="{{ route('temp.carserving.index') }}">
                                        <span>C</span>arserving
                                    </a></h2>
                                <p class="pr-lg-4">Chúng tôi ra đời với sứ mệnh kết hợp tinh hoa công nghệ
                                    và đôi bàn tay tài hoa của người thợ Việt Nam nhằm khai phá và cung cấp dịch vụ chăm
                                    sóc xe hơi tiêu chuẩn quốc tế cho người tiêu dùng tại Việt Nam. </p>
                                <div class="columns-2">
                                    <ul class="social">
                                        <li><a href="#facebook"><span class="fa fa-facebook"
                                                    aria-hidden="true"></span></a>
                                        </li>
                                        <li><a href="#linkedin"><span class="fa fa-linkedin"
                                                    aria-hidden="true"></span></a>
                                        </li>
                                        <li><a href="#twitter"><span class="fa fa-twitter"
                                                    aria-hidden="true"></span></a>
                                        </li>
                                        <li><a href="#google"><span class="fa fa-google-plus"
                                                    aria-hidden="true"></span></a>
                                        </li>
                                        <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 sub-one-left">
                                <h6>Dịch Vụ</h6>
                                <div class="mid-footer-gd sub-two-right">

                                    <ul>
                                        <li><a href="{{ route('temp.carserving.about') }}"><span
                                                    class="fa fa-angle-double-right mr-2"></span>
                                                Về Chúng Tôi</a>
                                        </li>
                                        <li><a href="{{ route('temp.carserving.services') }}"><span
                                                    class="fa fa-angle-double-right mr-2"></span>
                                                Dịch Vụ</a>
                                        </li>
                                        <li><a href="#"><span class="fa fa-angle-double-right mr-2"></span> Rửa Xe</a>
                                        </li>
                                        <li><a href="#"><span class="fa fa-angle-double-right mr-2"></span>Thay Lốp</a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><span class="fa fa-angle-double-right mr-2"></span>Vệ Sinh
                                                Máy</a>
                                        </li>
                                        <li><a href="#"><span class="fa fa-angle-double-right mr-2"></span>Dán Film Cách
                                                Nhiệt</a>
                                        </li>
                                        <li><a href="#support"><span class="fa fa-angle-double-right mr-2"></span>Dán
                                                Decal</a></li>
                                        <li><a href="{{ route('temp.carserving.contact') }}"><span
                                                    class="fa fa-angle-double-right mr-2"></span>Liên Hệ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 sub-one-left">
                                <h6>Thông Tin Liên Lạc</h6>
                                <div class="sub-contact-info">
                                    <p>Địa Chỉ: 220/91 Nguyễn Văn Khối, Phường 9, Quận Gò Vấp, Hồ Chí Minh</p>
                                    <p class="my-3">Số Điện Thoại: <strong><a href="035 618 5047">035 618 5047</a></strong></p>
                                    <p>E-mail:<strong> <a href="mailto:smartvietsolution@gmail.com">smartvietsolution@gmail.com</a></strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="below-section">
            <div class="container">
                <div class="copyright-footer">
                    <div class="columns text-lg-left">
                        <p>© 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt</p>
                    </div>
                    <ul class="columns text-lg-right">
                        <li><a href="#">Chính Sách Bảo Mật</a>
                        </li>
                        <li>|</li>
                        <li><a href="#">Điều Khoản Sử Dụng</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-long-arrow-up" aria-hidden="true"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->

    </section>
</footer>
<!--//footer-66 -->
