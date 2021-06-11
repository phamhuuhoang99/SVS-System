@extends("templates.lighting.master")
@section('title', 'Lighting')
@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.html">Trang Chủ</a></li>
        <li class="active">Tài Khoản</li>
    </ol>
    <div class="registration">
        <div class="registration_left">
            <script>
                (function() {

                    // Create input element for testing
                    var inputs = document.createElement('input');

                    // Create the supports object
                    var supports = {};

                    supports.autofocus = 'autofocus' in inputs;
                    supports.required = 'required' in inputs;
                    supports.placeholder = 'placeholder' in inputs;

                    // Fallback for autofocus attribute
                    if (!supports.autofocus) {

                    }

                    // Fallback for required attribute
                    if (!supports.required) {

                    }

                    // Fallback for placeholder attribute
                    if (!supports.placeholder) {

                    }

                    // Change text inside send button on submit
                    var send = document.getElementById('register-submit');
                    if (send) {
                        send.onclick = function() {
                            this.innerHTML = '...Sending';
                        }
                    }

                })();
            </script>
            <div class="registration_form">
                <!-- Form -->
                <form>
                    <div>
                        <label>
							<input placeholder="Họ" type="text" tabindex="1">
						</label>
                    </div>
                    <div>
                        <label>
							<input placeholder="Tên" type="text" tabindex="2">
						</label>
                    </div>
                    <div>
                        <label>
							<input placeholder="Email" type="email" tabindex="3">
						</label>
                    </div>
                    <div>
                        <label>
							<input placeholder="Số điện thoại" type="email" tabindex="3">
						</label>
                    </div>
                    <div class="sky_form1">
                        <ul>
                            <li><label class="radio left"><input type="radio" name="radio" checked=""><i></i>Nam</label></li>
                            <li><label class="radio"><input type="radio" name="radio"><i></i>Nữ</label></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div>
                        <label>
							<input placeholder="Mật Khẩu" type="password" tabindex="4">
						</label>
                    </div>
                    <div>
                        <label>
							<input placeholder="Nhập Lại Mật Khẩu" type="password" tabindex="4">
						</label>
                    </div>
                    <div>
                        <input type="submit" value="Tạo Tài Khoản" id="register-submit">
                    </div>
                    <div class="sky-form">
                        <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Tôi đồng ý với các điều khoản</label>
                    </div>
                </form>
                <!-- /Form -->
            </div>
        </div>
        <div class="registration_left">
            <h2>Có Tài Khoản</h2>
            <div class="registration_form">
                <!-- Form -->
                <form>
                    <div>
                        <label>
							<input placeholder="email" type="email" tabindex="3" required>
						</label>
                    </div>
                    <div>
                        <label>
							<input placeholder="mật khẩu" type="password" tabindex="4" required>
						</label>
                    </div>
                    <div>
                        <input type="submit" value="Đăng nhập">
                    </div>
                    <div class="forget">
                        <a href="#">quên mật khẩu?</a>
                    </div>
                </form>
                <!-- /Form -->
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection