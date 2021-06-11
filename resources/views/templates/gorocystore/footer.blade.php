<!-- newsletter -->
<div class="newsletter">
    <div class="container">
        <div class="w3agile_newsletter_left">
            <h3>Đăng ký nhận thông tin ưu đãi</h3>
        </div>
        <div class="w3agile_newsletter_right">
            <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
            <input type="submit" value="Đăng ký ngay">
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //newsletter -->
<div class="footer">
    <div class="container">
        <div class="col-md-3 w3_footer_grid">
            <h3>thông tin</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="{{ route('temp.gorocystore.events') }}">sự kiện</a></li>
                <li><a href="{{ route('temp.gorocystore.about') }}">Về SVS</a></li>
                <li><a href="{{ route('temp.gorocystore.products') }}">Giao dịch tốt nhất</a></li>
                <li><a href="{{ route('temp.gorocystore.services') }}">Dịch vụ</a></li>
            </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
            <h3>Thông tin chính sách</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="#">Câu hỏi thường gặp</a></li>
                <li><a href="#">Chính sách bảo mật</a></li>
                <li><a href="#">Điều khoản sử dụng</a></li>
            </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
            <h3>Có gì trong cửa hàng</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="{{ route('temp.gorocystore.pet') }}">Thức ăn cho thú cưng</a></li>
                <li><a href="{{ route('temp.gorocystore.frozen') }}">Đồ ăn nhẹ đông lạnh</a></li>
                <li><a href="{{ route('temp.gorocystore.kitchen') }}">Phòng bếp<picture></picture></a></li>
                <li><a href="{{ route('temp.gorocystore.products') }}">Thực phẩm có thương hiệu</a></li>
                <li><a href="{{ route('temp.gorocystore.household') }}">Hộ gia đình</a></li>
            </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
            <h3>Bài viết trên twitter</h3>
            <ul class="w3_footer_grid_list1">
                <li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 giờ trước</i><span>Chất lượng sản phẩm tuyệt vời, giao hàng nhanh, đóng gói cẩn thận.</span></li>
                <li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 giờ trước</i><span>Chất lượng sản phẩm rất tốt, thời gian giao hàng khá nhanh, thanks bạn shop nhiều</span></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        <div class="agile_footer_grids">
            <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                <div class="w3_footer_grid_bottom">
                    <h4>Thanh toán an toàn 100%</h4>
                    <img src="/templates/gorocystore/images/card.png" alt=" " class="img-responsive" />
                </div>
            </div>
            <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                <div class="w3_footer_grid_bottom">
                    <h5>Kết nối với chúng tôi</h5>
                    <ul class="agileits_social_icons">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="wthree_footer_copy">
            <p>© 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt</p>
        </div>
    </div>
</div>
<!-- Bootstrap Core JavaScript -->
<script src={{ URL::asset("templates/gorocystore/js/bootstrap.min.js") }}></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });
        });
</script>
<script src={{ URL::asset("templates/gorocystore/js/minicart.js") }}></script>
<script>
    paypal.minicart.render();
    paypal.minicart.cart.on('checkout', function (evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;
        // Count the number of each item in the cart
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }
        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });
</script>