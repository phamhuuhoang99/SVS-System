@extends("templates.lighting.master")
@section('title', 'Lighting')
@section('content')
<!-- check out -->
<div class="container">
    <div class="check-sec">
        <div class="col-md-3 cart-total">
            <a class="continue" href={{ route("temp.lighting.product") }}>Tiếp tục mua hàng</a>
            <div class="price-details">
                <h3>Giá Chi Tiết</h3>
                <span>Tổng</span>
                <span class="total1">620.000đ</span>
                <span>Giảm Giá</span>
                <span class="total1">10%(Ưu Đãi)</span>
                <span>Tiền Ship</span>
                <span class="total1">15.000đ</span>
                <div class="clearfix"></div>
            </div>
            <ul class="total_price">
                <li class="last_price">
                    <h4>TỔNG</h4>
                </li>
                <li class="last_price"><span>615.000đ</span></li>
            </ul>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <a class="order" href="#">Đặt hàng</a>
            <div class="total-item">
                <h3>OPTIONS</h3>
                <h4>COUPONS</h4>
                <a class="cpns" href="#">Áp dụng</a>
            </div>
        </div>
        <div class="col-md-9 cart-items">
            <h1>Giỏ của tôi (2)</h1>
            <script>
                $(document).ready(function(c) {
                    $('.close1').on('click', function(c) {
                        $('.cart-header').fadeOut('slow', function(c) {
                            $('.cart-header').remove();
                        });
                    });
                });
            </script>
            <div class="cart-header">
                <div class="close1"> </div>
                <div class="cart-sec simpleCart_shelfItem">
                    <div class="cart-item cyc">
                        <img src={{ asset("templates/lighting/images/p4.jpg") }} class="img-responsive" alt="" />
                    </div>
                    <div class="cart-item-info">
                        <h3><a href={{ route("temp.lighting.single") }}>Đèn treo tường</a><span>Model No: RL-5511S</span></h3>
                        <ul class="qty">
                            <li>
                                <p>Kích Thước: 5</p>
                            </li>
                            <li>
                                <p>Qty : 1</p>
                            </li>
                        </ul>
                        <div class="delivery">
                            <p>Phí Vận Chuyển : 15.000đ</p>
                            <span>Giao hàng trong 2-3 ngày</span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
            <script>
                $(document).ready(function(c) {
                    $('.close2').on('click', function(c) {
                        $('.cart-header2').fadeOut('slow', function(c) {
                            $('.cart-header2').remove();
                        });
                    });
                });
            </script>
            <div class="cart-header2">
                <div class="close2"> </div>
                <div class="cart-sec simpleCart_shelfItem">
                    <div class="cart-item cyc">
                        <img src={{ asset("templates/lighting/images/p3.jpg") }} class="img-responsive" alt="" />
                    </div>
                    <div class="cart-item-info">
                        <h3><a href={{ route("temp.lighting.single") }}>Đèn treo tường</a><span>Model No: SL-3578</span></h3>
                        <ul class="qty">
                            <li>
                                <p>Kích Thước : 5</p>
                            </li>
                            <li>
                                <p>Qty : 1</p>
                            </li>
                        </ul>
                        <div class="delivery">
                            <p>Phí Vận Chuyển : 15.000đ</p>
                            <span>Giao hàng trong 2-3 ngày</span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //check out -->

@endsection