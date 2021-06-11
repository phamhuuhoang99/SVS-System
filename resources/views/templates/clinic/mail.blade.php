@extends('templates.clinic.master')
@section('title', 'Clinic')
@section('content')
    <!-- /inner_content -->
    <div class="banner-bottom">
        <div class="container">
            <div class="inner_sec_info_agileits_w3">
                <h2 class="heading-agileinfo">GỬI MAIL CHO CHÚNG TÔI<span>Chúng Tôi Cung Cấp Các Dịch Vụ Y Tế Phù Hợp Với
                        Yêu Cầu Khách Hàng.</span></h2>
                <div class="contact-form">
                    <form action="#">
                        <div class="left_form">
                            <div>
                                <span><label>Họ tên</label></span>
                                <span><input name="userName" type="text" class="textbox" required=""></span>
                            </div>
                            <div>
                                <span><label>E-mail</label></span>
                                <span><input name="userEmail" type="text" class="textbox" required=""></span>
                            </div>
                            <div>
                                <span><label>Fax</label></span>
                                <span><input name="userPhone" type="text" class="textbox" required=""></span>
                            </div>
                        </div>
                        <div class="right_form">
                            <div>
                                <span><label>Lời nhắn</label></span>
                                <span><textarea name="Message" required=""> </textarea></span>
                            </div>
                            <div>
                                <span><input type="submit" value="Gửi" class="myButton"></span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /map -->
    <div class="map_w3layouts_agile">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172"
            style="border:0"></iframe>

    </div>
    <!-- //map -->
@endsection
