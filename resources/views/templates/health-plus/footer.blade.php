<!-- footer -->
<div class="footer">
    <div class="container">
        <h4>Đăng ký ngay <span>Để nhận bảng tin mới nhất</span></h4>
        <form action="#">
            <input type="email" name="Email" placeholder="Nhập Email..." required="">
            <input type="submit" value="Gửi">
        </form>
        <div class="agile_footer_copy">
            <div class="w3agile_footer_grids">
                <div class="col-md-4 w3agile_footer_grid">
                    <h3>Về chúng tôi</h3>
                    <p>Với mục tiêu mang đến các dịch vụ chăm sóc sức khỏe cao cấp và toàn diện cho bệnh nhân, phòng
                        khám trang bị toàn bộ hệ thống thiết bị y tế cao cấp và hiện đại, được nhập khẩu từ các nước
                        tiên tiến hàng đầu thế giới.</p>
                </div>
                <div class="col-md-4 w3agile_footer_grid">
                    <h3>Thông tin Liên lạc</h3>
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Quận Gò Vấp,<span> Hồ Chí Minh
                                City.</span></li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a
                                href="mailto:info@example.com">smartvietsolution@gmail.com</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>035 618 5047</li>
                    </ul>
                </div>
                <div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
                    <h3>Danh Mục</h3>
                    <ul>
                        <li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a
                                href="{{ route('temp.health-plus.gallery') }}">Phòng Ban</a></li>
                        <li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a
                                href="{{ route('temp.health-plus.appointment') }}">Đặt Lịch Hẹn</a></li>
                        <li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a
                                href="{{ route('temp.health-plus.about') }}">Về Chúng Tôi</a></li>
                        <li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a
                                href="{{ route('temp.health-plus.contact') }}">Liên Hệ</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="w3_agileits_copy_right_social">
            <div class="col-md-9 agileits_w3layouts_copy_right">
                <p>© 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt</p>
            </div>
            <div class="col-md-3 w3_agile_copy_right">
                <ul class="agileits_social_list">
                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_rss"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //footer -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script src="{{ asset('templates/health-plus/js/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('templates/health-plus/js/JiSlider.js') }}"></script>
<script>
    $(window).load(function() {
        $('#JiSlider').JiSlider({
            color: '#fff',
            start: 3,
            reverse: true
        }).addClass('ff')
    })

</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
            '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>

<script src="{{ asset('templates/health-plus/js/ziehharmonika.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.ziehharmonika').ziehharmonika({
            collapsible: true,
            prefix: ''
        });
    });

</script>
<!-- stats -->
<script src="{{ asset('templates/health-plus/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('templates/health-plus/js/jquery.countup.js') }}"></script>
<script>
    $('.counter').countUp();

</script>
<!-- //stats -->
<script type="text/javascript">
    $(function() {
        $("#bars li .bar").each(function(key, bar) {
            var percentage = $(this).data('percentage');

            $(this).animate({
                'height': percentage + '%'
            }, 1000);
        })
    })

</script>

<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Health Plus
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body">
                    <img src="{{ asset('templates/health-plus/images/g9.jpg') }}" alt=" " class="img-responsive" />
                    <p>Với mục tiêu mang đến các dịch vụ chăm sóc sức khỏe cao cấp và toàn diện cho bệnh nhân, phòng
                        khám trang bị toàn bộ hệ thống thiết bị y tế cao cấp và hiện đại, được nhập khẩu từ các nước
                        tiên tiến hàng đầu thế giới.
                        <i> Phòng khám quy tụ đội ngũ bác sĩ, thạc sĩ, “thầy thuốc ưu tú” đầu ngành.</i>
                    </p>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //bootstrap-pop-up -->

<!-- flexSlider -->
<script defer src="{{ asset('templates/health-plus/js/jquery.flexslider.js') }}"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script>
<!-- //flexSlider -->


<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('templates/health-plus/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('templates/health-plus/js/easing.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });

</script>
<!-- start-smoth-scrolling -->
<script src="{{ asset('templates/health-plus/js/jarallax.js') }}"></script>
<script src="{{ asset('templates/health-plus/js/SmoothScroll.min.js') }}"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })

</script>

<script src="{{ asset('templates/health-plus/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });

</script>
<!-- //here ends scrolling icon -->
<!-- Gallery-Tab-JavaScript -->
<script src="{{ asset('templates/health-plus/js/cbpFWTabs.js') }}"></script>
<script>
    (function() {
        [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });
    })();

</script>
<!-- //Gallery-Tab-JavaScript -->


<!-- Swipe-Box-JavaScript -->
<script src="{{ asset('templates/health-plus/js/jquery.swipebox.min.js') }}"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });

</script>
<!-- //Swipe-Box-JavaScript -->
