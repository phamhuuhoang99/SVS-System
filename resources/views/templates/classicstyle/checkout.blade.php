@extends('templates.classicstyle.master')
@section('title', 'Classic Style')
@section('content')
    <!--banner-->
    <div class="banner-top">
        <div class="container">
            <h2>Thanh Toán</h2>
            <h3 ><a href={{ route('temp.classicstyle.index') }}>Trang Chủ</a><label>/</label>Thanh Toán</h3>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- contact -->
    <div class="check-out">
        <div class="container">

            <table class="table animated wow fadeInLeft" data-wow-delay=".5s">
                <tr>
                    <th class="t-head head-it ">Sản Phẩm</th>
                    <th class="t-head">Giá</th>
                    <th class="t-head">Số lượng</th>
                    <th class="t-head">Tổng tiền</th>
                </tr>
                <tr class="cross">
                    <td class="ring-in t-data">
                        <a href={{ route('temp.classicstyle.single') }} class="at-in">
                            <img src={{ asset('templates/classicstyle/img/pcc.jpg') }} class="img-responsive" alt="">
                        </a>
                        <div class="sed">
                            <h5>Áo Sơ Mi Nữ</h5>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="close1"> </div>
                    </td>
                    <td class="t-data">đ700.000</td>
                    <td class="t-data">
                        <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus">&nbsp;</div>
                                <div class="entry value"><span class="span-1">1</span></div>
                                <div class="entry value-plus active">&nbsp;</div>
                            </div>
                        </div>

                    </td>
                    <td class="t-data">đ700.000</td>

                </tr>
                <tr class="cross1">
                    <td class="t-data ring-in">
                        <a href={{ route('temp.classicstyle.single') }} class="at-in"><img src={{ asset('templates/classicstyle/img/pcc2.jpg') }} class="img-responsive" alt=""></a>
                        <div class="sed">
                            <h5>Vest Nam New</h5>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="close2"> </div>
                    </td>
                    <td class="t-data">đ900.000</td>
                    <td class="t-data">
                        <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus">&nbsp;</div>
                                <div class="entry value"><span class="span-1">1</span></div>
                                <div class="entry value-plus active">&nbsp;</div>
                            </div>
                        </div>
                        <!--quantity-->
                    </td>
                    <td class="t-data">đ900.000</td>

                </tr>
                <tr class="cross2">
                    <td class="t-data ring-in">
                        <a href={{ route('temp.classicstyle.single') }} class="at-in"><img src={{ asset('templates/classicstyle/img/pcc1.jpg') }} class="img-responsive" alt=""></a>
                        <div class="sed">
                            <h5>Áo khoác nữ</h5>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="close3"> </div>
                    </td>
                    <td class="t-data">đ500.000</td>
                    <td class="t-data">
                        <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus">&nbsp;</div>
                                <div class="entry value"><span class="span-1">1</span></div>
                                <div class="entry value-plus active">&nbsp;</div>
                            </div>
                        </div>

                    </td>
                    <td class="t-data">đ500.000</td>

                </tr>
            </table>
            <div class=" cart-total">

                <h5 class="continue">Giỏ Hàng</h5>
                <div class="price-details">
                    <h3>Giá Chi Tiết</h3>
                    <span>Tổng</span>
                    <span class="total1">2.100.000</span>
                    <span>Giảm giá</span>
                    <span class="total1">---</span>
                    <span>Tiền Ship</span>
                    <span class="total1">15.000</span>
                    <div class="clearfix"></div>
                </div>
                <ul class="total_price">
                    <li class="last_price">
                        <h4>TỔNG</h4>
                    </li>
                    <li class="last_price"><span>2.115.00</span></li>
                    <div class="clearfix"> </div>
                </ul>

                <a href={{ route('temp.classicstyle.single') }}>Thanh Toán</a>

            </div>
        </div>
    </div>
@endsection
