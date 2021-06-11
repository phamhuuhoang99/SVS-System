<div class="modal fade" id="myModal_btn" tabindex="-1" role="dialog" aria-labelledby="myModal_btn" aria-hidden="true">
    <div class="agilemodal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Đăng ký ngay</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body pt-3 pb-5 px-sm-5">
                <div class="row">
                    <div class="col-md-6 mx-auto align-self-center">
                        <img src={{ asset("templates/fashion-hub/img/p3.png") }} class="img-fluid" alt="login_image" />
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name1" class="col-form-label">Họ tên</label>
                                <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name1" required="">
                            </div>
                            <div class="form-group">
                                <label for="recipient-email" class="col-form-label">Email</label>
                                <input type="email" class="form-control" placeholder=" " name="Email" id="recipient-email" required="">
                            </div>
                            <div class="form-group">
                                <label for="password1" class="col-form-label">Mật khẩu</label>
                                <input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
                            </div>
                            <div class="form-group">
                                <label for="password2" class="col-form-label">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
                            </div>
                            <div class="sub-w3l">
                                <div class="sub-agile">
                                    <input type="checkbox" id="brand2" value="">
                                    <label for="brand2" class="mb-3">
                                        <span></span>Tôi chấp nhận các điều khoản & điều kiện</label>
                                </div>
                            </div>
                            <div class="right-w3l">
                                <input type="submit" class="form-control" value="Đăng ký">
                            </div>
                        </form>
                        <p class="text-center mt-3">Bạn đã là thành viên?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark login_btn">Đăng nhập</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
