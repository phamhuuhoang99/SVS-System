@extends('templates.villas.master')
@section('title', 'Villas')
@section('content')

<!-- page details -->
<div class="breadcrumb-mobamu">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href={{ route("temp.villas.index") }}>Trang Chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Đặt Phòng</li>
    </ol>
</div>
<!-- //page details -->

<!-- booking form -->
<div class="register-w3 py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="tittle text-center text-bl font-weight-bold">Đặt Phòng</h3>
        <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Ưu đãi Chớp nhoáng - Đặc biệt cuối tuần. Siêu khuyến mãi đặc biệt</p>
        <div class="comment-top mt-5">
            <div class="comment-bottom mobamuinfo_mail_grid_right">
                <form>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <label>Họ</label>
                            <input class="form-control" type="text" name="Name" placeholder="Nhập.." required="">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Tên</label>
                            <input class="form-control" type="text" name="Name" placeholder="Nhập.." required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="Email" placeholder="Email" required="">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Số Điện Thoại</label>
                            <input class="form-control" type="text" name="number" placeholder="Nhập.." required="">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group date-plu">
                            <label>Ngày Khởi Hành </label>
                            <input type="date" name="date" required="">
                        </div>
                        <div class="col-lg-6 form-group date-plu">
                            <label>Ngày Đến</label>
                            <input type="date" name="date" required="">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <label>Chọn Phòng</label>
                            <select required="" class="form-control">
									<option value="">Loại Phòng</option>
									<option value="1">Phòng Đơn</option>
									<option value="2">Phòng Đôi </option>
									<option value="4">Phòng Sang</option>
								</select>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Số Lượng Người</label>
                            <select required="" class="form-control">
									<option value="">Số Lượng Người</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="4">3</option>
									<option value="4">4</option>
									<option value="4">5</option>
									<option value="4">6</option>
									<option value="4"> > 7</option>
								</select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Lời Nhắn</label>
                        <textarea class="form-control" name="Message" placeholder="Nhập.." required=""></textarea>
                    </div>
                    <button type="submit" class="btn submit mt-3">Đặt Ngay</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //booking form -->
@endsection