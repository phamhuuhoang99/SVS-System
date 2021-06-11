<footer class="footer_section" id="contact">
    <div class="container">
        <section class="main-section chat" id="chat">
            <!--<div class="zalo-chat">
                <div class="zalo-chat-widget" data-oaid="2474764632565849950" data-welcome-message="SVS rất vui khi được hỗ trợ bạn!"
                data-autopopup="0" data-width="350" data-height="420"></div>
            </div>-->
            <div class="fb-chat">
                <div id="fb-root"></div>
                <div class="fb-customerchat" attribution=install_email page_id="154933705160276" theme_color="#0084ff" logged_in_greeting="Xin chào, SVS có thể giúp gì cho bạn?" logged_out_greeting="Xin chào, SVS có thể giúp gì cho bạn?"></div>
            </div>
        </section>
        <section class="main-section contact" id="contact">
            <div class="contact_section">
                <h2>Liên hệ</h2>
                <div class="row">
                    <div class="col-md-4 col-xs-12 contact_block">
                        <div class="col-lg-12 col-xs-4 mr-bottom-10">
                            <img src="{{asset('img/building.png')}}" alt="địa chỉ" width="100px">
                        </div>
                        <div class="col-lg-12 col-xs-8">
                            <span>220/91 Nguyễn Văn Khối, Phường 9 Quận Gò Vấp, Hồ Chí Minh</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 contact_block">
                        <div class="col-lg-12 col-xs-4 mr-bottom-10">
                            <img src="{{asset('img/phone.png')}}" alt="số điện thoại">
                        </div>
                        <div class="col-lg-12 col-xs-8">
                            <span style="line-height: 50px">Mobile: 035 618 5047</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 contact_block">
                        <div class="col-lg-12 col-xs-4 mr-bottom-10">
                            <img src="{{asset('img/mail.png')}}" alt="email công ty">
                        </div>
                        <div class="col-lg-12 col-xs-8">
                            <span> <a style="line-height: 70px" href="mailto:smartvietsolution@gmail.com">smartvietsolution@gmail.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="contact-info-box address clearfix">
                        <h3>Nhận báo giá thiết kế</h3>
                        <p class="mr-bottom-10">Hãy đăng ký thông tin để nhận báo giá thiết kế.
                            SVS tự tin là nhà cung cấp dịch vụ website an toàn, bảo mật.
                            SVS luôn đồng hành cùng sự thịnh vượng của doanh nghiệp.</p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp delay-06s">
                    <div class="form" data-toggle="validator">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control input-text" id="name" placeholder="Họ tên" required>
                            <div class="form-group error-message-name" style="color: red"></div>
                        </div>
                        <div class="form-group">
                            <input type="phone" class="form-control input-text" name="phone" id="phone" placeholder="Số điện thoại">
                            <div class="form-group error-message-phone" style="color: red"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-text" name="email" id="email" placeholder="Email">
                            <div class="form-group error-message-email" style="color: red"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="5" placeholder="Nội dung" maxlength="500"></textarea>
                            <div class="form-group error-message-message" style="color: red; margin-top: 15px"></div>
                        </div>
                        {!! Form::button('Gửi báo giá', array('type' => 'submit', 'class' => 'btn input-btn btnSave')) !!}
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="footer_bottom">
            <span>© 2015 - <?php echo date("Y");?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm Giải Pháp Việt</span>
        </div>
    </div>
</footer>