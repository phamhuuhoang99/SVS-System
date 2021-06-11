<!-- footer -->
<footer>
    <div class="container">
        <div class="agileits-w3layouts-footer-grids">
            <div class="col-md-4 footer-left">
                <h3>
                    <a href="{{ route('temp.cat-club.index') }}">Cat <span>Club</span></a>
                </h3>
                <div class="footer-social-grids">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 footer-left">
                <h4>Danh mục</h4>
                <div class="col-md-6 footer-grid-left">
                    <ul>
                        <li><a class="active" href="{{ route('temp.cat-club.index') }}">Trang Chủ</a></li>
                        <li><a href="{{ route('temp.cat-club.about') }}">Về Chúng Tôi</a></li>
                        <li><a href="{{ route('temp.cat-club.gallery') }}">Bộ Sưu Tập</a></li>
                    </ul>
                </div>
                <div class="col-md-6 footer-grid-left">
                    <ul>
                        <li><a href="{{ route('temp.cat-club.blog') }}">Blog</a></li>
                        <li><a href="{{ route('temp.cat-club.contact') }}">Liên Hệ</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 footer-left">
                <h4>Bản tin</h4>
                <p>Đăng ký để nhận những thông tin mới nhất</p>
                <form action="#">
                    <input type="email" placeholder="Nhập Email" name="Subscribe" required="">
                    <button class="btn1">Đăng Ký</button>
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</footer>
<!-- footer -->
<!-- copyright -->
<div class="copyright">
    <div class="container">
        <p>© 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt</p>
    </div>
</div>
<!-- //copyright -->
<script src="{{ asset('templates/cat-club/js/responsiveslides.min.js') }}"></script>
<script src="{{ asset('templates/cat-club/js/SmoothScroll.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('templates/cat-club/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('templates/cat-club/js/easing.js') }}"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->