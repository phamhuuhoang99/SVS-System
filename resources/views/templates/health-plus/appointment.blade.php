@extends('templates.health-plus.master')
@section('title', 'Health Plus')
@section('content')
    <!-- banner1 -->
    <div class="banner1 jarallax">
        <div class="container">
        </div>
    </div>

    <div class="services-breadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{route('temp.health-plus.index') }}">Trang Chủ</a><i>|</i></li>
                <li>Đặt Lịch</li>
            </ul>
        </div>
    </div>
    <!-- //banner1 -->
    <!-- icons -->
    <div class="banner-bottom" id="about">
        <div class="container">
            <h2 class="w3_heade_tittle_agile">Đặt Lịch Hẹn</h2>
            <p class="sub_t_agileits">Sắp xếp thời gian phù hợp cho bạn</p>

            <div class="book-appointment">
                <h4>Tạo Một Cuộc Hẹn</h4>
                <form action="#" >
                    <div class="left-agileits-w3layouts same">
                        <div class="gaps">
                            <p>Tên Bệnh Nhân</p>
                            <input type="text" name="Patient Name" placeholder="" required="" />
                        </div>
                        <div class="gaps">
                            <p>Số điện thoại</p>
                            <input type="text" name="Number" placeholder="" required="" />
                        </div>
                        <div class="gaps">
                            <p>Email</p>
                            <input type="email" name="email" placeholder="" required="" />
                        </div>
                        <div class="gaps">
                            <p>Triệu chứng</p>
                            <textarea name="About Symptoms" placeholder="" required=""></textarea>
                        </div>
                    </div>
                    <div class="right-agileinfo same">
                        <div class="gaps">
                            <p>Chọn Ngày</p>
                            <input id="datepicker1" name="Text" type="text" value="" onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
                        </div>
                        <div class="gaps">
                            <p>Phòng Khám</p>
                            <select class="option">
                                <option></option>
                                <option>Tim Mạch</option>
                                <option>Khoa Mắt</option>
                                <option>Khoa Thần Kinh</option>
                                <option>Khoa Tâm Lý</option>
                                <option>Khoa Da Liễu</option>
                            </select>
                        </div>
                        <div class="gaps">
                            <p>Giới tính</p>
                            <select class="option">
                                <option></option>
                                <option>Nam</option>
                                <option>Nữ</option>
                            </select>
                        </div>
                        <div class="gaps">
                            <p>Thời gian</p>
                            <input type="text" id="timepicker" name="Time" class="timepicker option" value="">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <input type="submit" value="Đặt Lịch Hẹn">
                </form>
            </div>
        </div>

    </div>
    </div>
    <!-- icons -->
@endsection
