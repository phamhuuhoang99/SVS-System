@extends('templates.villas.master')
@section('title', 'Villas')
@section('content')

    <!-- page details -->
    <div class="breadcrumb-mobamu">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href={{ route("temp.villas.index") }}>Trang Chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Blog Chi Tiết</li>
        </ol>
    </div>
    <!-- //page details -->

    <!-- single -->
    <div class="blog-w3l py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center text-bl font-weight-bold">Blog Chi Tiết</h3>
            <p class="sub-tittle text-center mt-2 mb-sm-5 mb-4 pb-xl-3">Điều gì xuất phát từ trái tim, sẽ đi đến trái tim, nên cứ cố hết sức mình để làm sao chỉ với một chi phí hợp lý nhưng lữ khách cũng có thể trải nghiệm những gì hay ho và thoải mái nhất.</p>
            <div class="blog_section px-lg-5">
                <div class="card border-0">
                    <a href={{ route("temp.villas.single") }}>
                        <img src={{ asset("templates/villas/images/single.jpg") }} alt="" class="img-fluid">
                    </a>
                    <div class="card-body p-0 py-4">
                        <div class="row border-bottom pb-3">
                            <div class="col-sm-6 col-4 perso-wthree">
                                <h6 class="blog-first text-bl">
                                    <span class="fa fa-user mr-2"></span>Phong Khoa
                                </h6>
                            </div>
                            <div class="col-sm-6 col-8 info-commt text-right">
                                <ul class="blog_list">
                                    <li> 16/08/2020</li>
                                    <li class="mx-3">
                                        <a href="#">
                                            <span class="fa fa-heart-o mr-1"></span>30
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-comments-o mr-1"></span>18
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href={{ route("temp.villas.single") }} class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">Đà Lạt mùa nào đẹp nhất</a>
                        <p class="card-text"> Đây là một trong số những thắc mắc mà du khách hỏi Hoa Dalat Travel chúng tôi nhiều nhất hiện nay.</p>
                    </div>
                </div>
                <a href={{ route("temp.villas.single") }} class="single-text text-bl font-weight-light my-3">Đà Lạt mùa nào đẹp nhất – Bốn mùa ở Đà Lạt đi đâu chơi tuyệt vời nhất.</a>
                <p>Khi du khách đến tham quan Đà Lạt vào mùa xuân bạn sẽ trải nghiệm được khá nhiều điều mới mẻ và đặt sắc. Mùa xuân là mùa mà trăm loài hoa ở Đà Lạt thi nhau đua nở. Mùa này rất thích hợp cho những du khách nào yêu thích hoa thì không thể nào bỏ lỡ.
				</p>
                <p class="my-3">Mùa xuân Đà Lạt đến rất êm dịu. Lúc này, muốn thưởng thức cảnh sắc thiên nhiên một cách hoàn hảo thì các homestay Đà Lạt đẹp và lộ thiên như Home Of Dreamers là “số dzách”!</p>
                <p>Tọa lạc tại một đỉnh đồi cao cao với view thành phố đẹp hết ý. Ngôi nhà của những kẻ mộng mơ rất hợp với hội bạn thân mê sống ảo. Kiến trúc của nơi này gây ấn tượng mạnh với sàn gỗ cổ điển. Và bốn mặt tường kính “zoom” rõ từng khoảnh khắc tuyệt vời của thành phố.
                </p>
                <a href={{ route("temp.villas.single") }} class="text-bl font-weight-bold blog-grid-title mt-4 mb-3">Home of Dreamers</a>
                <div class="row">
                    <div class="col-md-6">
                        <p>Cảnh sắc Đà Lạt về đêm sẽ càng rực rõ hơn trong những khung kính của Home Of Dreamers. Tạo cảm giác như bạn đang chìm trong cả một biển sao trời và tiết trời xuân ấm áp!.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Tọa lạc tại một đỉnh đồi cao cao với view thành phố đẹp hết ý. Ngôi nhà của những kẻ mộng mơ rất hợp với hội bạn thân mê sống ảo. </p>
                    </div>
                </div>
                <a href={{ route("temp.villas.single") }} class="single-text text-bl font-weight-light mt-4">Địa điểm sống ảo Mùa xuân ở Đà Lạt</a>
                <p class="my-3">Một trong những “đặc sản” của Đà Lạt ngày xuân chính là sắc hồng của những cung đường mai anh đào. Bạn có thể dễ dàng bắt gặp những con đường dưới “mưa anh đào” chạy dài suốt những tháng đầu mùa xuân.</p>
                <p>Ngôi chùa Linh Quy mộng ảo này vốn dĩ đã rất nổi tiếng với các tín đồ Phật giáo khi đến với Đà Lạt, trước cả khi nó tạo “sóng gió” sau MV của chàng ca sĩ Sơn Tùng-MTP.</p>
                <div class="comment-top mt-5">
                    <h4>Bình luận</h4>
                    <div class="media">
                        <img src={{ asset("templates/villas/images/te1.jpg") }} alt="" class="img-fluid" />
                        <div class="media-body pt-xl-2 pl-3">
                            <h5 class="mb-2">My My</h5>
                            <p>Khách sạn mới view đẹp sạch sẽ . Vị trí không ở trung tâm nhưng tiện đi lại không bị kẹt xe. Nên cải thiện ăn sáng thì sẽ hoàn hảo hơn.</p>
                        </div>
                    </div>
                    <div class="media mt-5">
                        <img src={{ asset("templates/villas/images/te2.jpg") }} alt="" class="img-fluid" />
                        <div class="media-body  pt-xl-2 pl-3">
                            <h5 class="mb-2">Hoàng Nhân</h5>
                            <p>Phòng sạch sẽ, buffet sáng ngon. Ks nằm trên đường không quá đông khách nên khá yên tĩnh, thích hợp nghỉ dưỡng</p>
                        </div>
                    </div>
                </div>
                <div class="comment-top mt-5">
                    <h4>Để lại Bình luận</h4>
                    <div class="comment-bottom mobamuinfo_mail_grid_right">
                        <form >
                            <div class="form-group">
                                <input class="form-control" type="text" name="Name" placeholder="Họ Tên" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" name="Email" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="Subject" placeholder="Chủ Đề" required="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="Message" placeholder="Lời Nhắn..."
                                    required=""></textarea>
                            </div>
                            <button type="submit" class="btn submit mt-4">Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //single -->
@endsection
