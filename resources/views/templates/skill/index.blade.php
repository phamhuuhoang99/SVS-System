@extends('templates.skill.master')
@section('title','Skill')
@section('content')
<!--  Main banner section -->
<section class="w3l-main-banner">
    <div class="companies20-content">
        <div class="companies-wrapper">
            <div class="container">
                <div class="banner-item">
                    <div class="banner-view">
                        <div class="banner-info">
                            <h3 class="banner-text">
                                Học Mọi Lúc, Mọi Nơi.<br> Thay Đổi Tương Lai Của Bạn.
                            </h3>
                            <p class="my-4 mb-sm-5">Chúng tôi tin rằng mọi người đều có khả năng sáng tạo. Sáng tạo là nơi con người phát huy tiềm năng của bản thân
                            </p><br>
                            <a href="#signup.html" class="btn btn-primary theme-button mr-3">Trở thành giáo viên</a>
                            <a href="#courses.html" class="btn btn-outline-primary theme-button">các khóa học</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  //Main banner section -->
<section class="w3l-index5" id="about">
    <div class="new-block py-5">
        <div class="container py-lg-3">
            <div class="header-section text-center">
                <h3>Chúng tôi dạy như thế nào?</h3>
                <p class="mt-3 mb-5">Chương trình học linh hoạt với mọi mục tiêu, Học nhanh, sớm đi làm</p>
                <a href="#signup.html" class="btn btn-primary theme-button">Tham gia lớp học</a>
            </div>
            <div class="list-single-view mt-5">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="grids5-info">
                            <a href="#url" class="d-block zoom"><img src="{{ asset('templates/skill/images/p1.jpg') }}" alt="" class="img-fluid news-image" /></a>
                            <div class="blog-info">
                                <p class="date">Bước 1</p>
                                <h4>Tham gia lớp học</h4>
                                <p class="blog-text">Sau khi đăng ký lớp học phù hợp với nục tiêu, khả năng của bản thân, tham gia lớp học theo thời khóa biểu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-single-view mt-3">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="grids5-info">
                            <a href="#url" class="d-block zoom"><img src="{{ asset('templates/skill/images/p2.jpg') }}" alt="" class="img-fluid news-image" /></a>
                            <div class="blog-info">
                                <p class="date">Bước 2</p>
                                <h4>Học tập</h4>
                                <p class="blog-text">Học chủ động, được hướng dẫn 1-1 bởi chuyên gia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-single-view mt-3">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="grids5-info">
                            <a href="#url" class="d-block zoom"><img src="{{ asset('templates/skill/images/p3.jpg') }}" alt="" class="img-fluid news-image" /></a>
                            <div class="blog-info">
                                <p class="date">Bước 3</p>
                                <h4>Kiếm công việc tốt nhất</h4>
                                <p class="blog-text">Học hết 3 Học kỳ đầu tiên bạn đã đủ năng lực để làm việc tại hàng trăm doanh nghiệp có Ký kết Hợp tác Chiến lược về Đào tạo và Tuyển dụng với FUNiX, như: FPT Software, Rikkeisoft, VTI, 1Office, Tinh Vân…</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-single-view mt-3">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="grids5-info">
                            <a href="#url" class="d-block zoom"><img src="{{ asset('templates/skill/images/p4.jpg') }}" alt="" class="img-fluid news-image" /></a>
                            <div class="blog-info">
                                <p class="date">Bước 4</p>
                                <h4>Offline hàng tháng để tăng cường giao lưu</h4>
                                <p class="blog-text">Đây là cơ hội để sinh viên được giao lưu với bạn học, được gặp gỡ trực tiếp các chuyên gia trong ngành, nghe và thảo luận về các chủ đề công nghệ hot.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- stats -->
<section class="w3l-stats py-lg-5 py-4" id="stats">
    <div class="gallery-inner container py-md-5 py-4">
        <div class="row stats-con text-white">
            <div class="col-md-3 col-6 stats_info counter_grid">
                <span class="fa fa-smile-o"></span>
                <p class="counter">196</p>
                <h4>Hài lòng về khóa học</h4>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid1">
                <span class="fa fa-graduation-cap"></span>
                <p class="counter">96</p>
                <h4>Chứng nhận giáo viên</h4>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid mt-md-0 mt-5">
                <span class="fa fa-history"></span>
                <p class="counter">25</p>
                <h4>Năm kinh nghiệm</h4>
            </div>
            <div class="col-md-3 col-6 stats_info counter_grid2 mt-md-0 mt-5">
                <span class="fa fa-users"></span>
                <p class="counter">890</p>
                <h4>Học sinh đăng ký</h4>
            </div>
        </div>
    </div>
