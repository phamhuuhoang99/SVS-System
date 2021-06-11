@extends('templates.gorocystore.master')
@section('title', 'Cửa hàng tạp hóa điện tử trực tuyến')
@section('content')
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('temp.gorocystore.index') }}">Trang chủ</a><span>|</span></li>
            <li>Về SVS</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    @include('templates.gorocystore.leftbanner')
    <div class="w3l_banner_nav_right">
<!-- about -->
    <div class="privacy about">
        <h3>Về SVS</h3>
        <p class="animi">Chúng tôi có nền tảng thương mại SVS được xây dựng nhằm cung cấp cho người dùng những trải nghiệm dễ dàng, an toàn và nhanh chóng khi mua hàng trực tuyến thông qua hệ thống hổ trợ và vận hành vững mạnh.</p>
        <div class="agile_about_grids">
            <div class="col-md-6 agile_about_grid_right">
                <img src="/templates/gorocystore/images/31.jpg" alt=" " class="img-responsive" />
            </div>
            <div class="col-md-6 agile_about_grid_left">
                <ol>
                    <li>Khách hàng là số 1</li>
                    <li>Giải pháp tối ưu</li>
                    <li>Bảo mật tuyệt đối</li>
                    <li>Maketing online</li>
                </ol>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- //about -->
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- team -->
<div class="team">
    <div class="container">
        <h3>Đội ngũ của chúng tôi</h3>
        <div class="agileits_team_grids">
            <div class="col-md-3 agileits_team_grid">
                <img src="/templates/gorocystore/images/32.jpg" alt=" " class="img-responsive" />
                <h4>Martin Paul</h4>
                <p>Manager</p>
                <ul class="agileits_social_icons agileits_social_icons_team">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 agileits_team_grid">
                <img src="/templates/gorocystore/images/33.jpg" alt=" " class="img-responsive" />
                <h4>Michael Rick</h4>
                <p>Supervisor</p>
                <ul class="agileits_social_icons agileits_social_icons_team">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 agileits_team_grid">
                <img src="/templates/gorocystore/images/34.jpg" alt=" " class="img-responsive" />
                <h4>Thomas Carl</h4>
                <p>Supervisor</p>
                <ul class="agileits_social_icons agileits_social_icons_team">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 agileits_team_grid">
                <img src="/templates/gorocystore/images/35.jpg" alt=" " class="img-responsive" />
                <h4>Laura Lee</h4>
                <p>CEO</p>
                <ul class="agileits_social_icons agileits_social_icons_team">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //team -->
<!-- testimonials -->
<div class="testimonials">
    <div class="container">
        <h3>Khách hàng nói về chúng tôi</h3>
            <div class="w3_testimonials_grids">
                <div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>” Nhân viên SVS luôn làm cho chúng tôi biết về thực hành tốt nhất và các giải pháp công nghệ sẵn có, và họ đã thành thạo trong việc tích hợp chúng vào các dự án của chúng tôi. chuyên gia tư vấn của họ cũng dễ dàng để làm việc với các dự án hoàn thành đúng thời hạn và hệ thống của họ tiếp tục chạy tốt nếu có lỗi họ sẽ sửa miễn phí.”</p>
                                    <h4>Chị Yisan <span>Khách hàng</span></h4>
                                </div>
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>“SVS có một đội ngũ phi thường. Tôi đã học được những điều hay và chuyên nghiệp khi làm việc với đội ngũ của họ. Họ cung cấp dịch vụ nhanh chóng và chuyên nghiệp. Tôi thực sự hạnh phúc khi có được một cơ hội để làm việc với họ trong quá khứ cũng như trong tương lai..”.</p>
                                    <h4>Chị Đỗ trần hà my <span>Khách hàng</span></h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>“SVS đã thiết lập, duy trì, phát triển và toàn bộ hệ thống CNTT của chúng tôi để tôi có thể giữ cho tâm trí của tôi miễn phí để tập trung vào chỉ làm kinh doanh. Tôi hạnh phúc với các dịch vụ của họ hơn. Bất kỳ vấn đề công ty chúng tôi đáp ứng liên quan đến cơ sở hạ tầng CNTT, trang web, dữ liệu và an ninh hệ thống, ngay lập tức tôi nghĩ về SVS”.</p>
                                    <h4>Chị Nguyễn thị hoa<span>Khách hàng</span></h4>
                                </div>
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>” Nhân viên SVS luôn làm cho chúng tôi biết về thực hành tốt nhất và các giải pháp công nghệ sẵn có, và họ đã thành thạo trong việc tích hợp chúng vào các dự án của chúng tôi. chuyên gia tư vấn của họ cũng dễ dàng để làm việc với các dự án hoàn thành đúng thời hạn và hệ thống của họ tiếp tục chạy tốt nếu có lỗi họ sẽ sửa miễn phí.”.</p>
                                    <h4>Anh Hồ hoàng nhân <span>Khách hàng</span></h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>“Phải chi chúng tôi gặp được họ sớm hơn thì chúng tôi có thể mở rộng kinh doanh thành chuỗi chuyên nghiệp từ lâu với các công nghệ tiên tiến quản lý trên di động…  ”.</p>
                                    <h4>Anh Ben <span>Khách hàng</span></h4>
                                </div>
                                <div class="col-md-6 w3_testimonials_grid">
                                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>“Chúng tôi đã tìm thấy bề rộng của kiến thức SVS của là vô giá. Ngoài ra, SVS đã được với chúng tôi để đối phó với trường hợp khẩn cấp kỹ thuật của chúng tôi, cho dù vào buổi sáng sớm hoặc muộn vào ban đêm. Chúng tôi chắc chắn đánh giá cao phản hồi và độ tin cậy của họ trong kinh doanh có nhịp độ nhanh của chúng tôi.”.</p>
                                    <h4>Anh trần lê quy<span>Khách hàng</span></h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </article>
                    </div>
                </div>
                <script src="/templates/gorocystore/js/jquery.wmuSlider.js"></script>
                <script>
                    $('.example1').wmuSlider();
                </script>
            </div>
    </div>
</div>
<!-- //testimonials -->
@endsection