<div class="footer">
    <div class="container">
        <div class="footer_top">
            <h3>Hãy đăng ký ngay</h3>
            <form>
                <span>
                    <i><img src={{ URL::asset("templates/hotel-deluxe/images/mail.png") }} alt=""></i>
                    <input type="text" value="Email của bạn" onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Email của bạn';}">
                    <label class="btn1 btn2 btn-2 btn-2g"> <input name="submit" type="submit" id="submit"
                            value="Đăng ký"> </label>
                    <div class="clearfix"> </div>
                </span>
            </form>
        </div>
        <div class="footer_grids">
            <div class="footer-grid">
                <h4>Mục lục</h4>
                <ul class="list1">
                    <li><a href={{ URL::route("temp.hotel-deluxe.index") }}>Trang chủ</a></li>
                    <li><a href={{ URL::route("temp.hotel-deluxe.rooms") }}>Phòng</a></li>
                    <li><a href={{ URL::route("temp.hotel-deluxe.news") }}>Tin tức</a></li>
                    <li><a href={{ URL::route("temp.hotel-deluxe.gallery") }}>Thư viện</a></li>
                    <li><a href={{ URL::route("temp.hotel-deluxe.contact") }}>Liên hệ</a></li>
                </ul>
            </div>
            <div class="footer-grid">
                <h4 style="width: 100%">Các bài báo</h4>
                <ul class="list1">
                    <li><a href="#">Top 5 ứng dụng tìm kiếm khách sạn</a></li>
                    <li><a href="#">Sự kiện khuyến mãi 20% ngày 10/10</a></li>
                    <li><a href="#">Tại sao nên chọn Hotel Deluxe</a></li>
                    <li><a href="#">Bãi biển Vung Tàu có gì đẹp?</a></li>
                    <li><a href="#">15 ngày vòng quanh đất nước Việt Nam</a></li>
                </ul>
            </div>
            <div class="footer-grid last_grid">
                <h4>Theo dõi</h4>
                <ul class="footer_social wow fadeInLeft" data-wow-delay="0.4s">
                    <li><a href=""> <i class="fb"> </i> </a></li>
                    <li><a href=""><i class="tw"> </i> </a></li>
                    <li><a href=""><i class="google"> </i> </a></li>
                    <li><a href=""><i class="u_tube"> </i> </a></li>
                </ul>
                <div class="copy wow fadeInRight" data-wow-delay="0.4s">
                    <p>© 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>