</section>
<!-- //stats -->
<section class="w3l-index-block4">
    <div class="feature-16-main py-5">
        <div class="container py-lg-3">
            <div class="header-section text-center">
                <h3>Chương Trình Của Chúng Tôi</h3>
                <p class="mt-3 mb-5">Học bất cứ lúc nào, bất cứ nơi đâu.</p>
            </div>
            <div class="features-grids">
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-16-gd">
                            <div class="icon">
                                <img src="{{ asset('templates/skill/images/seminors.png')}}" class="img-fluid" alt="" />
                            </div>
                            <div class="feature-16-gd-info">
                                <h4 class="mt-4 mb-2">Hội thảo</h4>
                                <p></p>
                                <ul>
                                    <li> Xem và học thử các khóa học.</li>
                                    <li>Học và thảo luận cùng giảng viên.</li>
                                    <li> Đặt mua khóa học.</li>
                                    <li>Download để xem video offline</li>
                                </ul>
                                <a href="{{route('temp.skill.services') }}" class="btn btn-primary theme-button mt-4">Tìm hiểu thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4">
                        <div class="feature-16-gd">
                            <div class="icon">
                                <img src="{{ asset('templates/skill/images/course.png') }}" class="img-fluid" alt="" />
                            </div>
                            <div class="feature-16-gd-info">
                                <h4 class="mt-4 mb-2">Khóa học nổi bật</h4>
                                <p></p>
                                <ul>
                                    <li> Xem và học thử các khóa học.</li>
                                    <li>Học và thảo luận cùng giảng viên.</li>
                                    <li> Đặt mua khóa học.</li>
                                    <li>Download để xem video offline</li>
                                </ul>
                                <a href="{{route('temp.skill.services') }}" class="btn btn-primary theme-button mt-4">Tìm hiểu thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="feature-16-gd">
                            <div class="icon">
                                <img src="{{ asset('templates/skill/images/library.png') }}" class="img-fluid" alt="" />
                            </div>
                            <div class="feature-16-gd-info">
                                <h4 class="mt-4 mb-2">Kho bài tập lớn</h4>
                                <p></p>
                                <ul>
                                    <li> Xem và học thử các khóa học.</li>
                                    <li>Học và thảo luận cùng giảng viên.</li>
                                    <li> Đặt mua khóa học.</li>
                                    <li>Download để xem video offline</li>
                                </ul>
                                <a href="{{route('temp.skill.services') }}" class="btn btn-primary theme-button mt-4">Tìm hiểu thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="feature-16-gd">
                            <div class="icon">
                                <img src="{{ asset('templates/skill/images/teacher.png') }}" class="img-fluid" alt="" />
                            </div>
                            <div class="feature-16-gd-info">
                                <h4 class="mt-4 mb-2">Giảng viên giỏi</h4>
                                <p></p>
                                <ul>
                                    <li> Xem và học thử các khóa học.</li>
                                    <li>Học và thảo luận cùng giảng viên.</li>
                                    <li> Đặt mua khóa học.</li>
                                    <li>Download để xem video offline</li>
                                </ul>
                                <a href="{{route('temp.skill.services')}}" class="btn btn-primary theme-button mt-4">Tìm hiểu thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //subscribe -->
