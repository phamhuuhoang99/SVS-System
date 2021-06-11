<div class="recover-password">
    <div class="body">
        <div class="content">
            <div class="form">
                <div class="title">
                    Mật khẩu mới
                </div>
                <div class="form-group recoverPassword-error">
                    <div class="error-message-recoverPassword"></div>
                </div>
                <div class="form-group">
                    <input type="hidden" value={{ request()->query('token') }}
                        name="recoverPasswordToken" id="recoverPasswordToken">
                    <input class="recover-password-input-text" type="password" placeholder="Mật khẩu"
                        name="recoverPasswordNewPassword" id="recoverPasswordNewPassword">
                </div>
                <div class="recoverPassword-btn">
                    {!! Form::button('Lấy lại mật khẩu', array('type' => 'submit', 'class' => 'btn createPasswordBtn')) !!}
                </div>
                <div class="footer">
                    <a href="/dang-nhap">Quay lại</a>
                </div>
            </div>
        </div>
    </div>
</div>