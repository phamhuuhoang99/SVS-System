@extends('templates.gorocystore.master')
@section('title', 'Cửa hàng tạp hóa điện tử trực tuyến')
@section('content')
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('temp.gorocystore.index') }}">Trang chủ</a><span>|</span></li>
            <li>Sự kiện</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    @include('templates.gorocystore.leftbanner')
    <div class="w3l_banner_nav_right">
        <!-- events -->
        <div class="events">
            <h3>Sự kiện</h3>
            <div class="w3agile_event_grids">
                <div class="col-md-6 w3agile_event_grid">
                    <div class="col-md-3 w3agile_event_grid_left">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-9 w3agile_event_grid_right">
                        <h4>thông báo</h4>
                        <p>Hè rực rỡ SALE bất ngờ. Giảm 40% săn Voucher 100k. Ngoài ra còn nhiều ưu đãi khủng khác dành cho khách hàng.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 w3agile_event_grid">
                    <div class="col-md-3 w3agile_event_grid_left">
                        <i class="fa fa-bullseye" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-9 w3agile_event_grid_right">
                        <h4>SĂP DIỄN RA</h4>
                        <p>Khởi động hội sách hè. Flash sale sách tham khảo, giảm đến 40%
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="w3agile_event_grids">
                <div class="col-md-6 w3agile_event_grid">
                    <div class="col-md-3 w3agile_event_grid_left">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-9 w3agile_event_grid_right">
                        <h4>Thanh toán</h4>
                        <p>VISA, MOMO, ZALO PAY, MASTER CARD, TIỀN MẶT, TRẢ GÓP 0%, PAY PAL.
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 w3agile_event_grid">
                    <div class="col-md-3 w3agile_event_grid_left">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-9 w3agile_event_grid_right">
                        <h4>ĐANG DIỄN RA</h4>
                        <p>Fan công nghệ, cuối tuần săn siêu sale. Nhập mã CN01 giảm đến 49%++.
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="w3agile_event_grids">
                <div class="col-md-6 w3agile_event_grid">
                    <div class="col-md-3 w3agile_event_grid_left">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-9 w3agile_event_grid_right">
                        <h4>hệ thống</h4>
                        <p>Gần gũi, Vui vẻ và Đồng lòng. Đây là những đặc tính chính và nổi bật trong từng bước đường phát triển của SVS.
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 w3agile_event_grid">
                    <div class="col-md-3 w3agile_event_grid_left">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-9 w3agile_event_grid_right">
                        <h4>Thành tích</h4>
                        <p>Cung cấp cho người sử dùng những trải nghiệm dễ dàng, an toàn và nhanh chóng khi mua sắm trực tuyến.
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="events-bottom">
                <div class="col-md-6 events_bottom_left">
                    <div class="col-md-4 events_bottom_left1">
                        <div class="events_bottom_left1_grid">
                            <h4>20</h4>
                            <p>Tháng 7, 2020</p>
                        </div>
                    </div>
                    <div class="col-md-8 events_bottom_left2">
                        <img src="/templates/gorocystore/images/15.jpg" alt=" " class="img-responsive" />
                        <h4>MỤC TIÊU CỦA CHÚNG TÔI</h4>
                        <ul>
                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>3:00 PM</li>
                            <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Quản trị viên </a></li>
                        </ul>
                        <p>Chúng tôi thật sự tin tưởng vào sức mạnh khai triển của công nghệ và mong muốn góp phần làm cho thế giới trở nên tốt đẹp hơn bằng việc kết nối cộng đồng người mua và người bán thông qua việc cung cấp một nền tảng thương mại điện tử.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 events_bottom_left">
                    <div class="col-md-4 events_bottom_left1">
                        <div class="events_bottom_left1_grid">
                            <h4>21</h4>
                            <p>Tháng 7, 2020</p>
                        </div>
                    </div>
                    <div class="col-md-8 events_bottom_left2">
                        <img src="/templates/gorocystore/images/19.jpg" alt=" " class="img-responsive" />
                        <h4>Chúng tôi có thể làm cho bạn hài lòng nhất</h4>
                        <ul>
                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>3:30 PM</li>
                            <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Quản trị viên </a></li>
                        </ul>
                        <p>Giá ưu đãi, miễn phí giao hàng, tận tình tư vấn đưa ra gợi ý phù hợp với khách hàng thông qua các kênh Facebook, Zalo .</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //events -->
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->
@endsection