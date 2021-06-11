@extends('templates.fit-pro.master')
@section('title', 'Fit Pro')
@section('content')

<!----start-slide-bottom--->
<div class="second-head">
    <div class="container">
        <h2>
            <a href="{{ route('temp.fit-pro.index') }}">
                <h5>Trang Chủ </h5>
            </a> / VỀ CHÚNG TÔI</h2>
    </div>
</div>
<div class="about-section">
    <div class="container">
        <h3>VỀ CHÚNG TÔI</h3>
        <div class="about-content wow bounceIn animated" data-wow-delay="0.4s">
            <div class="col-md-5 about-top">
                <img src="{{ asset('templates/fit-pro/images/ab.jpg') }}" class="img-responsive" alt="" />
            </div>
            <div class="col-md-7 about-text">
                <h4 class="col-md-3 f-logo">F</h4>
                <p class="col-md-9 ab">Chúng tôi quan niệm rằng không có bất cứ một khoản đầu tư nào quý giá hơn đầu tư cho chính bản thân. Khi đầu tư một cách đúng đắn cho việc tập luyện, những lợi ích mà khách hàng nhận được không chỉ là kết quả mang tính thẩm mỹ về mặt hình thể.</p>
                <div class="clearfix"></div>
                <p class="para wow fadeInDownBig animated animated" data-wow-delay="0.4s">Đối với chúng tôi, lợi ích của khách hàng chính là lợi nhuận quý báu nhất. Kết quả thực sự của khách hàng là những gì thương hiệu Chúng tôi luôn hướng đến.</p>

            </div>
            <p>Giá trị mà Chúng tôi luôn muốn mang lại cho khách hàng là trải nghiệm tập luyện thoải mái và hài lòng nhất trong môi trường thân thiện từ nhân viên tới khách hàng tập luyện cùng.</p>
            <p>Kiến thức tập luyện và dinh dưỡng là nền tảng của một quá trình tập luyện thành công. Đội ngũ Coach của Chúng tôi đều được đào tạo theo chương trình chuẩn quốc tế, giàu kiến thức, kinh nghiệm và khả năng sư phạm.</p>
            <p>Tập luyện văn minh là một khái niệm mà Chúng tôi theo đuổi kiến tạo nên không gian riêng tư giúp cho hội viên đạt được trạng thái tập trung và nghiêm túc khi rèn luyện.</p>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--classes-->
@include('templates.fit-pro.class')
@endsection