@extends('templates.dental-health.master')
@section('title', 'Dental Health')
@section('content')
    <!-- banner -->
    <div class="innerpage-banner" id="home">
        <div class="inner-page-layer">
        </div>
    </div>
    <!-- //banner -->

    <!-- Services -->
    <section class="services-inner py-5">
        <div class="container py-md-3">
            <h2 class="heading text-center mb-sm-5 mb-4">Dịch Vụ </h2>
            <div class="row service-grids">
                <div class="row col-lg-6 mb-5 padder-none">
                    <div class="col-sm-3 ser_icon">
                        <span class="icon bg1 mx-auto">
                            <span class="fa fa-heartbeat"></span>
                        </span>
                    </div>
                    <div class="col-sm-9 mt-sm-0 mt-3">
                        <h4>Điều trị tủy công nghệ X-Smart</h4>
                        <p class="">Điều trị tủy công nghệ X-Smart bảo tồn tối đa tổ chức răng, giữ lại răng sinh
                            lý, giảm thời gian điều trị xuống bằng ½ so với phương pháp cũ. Quy trình điều trị
                            tại nha khoa an toàn và hạn chế đau nhức.
                        </p>
                    </div>
                </div>
                <div class="row col-lg-6 mb-sm-5 padder-none">
                    <div class="col-sm-9 text-sm-right">
                        <h4>Trồng răng Implant</h4>
                        <p class="">Trồng răng Implant là giải pháp phục hình răng bị mất nhanh chóng, hiệu quả nhất, được
                            nhiều chuyên gia đánh giá cao hiện nay. Bởi không chỉ giúp khôi phục thẩm mỹ hàm răng, đảm bảo
                            chức năng ăn nhai bình thường, mà răng implant còn có khả năng duy trì bền vững đến trọn đời với
                            nhiều ưu điểm vượt trội.
                        </p>
                    </div>
                    <div class="col-sm-3 mt-sm-0 mt-4 ser_icon ser-right">
                        <span class="icon bg2 mx-auto">
                            <span class="fa fa-stethoscope"></span>
                        </span>
                    </div>
                </div>
                <div class="row col-lg-6 mb-lg-0 mb-5 mt-sm-0 mt-5 padder-none">
                    <div class="col-sm-3 mb-sm-0 mb-4 ser_icon">
                        <span class="icon bg3 mx-auto">
                            <span class="fa fa-bullseye"></span>
                        </span>
                    </div>
                    <div class="col-sm-9">
                        <h4>Nhổ răng an toàn với sóng siêu âm</h4>
                        <p class="">Công nghệ nhổ răng siêu âm Piezotome và Màng Collagen hiện đại, đẩy nhanh thời gian thực
                            hiện, an toàn, không đau, lành thương nhanh. Kỹ thuật xử lý vô trùng Extra đảm bảo phòng phẫu
                            thuật vô trùng 100%, không gây ra bất kì biến chứng hậu phẫu nào.
                        </p>
                    </div>
                </div>
                <div class="row col-lg-6 padder-none">
                    <div class="col-sm-9 text-sm-right">
                        <h4>Nha Khoa trẻ em</h4>
                        <p class="">Theo thống kê, hơn 90% trẻ em Việt Nam đang gặp các vấn đề về răng miệng, trong đó hơn
                            85% trẻ từ 6 – 8 tuổi bị sâu răng, 80 – 90% trẻ mắc các bệnh viêm lợi.
                        </p>
                    </div>
                    <div class="col-sm-3 mt-sm-0 mt-4 ser_icon ser-right">
                        <span class="icon bg4 mx-auto">
                            <span class="fa fa-user-md"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Services -->


    @include('templates.dental-health.sectionservices')

    <!-- join -->
    <section class="join py-5">
        <div class="container py-lg-5 py-sm-3">
            <div class="row join_grids">
                <div class="col-lg-6">
                    <img src="{{ asset('templates/detal-health/images/b.jpg') }}" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-6">
                    <h4 class="mt-4">Đặt Lịch Hẹn Ngay Hôm Nay </h4>
                    <p class="py-sm-4 py-3">Các bác sĩ tại nha khoa được chuyên môn hoá, chuyên sâu theo từng lĩnh vực như nha khoa tổng thể, chỉnh nha, răng sứ thẩm mỹ, Implant… giúp phục vụ khách hàng tốt nhất.
                        Nullam dui mi.</p>
                    <p class="pb-3">Đăng ký nhanh để nhận được những ưu đãi khi tham gia dịch vụ của chúng tôi</p>
                    <a class="btn btn-banner text-capitalize" href="#" role="button">Đặt Lịch Ngay</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //join -->
@endsection
