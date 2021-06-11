<div class="container register">
    <div class="register-form">
        <div class="form">
            <div class="register-header">
                <div class="register-header-title">SVS - Đăng ký tài khoản</div>
                <div class="register-header-content">Vui lòng cung cấp các thông tin dưới đây để đăng ký tài khoản</div>
            </div>
            <div class="register-body">
                <div class="form-group register-error">
                    <div class="error-message-register"></div>
                </div>
                <div class="form-group">
                    <input class="register-input-text" name="registerEmail" id="registerEmail" type="text" placeholder="Email" autocomplete="off">
                    <div class="error-message-registerEmail"></div>
                </div>
                <div class="form-group">
                    <input class="register-input-text" name="registerPhone" id="registerPhone" type="phone" placeholder="Số Điện Thoại" autocomplete="off">
                    <div class="error-message-registerPhone"></div>
                </div>
                <div class="form-group">
                    <input class="register-input-text" name="registerPassword" id="registerPassword" type="password" placeholder="Mật Khẩu" autocomplete="off">
                    <div class="error-message-registerPassword"></div>
                </div>
                <div class="form-group">
                    <input class="register-input-text" name="registerConfirmPassword" id="registerConfirmPassword" type="password" placeholder="Nhập Lại Mật Khẩu" autocomplete="off">
                    <div class="error-message-registerConfirmPassword"></div>
                </div>
            </div>
            <div class="register-footer">
                <div class="register-footer-info">
                    Nhấn vào nút <b>"Đăng Ký"</b>, đồng nghĩa với việc bạn đồng ý với
                    <a href="/quy-dinh" target="_blank">các điều khoản dịch vụ của SVS</a>
                </div>
                <div class="register-footer-btn">
                    {!! Form::button('Đăng ký', array('type' => 'submit', 'class' => 'btn registerBtn btnRegister')) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="footer-intro">
        <div class="account-login">
            Bạn đã có tài khoản SVS?
            <a href="/dang-nhap">Đăng nhập</a>
        </div>
    </div>
</div>