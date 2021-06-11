<div
    @if($check)
        class="banner agileits"
    @else
        class="banner1 agileits"
    @endif

>
    <div class="header">
        <div class="container">
            <div class="header-main">
                <div class="logo">
                    <h1><span class="books"></span> <a href="{{route('temp.learning.index') }}">Learning</a></h1>
                </div>
                <div class="top-nav">
                    <span class="menu"> <img src="{{ asset('templates/learning/images/icon.png') }}" alt=""></span>
                    <nav class="cl-effect-21" id="cl-effect-21">
                        <ul class="res">
                            <li><a href="{{route('temp.learning.index') }}" class="active">Trang Chủ</a></li>
                            <li><a href="{{route('temp.learning.about') }}">Về Chúng Tôi</a></li>
                            <li><a href="{{route('temp.learning.gallery') }}">Bộ Sưu Tập</a></li>
                            <li><a href="{{route('temp.learning.contact') }}">Liên Hệ</a></li>
                        </ul>
                    </nav>
                    <script>
                        $( "span.menu" ).click(function() {
                          $( "ul.res" ).slideToggle( 300, function() {
                          // Animation complete.
                           });
                          });
                     </script>

                </div>
                <div class="clearfix"> </div>
            </div>
            @if ($check == true)
                <div class="banner-main">
                    <section class="slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="banner-main">
                                        <h3>HỌC MỌI LÚC, MỌI NƠI</h3>
                                        <p>Nếu bạn có đam mê với giáo dục, hãy cùng Chúng tôi tạo nên những đột phá mới để thay đổi thực tại và kiến tạo tương lai!</p>
                                        <div class="clearfix"> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-main">
                                        <h3>TRẢI NGHIỆM PHƯƠNG PHÁP HỌC TẬP HIỆN ĐẠI</h3>
                                        <p>Nếu bạn có đam mê với giáo dục, hãy cùng Chúng tôi tạo nên những đột phá mới để thay đổi thực tại và kiến tạo tương lai!</p>
                                        <div class="clearfix"> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-main">
                                        <h3>LỢI THẾ CỦA MÔ HÌNH ĐÀO TẠO ELEARNING</h3>
                                        <p>E-learning không chỉ là một lĩnh vực đầu tư tiềm năng mà còn là một sản phẩm nhân văn, mang lại cơ hội tiếp cận tri thức tinh hoa cho tất cả mọi người.</p>
                                        <div class="clearfix"> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </section>
                </div>
            @endif
        </div>
    </div>
</div>
<!--header end here-->
@if($check==true)
<!-- FlexSlider -->
<script defer src="{{ asset('templates/learning/js/jquery.flexslider.js') }}"></script>
<script type="text/javascript">
    $(function() {});
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script>
<!-- FlexSlider -->
@endif
<!--banner end here-->

