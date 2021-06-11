@extends('templates.pet-sitter.master')
@section('title', 'Pet Sitter')
@section('content')
    <section class="w3l-hero-headers-9">
        <div class="slide header11" data-selector="header11">
            <div class="container">
                <div class="banner-text ">
                    <h5 class=" ">Pet được chăm sóc
                        <br><strong>Đặc biệt</strong>
                    </h5>
                    <p class=" ">Dịch vụ trông giữa thú cưng của Chúng tôi giúp mọi người có những chuyến du
                        lịch vào dịp tết và nghỉ lễ mà vẫn yên tâm với thú cưng của mình.</p>
                    <a href="{{ route('temp.pet-sitter.contact') }}" class="btn logo-button top-margin">Liên Hệ</a>
                </div>
            </div>

        </div>
    </section>

    <section class="w3l-teams-15">
        <div class="team-single-main editContent">
            <div class="container">
                <div class="row">
                    <div class="column2 col-lg-6">
                        <img src="{{ asset('templates/pet-sitter/images/5.jpg') }}" alt="product" class="img-responsive ">
                    </div>
                    <div class="column2 image-text col-lg-6">
                        <h3 class="team-head editContent">Chúng tôi cam kết sức khỏe và cuộc sống của <span class="color-text editContent">Cún cưng.</span></h3>
                        <p class="para editContent text ">
                            Chó là thành viên trong gia đình, không chỉ là thú cưng.</p>
                        <div class="pet-animals">
                            <div class="pet-grid one-img">
                                <h6><a href="#page">Giá rẻ nhất</a></h6>
                                <p class="para">
                                    Giá phù hợp với túi tiền người dùng.
                                </p>
                            </div>
                            <div class="pet-grid two-img">
                                <h6><a href="#page">Pet khỏe mạnh</a></h6>
                                <p class="para">
                                    Đảm đảm sức khỏe của thú cưng, tư vấn sức khỏe.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="w3l-call-to-action_9">
        <div class="call-w3 editContent">
            <div class="container">
                <div class="grids">
                    <div class="grids-content row">
                        <div class="column col-lg-4 col-md-6 col-sm-6 color-2 editContent">
                            <div class="bg-color-white">
                                <div class="span-color editContent">
                                    <span class="fa fa-thumbs-o-up" aria-hidden="true"></span>
                                </div>
                                <h4><a href="{{ route('temp.pet-sitter.about') }}" class=" editContent">Nhân viên giàu kinh
                                        nghiệm</a></h4>
                                <p class="para editContent">Đội ngũ bác sĩ thú y được đào tạo chuyên sâu tại các trường đại
                                    học, bệnh viện uy tín trong và ngoài nước.</p>

                            </div>
                        </div>
                        <div class="column col-lg-4 col-md-6 col-sm-6 color-2 editContent">
                            <div class="bg-color-white">
                                <div class="span-color editContent">
                                    <span class="fa fa-smile-o" aria-hidden="true"></span>
                                </div>
                                <h4><a href="{{ route('temp.pet-sitter.about') }}" class=" editContent">Ưu đãi hàng
                                        tháng</a></h4>
                                <p class="para editContent">Mỗi tháng chúng tôi đều có những chương trình ưu đãi khác nhau
                                    danh cho khách hàng.</p>

                            </div>
                        </div>

                        <div class="column col-lg-4 col-md-6 col-sm-6 color-2 editContent">
                            <div class="bg-color-white">
                                <div class="span-color editContent">
                                    <span class="fa fa-laptop" aria-hidden="true"></span>
                                </div>
                                <h4><a href="{{ route('temp.pet-sitter.about') }}" class=" editContent">Trang thiết bị hiện
                                        đại</a>
                                </h4>
                                <p class="para editContent">Tất cả các trang thiết bị tại các phòng chuyên môn của chúng tôi
                                    đều đạt tiêu chuẩn của Bộ Nông Nghiệp.</p>

                            </div>
                        </div>
                        <div class="column col-lg-4 col-md-6 col-sm-6 color-2 editContent">
                            <div class="bg-color-white">
                                <div class="span-color editContent">
                                    <span class="fa fa-diamond" aria-hidden="true"></span>
                                </div>
                                <h4><a href="{{ route('temp.pet-sitter.about') }}" class=" editContent">Giá thành hợp lý</a>
                                </h4>
                                <p class="para editContent">Hiểu được tâm lý của khách hàng, bệnh viện thú y chúng tôi luôn
                                    hướng đến những dịch vụ chất lượng, kèm theo đó là một giá thành hợp lý</p>

                            </div>
                        </div>
                        <div class="column col-lg-4 col-md-6 col-sm-6 color-2 editContent">
                            <div class="bg-color-white">
                                <div class="span-color editContent">
                                    <span class="fa fa-magic" aria-hidden="true"></span>
                                </div>
                                <h4><a href="{{ route('temp.pet-sitter.about') }}" class=" editContent">Phục vụ tất cả các
                                        ngày trong tuần</a></h4>
                                <p class="para editContent">Để đáp ứng nhu cầu của khách hàng, chúng tôi phục
                                    vụ tất cả các ngày trong năm, kể cả ngày lễ tết</p>

                            </div>
                        </div>
                        <div class="column col-lg-4 col-md-6 col-sm-6 color-2 editContent">
                            <div class="bg-color-white">
                                <div class="span-color editContent">
                                    <span class="fa fa-check" aria-hidden="true"></span>
                                </div>
                                <h4><a href="{{ route('temp.pet-sitter.about') }}" class=" editContent">Tư vấn miễn phí</a>
                                </h4>
                                <p class="para editContent">Bạn hẳn đã từng gặp những thắc mắc về chó mèo mà không biết hỏi
                                    ai? Chúng tôi sẵn sàng giúp bạn giải đáp mọi thắc mắc với đội ngũ tư vấn giàu kinh
                                    nghiệm.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-specification-6">
        <div class="specification-layout editContent">
            <div class="container">
                <div class=" row">
                    <div class="my-bio col-lg-6">
                        <h3 class="title-big">Cung Cấp <span class="color-text editContent">Đầy Đủ Dịch Vụ</span> Cho Pet
                        </h3>
                        <div class="hair-make">
                            <h5><a href="#page">Chất lượng & Tận tình</a></h5>
                            <p class="para mt-2">Chế độ ăn cho vật nuôi được đảm bảo đầy đủ dinh dưỡng hoặc theo khẩu phần
                                riêng của chủ</p>
                        </div>
                        <div class="hair-make">
                            <h5><a href="#page">Trang Thiết Bị Hiện Đại</a></h5>
                            <p class="para mt-2">Đi dạo và vui chơi cùng những bạn bè cún khác ( không áp dụng cho mèo )</p>
                        </div>
                        <div class="hair-make">
                            <h5><a href="#page">Cắt Móng & Tỉa Lông</a></h5>
                            <p class="para mt-2">Thú cưng của bạn sẽ được tắm rửa và cắt tỉa lông sạch sẽ</p>
                        </div>
                    </div>
                    <div class="col-lg-6 position-relative back-image">
                        <img src="{{ asset('templates/pet-sitter/images/7.jpg') }}" alt="product" class="img-responsive ">
                    </div>
                </div>
    </section>
    <section class="w3l-clients">
        <div class="main-w3">
            <div class="container">
                <div class="apply-grids-info ">
                    <div class="apply-gd-left ">
                        <h3>Đặt Lịch <span class="color-text editContent">Lịch Hẹn</span></h3>
                        <p class="para">Nhận chăm sóc thú cưng sơ sinh khi mới sinh ra bằng cách nuôi bộ (không cần sữa mẹ)
                            hoặc nuôi ghép. Vì nhiều lý do mà những mà thú cưng sơ sinh khó chăm sóc hơn ví dụ như: Thiếu
                            sữa, mất mẹ, nhiều con . . . </p>
                        <div class="apply-text">
                            <div class="apply-sec-info">
                                <h5><a href="#">Gửi Nội Trú</a></h5>
                                <p class="para">Dịch vụ chăm sóc thú cưng ngày lễ tết được tốt hơn </p>
                            </div>
                            <div class="apply-sec-info">
                                <h5><a href="#">Chăm Sóc Đặc Biệt</a></h5>
                                <p class="para">Nhận chăm sóc chó,mèo con sơ sinh mới lọt lòng mẹ bằng cách nôi hay ghép
                                    bầy.</p>
                            </div>
                            <div class="apply-sec-info">
                                <h5><a href="#">Thực phẩm dinh dưỡng</a></h5>
                                <p class="para">Chế độ ăn cho vật nuôi được đảm bảo đầy đủ dinh dưỡng hoặc theo khẩu phần
                                    riêng của chủ.</p>
                            </div>
                        </div>
                    </div>
                    <div class="apply-form p-sm-5 p-4">
                        <form action="#">
                            <div class="admission-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Họ tên*" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Số điện thoại*" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email*" required="">
                                </div>
                                <select class="form-control">
                                    <option>Loại Dịch Vụ</option>
                                    <option>Vệ Sinh Tai</option>
                                    <option>Tỉa Lông</option>
                                    <option>Làm Móng</option>
                                    <option>Chải Lông</option>
                                    <option>Khác</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea name="Comment" class="form-control" placeholder="Lời nhắn*"
                                    required=""></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary submit action-button">Đặt Lịch Ngay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="w3l-covers-18">
        <div class="covers-main editContent">
            <div class="main-titles-head text-center">
                <h3 class="header-name editContent">
                    Bộ Sưu Tập Pet
                </h3>
                <p class="tiltle-para editContent editContent"> Chúng tôi có nhận nhập chó trực tiếp từ những trại
                    giống nổi tiếng, chất lượng ở các nước có nền công nghiệp thú cưng phát triển như: Thái Lan, Mỹ, Anh,
                    Pháp...</p>
            </div>
            <div class="container">
                <div class="gallery-image">
                    <div class="img-box">
                        <a href="#page"> <img src="{{ asset('templates/pet-sitter/images/12.jpg') }}" alt="product"
                                class="img-responsive "></a>

                        <div class="caption">
                            <h6><a href="#page">Chó Nâu Vàng</a></h6>
                            <p class="para">Mua Bán Chó Uy Tín Và Chất Lượng - Báo Giá Chó - Chúng tôi Tặng Phụ Kiện Và
                                Hướng Dẫn Chăm Sóc Khi Mua Cún Tại Hệ Thống.</p>
                        </div>
                    </div>

                    <div class="img-box">
                        <a href="#page"> <img src="{{ asset('templates/pet-sitter/images/13.jpg') }}" alt="product"
                                class="img-responsive "></a>

                        <div class="caption">
                            <h6><a href="#page">Chó Trắng Xám</a></h6>
                            <p class="para">Mua Bán Chó Uy Tín Và Chất Lượng - Báo Giá Chó - Chúng tôi Tặng Phụ Kiện Và
                                Hướng Dẫn Chăm Sóc Khi Mua Cún Tại Hệ Thống.</p>
                        </div>

                    </div>
                    <div class="img-box">
                        <a href="#page"> <img src="{{ asset('templates/pet-sitter/images/8.jpg') }}" alt="product"
                                class="img-responsive "></a>

                        <div class="caption">
                            <h6><a href="#page">Chó Nâu</a></h6>
                            <p class="para">Mua Bán Chó Uy Tín Và Chất Lượng - Báo Giá Chó - Chúng tôi Tặng Phụ Kiện Và
                                Hướng Dẫn Chăm Sóc Khi Mua Cún Tại Hệ Thống.</p>
                        </div>

                    </div>
                    <div class="img-box">
                        <a href="#page"><img src="{{ asset('templates/pet-sitter/images/9.jpg') }}" alt="product"
                                class="img-responsive "></a>

                        <div class="caption">
                            <h6><a href="#page">Chó Xám</a></h6>
                            <p class="para">Mua Bán Chó Uy Tín Và Chất Lượng - Báo Giá Chó - Chúng tôi Tặng Phụ Kiện Và
                                Hướng Dẫn Chăm Sóc Khi Mua Cún Tại Hệ Thống.</p>
                        </div>

                    </div>
                    <div class="img-box">
                        <a href="#page"><img src="{{ asset('templates/pet-sitter/images/10.jpg') }}" alt="product"
                                class="img-responsive "></a>

                        <div class="caption">
                            <h6><a href="#page">Chó Xám Đen</a></h6>
                            <p class="para">Mua Bán Chó Uy Tín Và Chất Lượng - Báo Giá Chó - Chúng tôi Tặng Phụ Kiện Và
                                Hướng Dẫn Chăm Sóc Khi Mua Cún Tại Hệ Thống.</p>

                        </div>
                    </div>
                    <div class="img-box">
                        <a href="#page"><img src="{{ asset('templates/pet-sitter/images/11.jpg') }}" alt="product"
                                class="img-responsive "></a>

                        <div class="caption">
                            <h6><a href="#page">Chó Đen</a></h6>
                            <p class="para">Mua Bán Chó Uy Tín Và Chất Lượng - Báo Giá Chó - Chúng tôi Tặng Phụ Kiện Và
                                Hướng Dẫn Chăm Sóc Khi Mua Cún Tại Hệ Thống.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
