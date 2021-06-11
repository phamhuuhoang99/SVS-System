<!-- banner -->
<div class="main-banner-2">

</div>
<!-- //banner -->

<!-- page details -->
<div class="breadcrumb-agile bg-light py-2">
    <ol class="breadcrumb bg-light m-0">
        <li class="breadcrumb-item">
            <a href={{ URL::route("temp.tasty-burger.index") }}>Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Đăng ký</li>
    </ol>
</div>
<!-- //page details -->

<!-- register -->
<div class="login-contect py-5">
    <div class="container py-xl-5 py-3">
        <div class="login-body">
            <div class="login p-4 mx-auto">
                <h5 class="text-center mb-4">Đăng ký</h5>
                <form action="#">
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input type="text" class="form-control" name="name" placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="" required="">
                    </div>
                    <div class="form-group">
                        <label class="mb-2">Mật khẩu</label>
                        <input type="password" class="form-control" name="password" id="password1" placeholder=""
                            required="">
                    </div>
                    <div class="form-group">
                        <label>Xác nhận mật khẩu</label>
                        <input type="password" class="form-control" name="password" id="password2" placeholder=""
                            required="">
                    </div>
                    <button type="submit" class="btn submit mb-4">Đăng ký</button>
                    <p class="text-center">
                        <a href="#" class="text-da">
                            Bằng việc bấm vào nút đăng ký, bạn đã đồng ý với các điều khoản của chúng tôi
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //register -->