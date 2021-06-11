@extends('templates.dental-health.master')
@section('title', 'Dental Health')
@section('content')

    <!-- banner -->
    <div class="innerpage-banner" id="home">
        <div class="inner-page-layer">
        </div>
    </div>
    <!-- //banner -->

    <!-- blog -->
    <section class="blog py-5">
        <div class="container py-md-3">
            <h2 class="heading text-center mb-sm-5 mb-4">blog </h2>
            <div class="row blog-grids head">
                <div class="col-lg-7 mb-lg-5 blog-img1">
                    <img src="{{ asset('templates/detal-health/images/blog1.jpg') }}" alt="" class="img-fluid" />
                    <a href="{{ route('temp.detal-health.single') }}">Blog #1</a>
                </div>
                <div class="col-lg-5 mb-lg-5 mb-4">
                    <h5>25/08/2020</h5>
                    <h4 class="my-3">Nụ Cười Chuẩn Vàng, Dễ Dàng Trả Góp.</h4>
                    <p class="my-3">Với mong muốn mang tới giải pháp mới nhằm hỗ trợ tốt nhất cho khách hàng có nhu cầu làm
                        đẹp, chỉnh nha tại cơ sở uy tín, chất lượng nhưng còn băn khoăn về tài chính, Nha khoa chúng tôi
                        chính thức triển khai chương trình ưu đãi.</p>
                    <a href="{{ route('temp.detal-health.single') }}" class="btn-banner"> Xem thêm </a>
                </div>
                <div class="col-lg-5 mb-lg-5 mb-4">
                    <h5>25/08/2020</h5>
                    <h4 class="my-3">90% Trẻ Em Đang Gặp Vấn Đề Về Răng Miệng.</h4>
                    <p class="my-3">“Cái răng cái tóc là góc con người”, một hàm răng đẹp không chỉ mang đến hiệu quả thẩm
                        mỹ mà còn đảm bảo sức khỏe và ăn nhai tốt. Với trẻ em, vấn đề răng miệng lại càng cần được quan tâm
                        hơn nữa.</p>
                    <a href="{{ route('temp.detal-health.single') }}" class="btn-banner"> Xem thêm </a>
                </div>
                <div class="col-lg-7 mb-5 blog-img2">
                    <img src="{{ asset('templates/detal-health/images/blog1.jpg') }}" alt="" class="img-fluid" />
                    <a href="{{ route('temp.detal-health.single') }}">Blog #2</a>
                </div>
                <div class="col-lg-7 mb-lg-5 blog-img1">
                    <img src="{{ asset('templates/detal-health/images/blog1.jpg') }}" alt="" class="img-fluid" />
                    <a href="{{ route('temp.detal-health.single') }}">Blog #3</a>
                </div>
                <div class="col-lg-5 mb-lg-5 mb-4">
                    <h5>25/08/2020</h5>
                    <h4 class="my-3">Đầu tư mạnh phục vụ khách hàng niềng răng</h4>
                    <p class="my-3">Vừa qua, tại nha khoa Chúng tôi đã diễn ra lễ chuyển giao máy quét
                        iTero Element 5D, ứng dụng trí tuệ nhân tạo trong chỉnh nha.</p>
                    <a href="{{ route('temp.detal-health.single') }}" class="btn-banner"> Xem thêm </a>
                </div>
                <div class="col-lg-5 mb-lg-5 mb-4">
                    <h5>25/08/2020</h5>
                    <h4 class="my-3">Cập nhật chương trình khuyến mãi mới nhất tại Detal Health</h4>
                    <p class="my-3">Được biết đến là nha khoa uy tín, chất lượng với chi phí niềng răng hợp lý, Chúng tôi
                        luôn cập nhật các chương trình ưu đãi hỗ trợ khách hàng. Cùng theo dõi chương trình khuyến
                        mãi, ưu đãi thanh toán đang được áp dụng trên hệ thống</p>
                    <a href="{{ route('temp.detal-health.single') }}" class="btn-banner"> Xem thêm </a>
                </div>
                <div class="col-lg-7 blog-img2">
                    <img src="{{ asset('templates/detal-health/images/blog1.jpg') }}" alt="" class="img-fluid" />
                    <a href="{{ route('temp.detal-health.single') }}">Blog #4</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //blog -->

@endsection
