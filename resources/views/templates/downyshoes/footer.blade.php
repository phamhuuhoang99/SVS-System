@include('templates.downyshoes.email')

<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<div class="footer_agileinfo_w3">
    <div class="footer_inner_info_w3ls_agileits">
        <div class="col-md-3 footer-left">
            <h2><a href={{ route("temp.downyshoes.index") }}><span>D</span>owny Shoes </a></h2>
            <p>Chúng tôi có nền tảng thương mại SVS được xây dựng nhằm cung cấp cho người dùng những trải nghiệm dễ dàng, an toàn và nhanh chóng khi mua hàng trực tuyến thông qua hệ thống hổ trợ và vận hành vững mạnh.</p>
            <ul class="social-nav model-3d-0 footer-social social two">
                <li>
                    <a href="#" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                    </a>
                </li>
                <li>
                    <a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                    </a>
                </li>
                <li>
                    <a href="#" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    </a>
                </li>
                <li>
                    <a href="#" class="pinterest">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 footer-right">
            <div class="sign-grds">
                <div class="col-md-4 sign-gd">
                    <h4>Thông <span>tin</span> </h4>
                    <ul>
                        <li><a href={{ route("temp.downyshoes.index") }}>Trang Chủ</a></li>
                        <li><a href={{ route("temp.downyshoes.about") }}>Về SVS</a></li>
                        <li><a href={{ route("temp.downyshoes.404") }}>Dịch Vụ</a></li>
                        <li><a href={{ route("temp.downyshoes.404") }}>Short Codes</a></li>
                        <li><a href={{ route("temp.downyshoes.contact") }}>Liên Hệ</a></li>
                    </ul>
                </div>
                <div class="col-md-5 sign-gd-two">
                    <h4>Liên <span>hệ</span></h4>
                    <div class="address">
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Số điện thoại</h6>
                                <p>035 618 5047</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Địa chỉ Email</h6>
                                <p>Email :<a href="mailto:smartvietsolution@gmail.com">smartvietsolution@gmail.com</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Địa chỉ</h6>
                                <p>220/91 Nguyễn Văn Khối, Phường 9
                                    Quận Gò Vấp, Hồ Chí Minh
                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sign-gd flickr-post">
                    <h4>Bài <span>Đăng</span></h4>
                    <ul>
                        <li>
                            <a href={{ route("temp.downyshoes.single") }}><img src={{ asset("templates/downyshoes/img/t1.jpg") }} alt=" " class="img-responsive" /></a>
                        </li>
                        <li>
                            <a href={{ route("temp.downyshoes.single") }}><img src={{ asset("templates/downyshoes/img/t2.jpg") }} alt=" " class="img-responsive" /></a>
                        </li>
                        <li>
                            <a href={{ route("temp.downyshoes.single") }}><img src={{ asset("templates/downyshoes/img/t3.jpg") }} alt=" " class="img-responsive" /></a>
                        </li>
                        <li>
                            <a href={{ route("temp.downyshoes.single") }}><img src={{ asset("templates/downyshoes/img/t4.jpg") }} alt=" " class="img-responsive" /></a>
                        </li>
                        <li>
                            <a href={{ route("temp.downyshoes.single") }}><img src={{ asset("templates/downyshoes/img/t1.jpg") }} alt=" " class="img-responsive" /></a>
                        </li>
                        <li>
                            <a href={{ route("temp.downyshoes.single") }}><img src={{ asset("templates/downyshoes/img/t2.jpg") }} alt=" " class="img-responsive" /></a>
                        </li>
                        <li>
                            <a href={{ route("temp.downyshoes.single") }}><img src={{ asset("templates/downyshoes/img/t3.jpg") }} alt=" " class="img-responsive" /></a>
                        </li>
                        <li>
                            <a href={{ route("temp.downyshoes.single") }}><img src={{ asset("templates/downyshoes/img/t2.jpg") }} alt=" " class="img-responsive" /></a>
                        </li>
                        <li>
                            <a href={{ route("temp.downyshoes.single") }}><img src={{ asset("templates/downyshoes/img/t4.jpg") }} alt=" " class="img-responsive" /></a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <p>© 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt</p>
    </div>
</div>
</div>