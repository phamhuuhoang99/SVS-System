<!-- footer -->
<div class="footer_top_agile_w3ls">
    <div class="container">
        <div class="col-md-3 footer_grid">
            <h3>Về Chúng Tôi</h3>
            <p>Hệ thống y tế sẽ thực hiện nhanh chóng việc mở chuỗi các cơ sở y tế trên toàn quốc, đưa dịch vụ y tế chất
                lượng cao đến gần và dễ tiếp cận hơn với người dân cả nước.

            </p>

        </div>
        <div class="col-md-3 footer_grid">
            <h3>Tin Mới Nhất</h3>
            <ul class="footer_grid_list">
                <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                    <a href="#" data-toggle="modal" data-target="#myModal">Bệnh thiếu máu và những điều cần biết </a>
                </li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        Chứng ngứa da vào ban đêm có nguy hiểm không?</a>
                </li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                    <a href="#" data-toggle="modal" data-target="#myModal">Cách nhận biết bệnh gan mật của da </a>
                </li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        Dấu hiệu cảnh báo cơ thể bạn đang bị thiếu i-ốt
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-3 footer_grid">
            <h3>Thông tin liên lạc</h3>
            <ul class="address">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i>Quận Gò Vấp, Hồ Chí Minh.</li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i><a
                        href="mailto:info@example.com">smartvietsolution@gmail.com</a></li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>035 618 5047</li>
            </ul>
        </div>
        <div class="col-md-3 footer_grid ">
            <h3>Đăng ký để nhận thông tin mới nhất</h3>

            <div class="footer_grid_right">

                <form action="#">
                    <input type="email" name="Email" placeholder="Địa chỉ Email..." required="">
                    <input type="submit" value="Gửi">
                </form>
            </div>
        </div>
        <div class="clearfix"> </div>

    </div>
</div>
<div class="footer_wthree_agile">
    <p>© 2015 - <?php echo date('Y'); ?> SmartVietSolution - Công ty TNHH TMDV Phần Mềm
        Giải Pháp Việt</p>
</div>
<!-- //footer -->
<!-- bootstrap-modal-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                New Clinic
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('templates/clinic/images/g7.jpg') }}" alt=" " class="img-responsive" />
                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                    aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                    esse quam nihil molestiae consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
                    <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                        esse quam nihil molestiae consequatur.</i>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- //bootstrap-modal-pop-up -->


<!-- js -->
<script type="text/javascript" src="{{ asset('templates/clinic/js/jquery-2.1.4.min.js') }}"></script>
<script>
    $('ul.dropdown-menu li').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });

</script>
<script type="text/javascript" src="{{ asset('templates/clinic/js/bootstrap.js') }}"></script>
