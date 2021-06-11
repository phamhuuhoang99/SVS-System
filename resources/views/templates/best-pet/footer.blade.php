<!-- news letter -->
<div class="subscribe jarallax">
    <div class="sub-agileinfo">
        <div class="container">
            <h3 class="agileits-title w3title1">Đăng ký nhân thông tin mới nhất</h3>
            <p>Chúng tôi cung cấp cho các gia đình những thú cưng mà họ chưa từng gặp mặt. Đó là một trách nhiệm to lớn
                đòi hỏi chúng tôi phải thực hiện rất nghiêm túc.</p>
            <form>
                <input type="email" name="email" placeholder="Địa chỉ Email" class="user" required="">
                <input type="submit" value="Đăng ký">
            </form>
            {{-- <p class="spam">We never share your information or it to spam you</p>
            --}}
        </div>
    </div>
</div>
<!-- //news letter -->
<!-- footer -->
<div class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-3 col-sm-6 footer-logo">
                    <div class="agileits-logo">
                        <h2><a href="{{ route('temp.best-pet.index') }}">Best Pets</a></h2>
                    </div>
                    <p>Thương hiệu trong lĩnh vực nhân giống, kinh doanh thú cưng và các loại phụ kiện vật nuôi.</p>
                </div>
                <div class="col-md-3 col-sm-6 footer-grid">
                    <h3>Danh mục</h3>
                    <ul>
                        <li><a href="{{ route('temp.best-pet.index') }}">Trang Chủ</a> </li>
                        <li><a href="{{ route('temp.best-pet.about') }}">Về Chúng Tôi</a></li>
                        <li><a href="{{ route('temp.best-pet.gallery') }}">Bộ Sưu Tập</a></li>
                        <li><a href="{{ route('temp.best-pet.contact') }}">Liên Hệ</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-list">
                    <h3>Bài viết mới</h3>
                    <ul>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Mèo Anh lông ngắn</li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Mèo tai cụp Scottish</li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Mèo Munchkin</li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Chó Samoyed</li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Chó Phốc sóc</li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i>Chó Labrador</li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer-grid">
                    <h3>Tin tức</h3>
                    <ul class="w3agile_footer_grid_list">
                        <li>Top 8 giống chó lông xù được nuôi nhiều nhất
                            <span><i class="fa fa-twitter" aria-hidden="true"></i> 02 ngày trước</span>
                        </li>
                        <li>Top 10 giống mèo thông minh nhất hành tinh
                            <span><i class="fa fa-twitter" aria-hidden="true"></i> 03 ngày trước</span>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>© 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt</p>
        </div>
    </div>
</div>
<!-- //footer -->
<!-- modal-about -->
<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <img src="{{ asset('templates/best-pet/images/g2.jpg') }}" class="img-responsive" alt="" />
                <h4>Hoạt Động Của Chúng Tôi</h4>
                <p>Trên trang Facebook của Sieupet, chúng tôi đăng tải các hình ảnh, video, thông tin hữu ích về: Cách
                    nuôi chó, cách chọn chó, giá chó… Nhằm giúp khách hàng có thêm kiến thức trong lĩnh vực thú cưng.
                    Fanpage Facebook cũng là nơi chúng tôi giao lưu, kết nối với khách hàng của mình. Mọi đánh giá, cảm
                    nhận của khách hàng sẽ được Chúng tôi ghi nhận. </p>
            </div>
        </div>
    </div>
</div>
<!-- //modal-about -->
<!-- modal sign in  -->
<div class="modal bnr-modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body login-page "
                <!-- login-page -->
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item" aria-controls="tab_item-0"><span>Đăng nhập</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-1"><span>Đăng ký</span></li>
                        </ul>
                        <div class="clearfix"> </div>
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="agileits-login">
                                    <form action="#" >
                                        <input type="email" class="email" name="Email" placeholder="Email"
                                            required="" />
                                        <input type="password" class="password" name="Password" placeholder="Password"
                                            required="" />
                                        <div class="wthree-text">
                                            <ul>
                                                <li>
                                                    <label class="anim">
                                                        <input type="checkbox" class="checkbox">
                                                        <span> Nhớ mật khẩu ?</span>
                                                    </label>
                                                </li>
                                                <li> <a href="#">Quên mật khẩu?</a> </li>
                                            </ul>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="w3ls-submit">
                                            <input type="submit" value="Đăng nhập">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="login-top sign-top">
                                    <div class="agileits-login">
                                        <form action="#" >
                                            <input type="text" name="Username" placeholder="Tên tài khoản" required="">
                                            <input type="email" class="email" name="Email" placeholder="Email"
                                                required="" />
                                            <input type="password" class="password" name="Password"
                                                placeholder="Password" required="" />
                                            <label class="anim">
                                                <input type="checkbox" class="checkbox">
                                                <span> Tôi chấp nhận các điều khoản</span>
                                            </label>
                                            <div class="w3ls-submit">
                                                <input class="register" type="submit" value="Đăng ký">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //login-page -->
        </div>
    </div>
</div>
<!-- //modal sign in -->
<!-- js -->
<script src="{{ asset('templates/best-pet/js/jquery-2.2.3.min.js') }}"></script>
<!-- //js -->
<!-- jarallax -->
<script src="{{ asset('templates/best-pet/js/SmoothScroll.min.js') }}"></script>
<script src="{{ asset('templates/best-pet/js/jarallax.js') }}"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })

</script>
<!-- //jarallax -->
<!-- ResponsiveTabs js -->
<script src="{{ asset('templates/best-pet/js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true // 100% fit in a container
        });
    });

</script>
<!-- //ResponsiveTabs js -->
<!-- banner-type-text -->
<script src="{{ asset('templates/best-pet/js/typed.js') }}" type="text/javascript"></script>
<script>
    $(function() {

        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 30,
            backDelay: 700,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function() {
                foo();
            },
            resetCallback: function() {
                newTyped();
            }
        });

        $(".reset").click(function() {
            $("#typed").typed('reset');
        });

    });

    function newTyped() {
        /* A new typed object */ }

    function foo() {
        console.log("Callback");
    }

</script>
<!-- //banner-type-text -->
<!-- flexSlider -->
<script defer src="{{ asset('templates/best-pet/js/jquery.flexslider.js') }}"></script>
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
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="{{ asset('templates/best-pet/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('templates/best-pet/js/easing.js') }}"></script>
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
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
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

<script src="{{ asset('templates/best-pet/js/bootstrap.js') }}"></script>
