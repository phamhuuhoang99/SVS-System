@extends('templates.carserving.master')
@section('title', 'Carserving Started')
@section('content')
    <!-- about breadcrumb -->
    <section class="w3l-about-breadcrumb position-relative text-center">
        <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
            <div class="container py-lg-5 py-3">
                <h2 class="title">Dịch Vụ</h2>
                <ul class="breadcrumbs-custom-path mt-2">
                    <li><a href="#url">Trang Chủ</a></li>
                    <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span> Dịch Vụ </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //about breadcrumb -->
    <!--/services-sec-->
    <div class="w3-services py-5">
        <div class="container py-lg-4">
            <div class="title-content text-left mb-lg-5 mb-4">
                <h6 class="sub-title">Dịch Vụ Của Chúng Tôi</h6>
                <h3 class="hny-title">Dịch Vụ Tuyệt Vời</h3>
                <p>Chúng tôi sẵn sàng trợ giúp tất cả các dịch vụ của quý khách bất kỳ khi cần.</p>

            </div>
            <div class="row w3-services-grids">
                <div class="col-lg-4 col-md-6 causes-grid">
                    <div class="causes-grid-info">
                        <a href="#"><img src="{{ asset('templates/carserving/images/ab1.jpg') }}" class="img-fuild" alt=""></a>
                        <a href="#" class="cause-title-wrap">
                            <h4 class="cause-title">Vệ Sinh Khoang Máy
                            </h4>
                        </a>
                        <p class="card-text mb-0">Cung cấp hàng trăm sản phẩm & dịch vụ cho hàng ngàn khách hàng tại Việt Nam và trên Thế giới.
                        </p>

                        <a href="{{ route('temp.carserving.services')}}" class="btn btn-style btn-primary mt-4">Xem thêm</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 causes-grid">
                    <div class="causes-grid-info">
                        <a href="#"><img src="{{ asset('templates/carserving/images/ab2.jpg') }}" class="img-fuild" alt=""></a>
                        <a href="#" class="cause-title-wrap">
                            <h4 class="cause-title">Phục Hội Nội Thất
                            </h4>
                        </a>
                        <p class="card-text mb-0">Cung cấp hàng trăm sản phẩm & dịch vụ cho hàng ngàn khách hàng tại Việt Nam và trên Thế giới.
                        </p>

                        <a href="{{ route('temp.carserving.services')}}" class="btn btn-style btn-primary mt-4">Xem thêm</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 causes-grid">
                    <div class="causes-grid-info">
                        <a href="#"><img src="{{ asset('templates/carserving/images/ab3.jpg') }}" class="img-fuild" alt=""></a>
                        <a href="#" class="cause-title-wrap">
                            <h4 class="cause-title">Thay Lốp Xe
                            </h4>
                        </a>
                        <p class="card-text mb-0">Cung cấp hàng trăm sản phẩm & dịch vụ cho hàng ngàn khách hàng tại Việt Nam và trên Thế giới.
                        </p>

                        <a href="{{ route('temp.carserving.services')}}" class="btn btn-style btn-primary mt-4">Xem thêm</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 causes-grid">
                    <div class="causes-grid-info">
                        <a href="#"><img src="{{ asset('templates/carserving/images/ab4.jpg') }}" class="img-fuild" alt=""></a>
                        <a href="#" class="cause-title-wrap">
                            <h4 class="cause-title">Rửa Xe
                            </h4>
                        </a>
                        <p class="card-text mb-0">Cung cấp hàng trăm sản phẩm & dịch vụ cho hàng ngàn khách hàng tại Việt Nam và trên Thế giới.
                        </p>


                        <a href="{{ route('temp.carserving.services')}}" class="btn btn-style btn-primary mt-4">Xem thêm</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 causes-grid">
                    <div class="causes-grid-info">
                        <a href="#"><img src="{{ asset('templates/carserving/images/ab5.jpg') }}" class="img-fuild" alt=""></a>
                        <a href="#" class="cause-title-wrap">
                            <h4 class="cause-title">Kiểm Tra Động Cơ
                            </h4>
                        </a>
                        <p class="card-text mb-0">Cung cấp hàng trăm sản phẩm & dịch vụ cho hàng ngàn khách hàng tại Việt Nam và trên Thế giới.
                        </p>

                        <a href="{{ route('temp.carserving.services')}}" class="btn btn-style btn-primary mt-4">Xem thêm</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 causes-grid">
                    <div class="causes-grid-info">
                        <a href="#"><img src="{{ asset('templates/carserving/images/ab6.jpg') }}" class="img-fuild" alt=""></a>
                        <a href="#" class="cause-title-wrap">
                            <h4 class="cause-title">Thay Dầu, Nhớt
                            </h4>
                        </a>
                        <p class="card-text mb-0">Cung cấp hàng trăm sản phẩm & dịch vụ cho hàng ngàn khách hàng tại Việt Nam và trên Thế giới.
                        </p>

                        <a href="{{ route('temp.carserving.services')}}" class="btn btn-style btn-primary mt-4">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//services-sec-->
@endsection
