<div class="login">
    <div class="login-form">
        <div class="form">
            <div class="login-header">
                <div class="login-header-title">SVS - Đăng nhập</div>
                <div class="login-header-content">Xin chào, vui lòng nhập thông tin đăng nhập</div>
            </div>
            <div class="login-body">
                <div class="form-group login-error">
                    <div class="error-message-login"></div>
                </div>
                <div class="form-group">
                    <input class="login-input-text" name="loginEmail" id="loginEmail" type="text" placeholder="Email">
                    <div class="error-message-loginEmail"></div>
                </div>
                <div class="form-group">
                    <input class="login-input-text" name="loginPassword" id="loginPassword" type="password" placeholder="Mật Khẩu">
                    <div class="error-message-loginPassword"></div>
                </div>
                <div class="form-group">
                    <a href="/khoi-phuc-mat-khau">Quên mật khẩu?</a>
                </div>
                <div class="login-btn">
                    {!! Form::button('Đăng nhập', array('type' => 'submit', 'class' => 'btn loginBtn btnLogin')) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="footer-intro">
        <div class="account-login">
            Bạn chưa có tài khoản SVS?
            <a href="/dang-ky">Đăng ký Ngay</a>
        </div>
    </div>
</div>