<section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
        <div class="container py-lg-4">
            <div class="row footer-top-29">
                <div class="col-lg-4 col-md-6 col-sm-12 footer-list-29 footer-1">
                    <h2><a href="{{ route('temp.pet-sitter.index') }}" class=""><span class="fa fa-paw mr-2"
                                aria-hidden="true"></span> Pet
                            Sitter</a></h2>
                    <p> Không ngừng cố gắng, nỗ lực để trở thành thương hiệu mua bán thú cưng uy tín nhất tại Việt Nam.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-5 footer-list-29 footer-3">
                    <h6 class="footer-title-29">Liên hệ</h6>

                    <div class="column2">
                        <div class="href1"><span>E-mail:</span><a
                                href="mailto:mail@company.com">smartvietsolution@gmail.com</a>
                        </div>
                        <div class="href2"><span>Phone:</span><a href="tel:+(12)-00 222 00008">035 618 5047</a>
                        </div>
                        <div>
                            <p class="contact-para">Phường 9
                                Quận Gò Vấp, Hồ Chí Minh</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4">
                    <h6 class="footer-title-29">Bản tin </h6>
                    <p>Nhập email của bạn và nhận tin tức mới nhất từ ​​chúng tôi</p>

                    <form action="#" class="subscribe" >
                        <input type="email" name="email" placeholder="Nhập Địa chỉ Email" required="">
                        <button><span class="fa fa-envelope-o"></span></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="bottom-copies text-center">
        <div class="container">
            <p class="copy-footer-29">
                © 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt
            </p>
        </div>
    </div>
</section>


<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-eject"></span>
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
<script src="{{ asset('templates/pet-sitter/js/jquery-3.3.1.min.js') }}"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="{{ asset('templates/pet-sitter/js/bootstrap.min.js') }}"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });

</script>
<!-- disable body scroll which navbar is in active -->
