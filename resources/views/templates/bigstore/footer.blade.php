<div class="footer">
    <div class="container">
        <div class="col-md-3 footer-grid">
            <h3>Về SVS</h3>
            <p>Chúng tôi có nền tảng thương mại SVS được xây dựng nhằm cung cấp cho người dùng những trải nghiệm dễ dàng, an toàn và nhanh chóng khi mua hàng trực tuyến thông qua hệ thống hổ trợ và vận hành vững mạnh.</p>
        </div>
        <div class="col-md-3 footer-grid ">
            <h3>Danh mục</h3>
            <ul>
                <li><a href="{{ route('temp.bigstore.index') }}">Trang Chủ</a></li>
                <li><a href="{{ route('temp.bigstore.kitchen') }}">Nhà bếp</a></li>
                <li><a href="{{ route('temp.bigstore.kitchen') }}">Chăm sóc cá nhân</a></li>
                <li><a href="{{ route('temp.bigstore.kitchen') }}">Hộ gia đình</a></li>
                <li><a href="{{ route('temp.bigstore.contact') }}">Liên hệ với chúng tôi</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-grid ">
            <h3>Hổ trợ khách hàng</h3>
            <ul>
                {{-- <li><a href="shipping.html">Shipping</a></li>
                <li><a href="terms.html">Terms & Conditions</a></li>
                <li><a href="faqs.html">Faqs</a></li> --}}
                <li><a href="{{ route('temp.bigstore.contact') }}">Liên hệ</a></li>
                {{-- <li><a href="offer.html">Online Shopping</a></li> --}}

            </ul>
        </div>
        <div class="col-md-3 footer-grid">
            <h3>Tài Khoản</h3>
            <ul>
                <li><a href="{{ route('temp.bigstore.login') }}">Đăng nhập</a></li>
                <li><a href="{{ route('temp.bigstore.register') }}">Đăng ký</a></li>
                {{-- <li><a href="wishlist.html">Wishlist</a></li> --}}

            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="footer-bottom">
            <h2><a href="{{ route('temp.bigstore.index') }}"><b>T<br>H<br>E</b>Big Store</a></h2>
            <p class="fo-para">Nếu bạn đang tìm kiếm một trang web để mua và bán hàng trực tuyến thì SVS là một sự lựa chọn hiệu quả dành cho bạn. SVS cho phép người mua và người bán hàng dễ dàng tương tác, trao đổi thông tin về sản phẩm và chương trình khuyến mãi của shop nên việc mua bán chở nên nhanh chóng hơn.</p>
            <ul class="social-fo">
                <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            </ul>
            <div class=" address">
                <div class="col-md-4 fo-grid1">
                    <p><i class="fa fa-home" aria-hidden="true"></i>220/91 Nguyễn Văn Khối, Phường 9 <br>Quận Gò Vấp, Hồ Chí Minh</br></p>
                </div>
                <div class="col-md-4 fo-grid1">
                    <p><i class="fa fa-phone" aria-hidden="true"></i>035 618 5047</p>
                </div>
                <div class="col-md-4 fo-grid1">
                    <p><a href="mailto:smartvietsolution@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>smartvietsolution@gmail.com</a></p>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
        <div class="copy-right">
            <p>© 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt</p>
        </div>
    </div>
</div>