<div class="mian-content">
    <!-- banner -->
    <!-- main image slider container -->
    <div id="slider-main">
        <div class="banner-text-agile text-center">
            <div class="container">
                <h3 class="text-white font-weight-bold mb-3">Hương vị tuyệt vời đến từng chiếc bánh</h3>
                <p class="text-light">hãy cùng xem qua những sản phẩm tuyệt vời của chúng tôi</p>
                <button type="button" class="btn btn-primary button mt-md-5 mt-4" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <span>Video giới thiệu</span>
                </button>
            </div>
        </div>
        <!-- previous button -->
        <button id="prev">
            <i class="fas fa-chevron-left"></i>
        </button>

        <!-- image container -->
        <div id="slider"></div>

        <!-- next button -->
        <button id="next">
            <i class="fas fa-chevron-right"></i>
        </button>

        <!-- small circles container -->
        <div id="circles"></div>

    </div>
    <!-- end of main image slider container -->
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalCenterTitle">Cake Bakery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <iframe src="https://player.vimeo.com/video/58582025" style="border:none"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- //Model -->
    <!-- //banner -->

    <!-- banner bottom icons -->
    <div class="icons-banner-botom">
        <div class="container">
            <ul class="list-unstyled my-4">
                <li class="icons-mkw3ls">
                    <p class="mb-2">Vị socola</p>
                    <img src={{ URL::asset("templates/cake-bakery/images/img1.png") }} class="img-fluid" alt="">
                </li>
                <li class="icons-mkw3ls">
                    <p class="mb-2">Vị dâu</p>
                    <img src={{ URL::asset("templates/cake-bakery/images/img2.png") }} class="img-fluid" alt="">
                </li>
                <li class="icons-mkw3ls">
                    <p class="mb-2">Vị pista</p>
                    <img src={{ URL::asset("templates/cake-bakery/images/img3.png") }} class="img-fluid" alt="">
                </li>
                <li class="icons-mkw3ls">
                    <p class="mb-2">Vị vanilla</p>
                    <img src={{ URL::asset("templates/cake-bakery/images/img4.png") }} class="img-fluid" alt="">
                </li>
                <li class="icons-mkw3ls">
                    <p class="mb-2">Vị truyền thống</p>
                    <img src={{ URL::asset("templates/cake-bakery/images/img5.png") }} class="img-fluid" alt="">
                </li>
            </ul>
        </div>
    </div>
    <!-- //banner bottom icons -->
</div>
<!-- //main -->

<!-- banner-bottom -->
<section class="banner-main-agiles py-5">
    <div class="banner-bottom-w3layouts" id="about">
        <div class="container pt-xl-5 pt-lg-3">
            <div class="row mt-5">
                <div class="col-lg-6">
                    <p class="text-uppercase">Đôi lời gửi gắm</p>
                    <h3 class="aboutright">Chào mừng các bạn đã đến với Cakes Bakery</h3>
                    <h4 class="aboutright">Nơi tạo nên những chiếc bánh thơm ngon và xinh đẹp</h4>
                    <p>
                        Hãy cũng chúng tôi dạo quynh 1 vòng Cake Bakery, ở đây chúng tôi cũng cấp cho bạn đầy đủ các
                        thông tin cần thiết về tiệm bánh của chúng tôi, từ việc giới thiệu những chiếc bánh thơm ngon
                        cho đến tất cả các dịch vụ mà chúng tôi có thể cung cấp cho bạn
                    </p>
                    <button type="button" class="btn btn-primary button mt-md-5 mt-4" onclick="learnMoreRedirect()">
                        <span>Tìm hiểu thêm</span>
                    </button>
                </div>
                <div class="col-lg-6 about-img text-lg-enter">
                    <img src={{ URL::asset("templates/cake-bakery/images/about.png") }} alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- //banner-bottom-w3layouts -->

    <div class="some-another text-center pb-5">
        <div class="container pb-xl-5 pb-lg-3">
            <i class="fas fa-utensils"></i>
            <p class="text-uppercase mb-4 mt-2">Thân gửi đến quý khách hàng thân thiết</p>
            <h4 class="aboutright about-right-2">
                Niềm vui của bạn chính là nguồn động lực to lớn để chúng tôi cố gắng mỗi ngày
            </h4>
            <h5 class="text-uppsecase font-weight-bold text-dark mt-4">Chloe Jack
                <span class="text-secondary font-weight-normal">(Bếp trưởng)</span>
            </h5>
        </div>
    </div>
    <!-- cake -->
    <img src={{ URL::asset("templates/cake-bakery/images/cake7.png") }} alt="" class="img-fluid cake-style">

    <!-- //cake -->
</section>