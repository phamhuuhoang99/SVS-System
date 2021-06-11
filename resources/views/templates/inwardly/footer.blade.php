@include('templates.inwardly.login')
@include('templates.inwardly.register')
<!--/footer-->
<footer class="footer-main-w3layouts py-md-5 py-4">
    <div class="container-fluid px-lg-5 px-3">
        <div class="row">
            <div class="col-lg-5 footer-grid-w3ls">
                <h3 class="mb-4">Về Chúng tôi</h3>
                <p>Chúng tôi có nền tảng thương mại SVS được xây dựng nhằm cung cấp cho người dùng những trải nghiệm dễ dàng, an toàn và nhanh chóng.</p>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h3 class="text-capitalize mb-3">Theo Dõi</h3>
                        <p><span class="fab fa-twitter"></span> twitter/@my_website</p>
                        <p><span class="fab fa-instagram"></span> instagram/@my_website</p>
                        <p><span class="fab fa-youtube mb-5"></span> youtube/@my_website</p>
                        <a href="#" class="facebook-footer mr-2"><span class="fab mr-1 fa-facebook-f"></span> Facebook</a>
                        <a href="#" class="twitter-footer"><span class="fab mr-1 fa-twitter"></span> Twitter</a>
                    </div>
                    <div class="col-md-6">
                        <h3 class="mb-4">Địa Chỉ</h3>
                        <address class="mb-0">
							<p class="mb-2"><i class="fas fa-map-marker-alt"></i> 220/91 Nguyễn Văn Khối, Phường 9 <br>Quận Gò Vấp, Hồ Chí Minh.</p>
							<p><i class="fas mr-1 fa-phone"></i> 035 618 5047</p>
							{{--  <p><i class="fas mr-1 fa-fax"></i> +11 997 2040 9436 </p>  --}}
							<p><i class="far mr-1 fa-envelope-open"></i> <a href="mailto:smartvietsolution@gmail.com">smartvietsolution@gmail.com</a></p>
						</address>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 footer-grid-w3ls">
                <h3 class="mb-4">Instagram</h3>
                <div class="blog-grids row mb-3">
                    <div class="col-md-4 blog-grid-left">
                        <a href={{ route("temp.inwardly.single") }}>
                            <img src={{ URL::asset("templates/inwardly/images/banner1.jpg") }} class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-md-8 blog-grid-right">
                        <h5>
                            <a href={{ route("temp.inwardly.single") }}>Những thiết kế bếp hiện đại, nổi bật </a>
                        </h5>
                        <div class="sub-meta">
                            <span>
								<i class="far fa-clock"></i> 22/10/2020</span>
                        </div>
                    </div>
                </div>
                <div class="blog-grids row mb-3">
                    <div class="col-md-4 blog-grid-left">
                        <a href={{ route("temp.inwardly.single") }}>
                            <img src={{ URL::asset("templates/inwardly/images/banner2.jpg") }} class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-md-8 blog-grid-right">
                        <h5>
                            <a href={{ route("temp.inwardly.single") }}>Những thiết kế bếp hiện đại, nổi bật </a>
                        </h5>
                        <div class="sub-meta">
                            <span>
								<i class="far fa-clock"></i> 22/12/2020</span>
                        </div>
                    </div>
                </div>
                <div class="blog-grids row mb-3">
                    <div class="col-md-4 blog-grid-left">
                        <a href={{ route("temp.inwardly.single") }}>
                            <img src={{ URL::asset("templates/inwardly/images/banner3.jpg") }} class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-md-8 blog-grid-right">
                        <h5>
                            <a href={{ route("temp.inwardly.single") }}>Những thiết kế bếp hiện đại, nổi bật </a>
                        </h5>
                        <div class="sub-meta">
                            <span>
								<i class="far fa-clock"></i> 23/12/2020</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 footer-grid-w3ls">
                <h3 class="mb-4">Dịch Vụ</h3>
                <ul>
                    <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Thiết kế kiến trúc.</li>
                    <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Thi công xây dựng.</li>
                    <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Nội thất không gian đẹp.</li>
                </ul>
                <h3 class="mt-4 mb-4">Bản Tin</h3>
                <p class="mb-3">Đăng ký để nhận Tin tức, Ưu đãi tuyệt vời và hơn thế nữa</p>
                <form>
                    <input type="email" name="Email" placeholder="Nhập email..." required="">
                    <button class="btn1"><i class="far fa-paper-plane"></i></button>
                    <div class="clearfix"> </div>
                </form>
            </div>
        </div>
    </div>
    <div class="copyright-w3layouts mt-md-5 mt-4 text-center">
        <p>© 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt</p>
    </div>
</footer>
<!-- //footer -->