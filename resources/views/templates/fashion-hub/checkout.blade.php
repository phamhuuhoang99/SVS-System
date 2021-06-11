@extends('templates.fashion-hub.master')
@section('title','Trung tâm thời trang thương mại điện tử trực tuyến')
@section('content')
<div class="ibanner_w3 pt-sm-5 pt-3">
    <h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
        <span>f</span>ashion
        <span>h</span>ub</h4>
</div>
<!-- //inner banner -->
<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href={{ route("temp.fashion-hub.index") }}>Trang Chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Kiểm tra</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!--checkout-->
<section class="checkout_wthree py-sm-5 py-3">
    <div class="container">
        <div class="check_w3ls">
            <div class="d-sm-flex justify-content-between mb-4">
                <h4>Xem lại đơn hàng của bạn
                </h4>
                <h4 class="mt-sm-0 mt-3">Giỏ hàng có:
                    <span>3 sản phẩm</span>
                </h4>
            </div>
            <div class="checkout-right">
                <table class="timetable_sub">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Tên sản phẩm</th>

                            <th>Giá</th>
                            <th>Gỡ bỏ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="rem1">
                            <td class="invert">1</td>
                            <td class="invert-image">
                                <a href={{ route("temp.fashion-hub.single") }}>
                                    <img src={{ asset("templates/fashion-hub/img/pm1.jpg") }} alt=" " class="img-responsive">
                                </a>
                            </td>
                            <td class="invert">
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus">&nbsp;</div>
                                        <div class="entry value">
                                            <span>1</span>
                                        </div>
                                        <div class="entry value-plus active">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td class="invert">Áo sơ mi đen</td>

                            <td class="invert">500.000đ</td>
                            <td class="invert">
                                <div class="rem">
                                    <div class="close1"> </div>
                                </div>

                            </td>
                        </tr>
                        <tr class="rem2">
                            <td class="invert">2</td>
                            <td class="invert-image">
                                <a href={{ route("temp.fashion-hub.single") }}>
                                    <img src={{ asset("templates/fashion-hub/img/pf1.jpg") }} alt=" " class="img-responsive">
                                </a>
                            </td>
                            <td class="invert">
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus">&nbsp;</div>
                                        <div class="entry value">
                                            <span>1</span>
                                        </div>
                                        <div class="entry value-plus active">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td class="invert">Áo ngắn tay xanh nhạt</td>

                            <td class="invert">875.000đ</td>
                            <td class="invert">
                                <div class="rem">
                                    <div class="close2"> </div>
                                </div>

                            </td>
                        </tr>
                        <tr class="rem3">
                            <td class="invert">3</td>
                            <td class="invert-image">
                                <a href={{ route("temp.fashion-hub.single") }}>
                                    <img src={{ asset("templates/fashion-hub/img/pb3.jpg") }} alt=" " class="img-responsive">
                                </a>
                            </td>
                            <td class="invert">
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus">&nbsp;</div>
                                        <div class="entry value">
                                            <span>1</span>
                                        </div>
                                        <div class="entry value-plus active">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td class="invert">Bộ áo sơ mi và quần</td>

                            <td class="invert">575.000đ</td>
                            <td class="invert">
                                <div class="rem">
                                    <div class="close3"> </div>
                                </div>

                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="row checkout-left mt-5">
                <div class="col-md-4 checkout-left-basket">
                    <h4>Xem lại giỏ hàng</h4>
                    <ul>
                        <li>Áo sơ mi đen
                            <i>-</i>
                            <span>500.000đ </span>
                        </li>
                        <li>Áo ngắn tay xanh nhạt
                            <i>-</i>
                            <span>875.000đ </span>
                        </li>
                        <li>Bộ áo sơ mi và quần
                            <i>-</i>
                            <span>575.000đ</span>
                        </li>
                        <li>Tổng tiền
                            <i>-</i>
                            <span>1.950.000đ</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 address_form">
                    <h4>Đại chỉ giao hàng</h4>
                    <form action={{ route("temp.fashion-hub.payment") }} class="creditly-card-form shopf-sear-headinfo_form">
                        <div class="creditly-wrapper wrapper">
                            <div class="information-wrapper">
                                <div class="first-row form-group">
                                    <div class="controls">
                                        <label class="control-label">Họ tên: </label>
                                        <input class="billing-address-name form-control" type="text" name="name" placeholder="Họ tên">
                                    </div>
                                    <div class="card_number_grids">
                                        <div class="card_number_grid_left">
                                            <div class="controls">
                                                <label class="control-label">Số điện thoại:</label>
                                                <input class="form-control" type="text" placeholder="Số điện thoại">
                                            </div>
                                        </div>
                                        <div class="card_number_grid_right">
                                            <div class="controls">
                                                <label class="control-label">Địa chỉ </label>
                                                <input class="form-control" type="text" placeholder="Địa chỉ">
                                            </div>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="controls">
                                        <label class="control-label">Thành phố: </label>
                                        <input class="form-control" type="text" placeholder="Thành phố">
                                    </div>
                                    <div class="controls">
                                        <label class="control-label">Loại địa chỉ: </label>
                                        <select class="form-control option-fieldf">
                                            <option>Văn phòng</option>
                                            <option>Nhà</option>
                                            <option>Doanh nghiệp</option>

                                        </select>
                                    </div>
                                </div>
                                <button class="submit check_out">Đặt Hàng</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
