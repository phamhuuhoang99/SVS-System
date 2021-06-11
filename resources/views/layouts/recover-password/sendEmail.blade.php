<div class="recover-password">
    <div class="body">
        <div class="content">
            <div class="form">
                <div class="title">
                    Bạn quên mật khẩu?
                </div>
                <div class="note">
                    Nhập email của bạn để tiến hành lấy lại mật khẩu
                </div>
                <div class="form-group recoverPassword-error">
                    <div class="error-message-recoverPassword"></div>
                </div>
                <div class="form-group">
                    <input class="recover-password-input-text"
                        name="recoverPasswordEmail" id="recoverPasswordEmail" type="text" placeholder="Email">
                </div>
                <div class="recoverPassword-btn">
                    {!! Form::button('Lấy lại mật khẩu', array('type' => 'submit', 'class' => 'btn sendEmailBtn')) !!}
                </div>
                <div class="footer">
                    <a href="/dang-nhap">Quay lại</a>
                </div>
            </div>
        </div>
    </div>
</div>