<section class="w3l-get-started">
    <div class="new-block top-bottom">
        <div class="container">
            <div class="middle-section">
                <div class="section-width">
                    <h2>CƠ HỘI NGHỀ NGHIỆP</h2>
                </div>
                <div class="link-list-menu">
                    <p class="mb-5">Sau mỗi kỳ học, sinh viên đã có được những kỹ năng và kiến thức của một lĩnh vực cụ thể</p>
                    <a href="{{route('temp.skill.about') }}" class="btn btn-outline-light btn-more">Về Chúng Tôi</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="w3l-testimonials" id="testimonials">
    <div class="testimonials py-5">
        <div class="container py-lg-5">
            <div class="header-section text-center">
                <h3>Sinh Viên Nói Về Chúng Tôi</h3>
            </div>
            <div class="row mt-4">
                <div class="col-md-10 mx-auto">
                    <div class="owl-one owl-carousel owl-theme">
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{ asset('templates/skill/images/student1.jpg') }}" class="img-fluid testimonial-img" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>Tôi là nhân viên văn phòng nên không có nhiều thời gian đi học thêm. Nhưng hệ thống mang cho tôi trải nghiệm học tập rất thoải mái, mở máy lên là học bất cứ lúc nào cũng được.</p>
                                    <div class="name mt-4">
                                        <h4>Phong Khoa</h4>
                                        <p>Học viên</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{ asset('templates/skill/images/student2.jpg') }}" class="img-fluid testimonial-img" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>Tôi là nhân viên văn phòng nên không có nhiều thời gian đi học thêm. Nhưng Unica mang cho tôi trải nghiệm học tập rất thoải mái, mở máy lên là học bất cứ lúc nào cũng được.</p>
                                    <div class="name mt-4">
                                        <h4>Phú Lê</h4>
                                        <p>Giáo viên</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{ asset('templates/skill/images/student3.jpg') }}" class="img-fluid testimonial-img" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>Chương trình dạy rất thực tế và dễ hiểu cho người mất gốc.</p>
                                    <div class="name mt-4">
                                        <h4>Lê Vi</h4>
                                        <p>Nhân viên</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-info mt-lg-4 mt-3">
                                <div class="img-circle">
                                    <img src="{{ asset('templates/skill/images/student4.jpg') }}" class="img-fluid testimonial-img" alt="client image">
                                </div>
                                <div class="message">
                                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                                    <p>Chương trình dạy rất thực tế và dễ hiểu cho người mất gốc.</p>
                                    <div class="name mt-4">
                                        <h4>Thanh Hà</h4>
                                        <p>Nhân viên</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="w3l-faq-block py-5">
    <div class="container py-lg-5">
        <div class="header-section mb-4">
            <h3>Câu hỏi thường gặp</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Chung</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Học tập</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Thanh toán</a>
                </div>
            </div>
            <div class="col-md-8 mt-md-0 mt-5">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <section class="w3l-faq" id="faq">
                            <div class="faq-page">
                                <ul>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Làm thế nào để kích hoạt được khóa học?</h2>
                                        <p>Xem video hướng dẫn kích hoạt khóa học.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Làm sao để đăng ký và đăng nhập?</h2>
                                        <p>Để tham gia các khóa học trên hệ thống, các bạn cần phải đăng ký cho mình một tài khoản (chỉ mất 30s) theo các bước sau.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Tôi bị quên mất mật khẩu?</h2>
                                        <p>Thực hiện các bước theo hướng dẫn của video.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Chính sách hoàn trả học phí như thế nào?</h2>
                                        <p>Cam kết mang đến cho học viên những khóa học chất lượng và dịch vụ hỗ trợ tốt nhất. </p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Hệ thống báo mobile đã tồn tại trên hệ thống</h2>
                                        <p>Có thể bạn đã có tài khoản trên Unica (bạn đã đăng ký sử dụng một dịch vụ của iNET trước đó).
                                            Bạn có thể dùng chức năng Quên mật khẩu để hoặc thay số điện thoại khác nếu có hoặc số điện thoại của người thân để đăng ký mới.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Dùng quà tặng 1 triệu để thanh toán như thế nào?</h2>
                                        <p>Quà tặng 1 triệu được áp dụng cho các khóa học có giá trị sau khuyến mãi lớn hơn 300.000vnđ.
                                            Mỗi khóa học bạn sẽ được giảm thêm 100.000vnđ.
                                            1 triệu được sử dụng cho 10 khóa học.
                                            Bạn cần đăng nhập vào tài khoản trước khi đăng ký học.
                                            Số tiền 1 triệu không thể dùng thanh toán hoàn toàn cho khóa học.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Tôi có thể học các khoá nào với thẻ Membership?</h2>
                                        <p>Với thẻ membership bạn được học 99% các khóa học.
                                            Các khóa học hiện bạn chưa thể học với thẻ membership bao gồm:
                                            1. Trở thành bậc thầy bán hàng
                                            2. Kiếm ngàn đô với Dropshipping trên Amazon
                                            3. 30 tuyệt chiêu gia tăng doanh số ngay lập tức
                                            4. Money Counts Live - Xây dựng hệ thống kiếm tiền trên Internet
                                            5.  Kinh doanh đột phá
                                            6. Quản trị cảm xúc
                                            7. Tuyệt chiêu đàm phán
                                            8. Tuyệt chiêu trị chồng ngoại tình.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Chứng nhận hoàn thành khóa học</h2>
                                        <p>Sau khi kết thúc chương trình học tại hệ thống, bạn có thể nhận chứng nhận hoàn thành khóa học.</p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <section class="w3l-faq" id="faq">
                            <div class="faq-page">
                                <ul>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Mã kích hoạt được sử dụng bao nhiêu lần?</h2>
                                        <p>Mã kích hoạt chỉ được sử dụng để kích hoạt khóa học 1 lần duy nhất.
                                            Sau khi kích hoạt thành công, bạn có thể sử dụng tài khỏa đã kích hoạt để tham dự khóa học bất cứ lúc nào và không giới hạn số lần học.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Tham gia khóa học như thế nào?</h2>
                                        <p>Để tham gia khóa học trên Unica, bạn hãy chọn một khóa học bạn muốn đăng ký, click vào nút “Đăng ký học”. Bạn sẽ được đưa đến trang thanh toán học phí.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Tôi có thể truy cập vào nội dung khóa học trong bao lâu?</h2>
                                        <p>Hệ thống không giới hạn thời gian học cũng như số lần truy cập, bạn có thể tham gia khoá học bất cứ khi nào và học đi học lại nhiều lần. Bạn chỉ cần thanh toán học phí khoá học 1 lần duy nhất và được sử dụng trọn đời.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Nếu có thắc mắc trong khóa học, tôi có thể hỏi ai?</h2>
                                        <p>Khác với học offline, bạn chỉ có thể nghe giảng được 1 lần và sau đó sẽ nhanh chóng quên mất. Còn đối với các khóa học online, bạn có thể xem đi xem lại một cách chi tiết những nội dung chưa hiểu và ôn tập lại bất cứ khi nào bạn cần.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Việc học online liệu có hiệu quả?</h2>
                                        <p>Các khóa học trực tuyến đều mang tính thực tiễn cao, áp dụng được ngay.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Có được giao tiếp trực tiếp với giảng viên không?</h2>
                                        <p>Chào bạn, mặc dù không thể nói chuyện trực tiếp với giảng viên. Nhưng khi có câu hỏi, vấn đề thắc mắc, bạn có thể đặt câu hỏi ở phần Thảo luận trong giao diện khóa học hoặc tham gia vào group Facebook của lớp, giảng viên sẽ giải đáp giúp bạn.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Có thể học trước rồi trả tiền được không?</h2>
                                        <p>Bạn cần thanh toán trước mới có được mã kích hoạt của khóa học.
                                            Unica có chính sách hoàn học phí nếu bạn không hài lòng với chất lượng khóa học nên bạn hoàn toàn có thể yên tâm học.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Khóa học có bán thành đĩa, hay có phần mềm học không?</h2>
                                        <p>Việc bán thành đĩa hoặc phần mềm sẽ bất tiện nếu bạn làm xước, làm hỏng.</p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <section class="w3l-faq" id="faq">
                            <div class="faq-page">
                                <ul>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Làm thế nào để thanh toán?</h2>
                                        <p>Hiện tại Unica có 4 hình thức thanh toán:
                                            -  Thanh toán bằng COD: nhận mã kích hoạt và thanh toán đồng thời qua dịch vụ chuyển phát tận nơi
                                            -  Thanh toán qua thẻ điện thoại: Mobifone, Vinaphone, Viettel.
                                            -  Thanh toán qua tài khoản ngân hàng.
                                            -  Học viên trực tiếp thanh toán tại Công ty CP iNET, 247 Cầu Giấy, Hà Nội</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Làm thế nào để thanh toán bằng thẻ ATM?</h2>
                                        <p>Hướng dẫn thanh toán qua các bước trong video</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Làm thế nào để thanh toán bằng thẻ Visa?</h2>
                                        <p>Bạn xem hướng dẫn thanh toán khóa học trên Unica bằng thẻ visa trong video dưới đây.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Làm thế nào để thanh toán tại nhà?</h2>
                                        <p>Bạn xem hướng dẫn thanh toán khóa học trên Unica bằng cách thanh toán tại nhà.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Hướng dẫn Chuyển khoản thanh toán khóa học</h2>
                                        <p>Bạn xem clip hướng dẫn dưới đây để biết cách thanh toán qua chuyển khoản ngân hàng.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Cài đặt thanh toán nhưng không có mã số thuế thì phải làm sao?</h2>
                                        <p>Bạn có thể bổ sung thông tin này sau, tuy nhiên bạn cần mã số thuế cá nhân để tham gia affiliate.</p>
                                    </li>
                                    <li>
                                        <input type="checkbox" checked>
                                        <i></i>
                                        <h2>Đơn hàng bị hoàn học phí, tôi có doanh thu không?</h2>
                                        <p>Hoa hồng AFF dựa trên doanh thu học viên thanh toán cho khóa học.
                                            Nếu khách yêu cầu hoàn học phí. Bạn sẽ không được hoa hồng.</p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<section class="w3l-subscribe">
    <div class="subscription-infhny">
        <div class="container-fluid">
            <div class="subscription-grids row">
                <div class="subscription-right form-right-inf col-lg-6 p-md-5 p-4">
                    <div class="px-lg-5 py-md-0 py-3">
                        <div class="header-section">
                            <h3>Đăng ký Email để nhận cập nhật ưu đãi tức thì!</span></h3>
                            {{-- <p class="mt-3">Subscribe and get notified at first on the latest update and offers!</p> --}}
                        </div>
                        <form action="#" class="signin-form mt-lg-5 mt-4">
                            <div class="forms-gds">
                                <div class="form-input">
                                    <input type="email" name="" placeholder="Email của bạn" required="">
                                </div>
                                <div class="form-input"><button class="btn btn-primary theme-button">Đăng ký</button></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="subscription-left forms-25-info col-lg-6 ">

                </div>
            </div>
        </div>
</section>
@endsection