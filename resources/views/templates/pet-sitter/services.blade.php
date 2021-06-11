@extends('templates.pet-sitter.master')
@section('title', 'Pet Sitter')
@section('content')
    <section class="w3l-inner-banner-main">
        <div class="about-inner editContent">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li class="right-side propClone"><a href="{{ route('temp.pet-sitter.index') }}"
                            class="editContent">Trang chủ <span class="fa fa-angle-right" aria-hidden="true"></span></a>
                        <p>
                    </li>
                    <li class="active editContent">Dịch vụ</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- breadcrumbs //-->
    <section class="w3l-recent-work-hobbies" id="services">
        <div class="recent-work editContent">
            <div class="container">
                <div class="row about-about">
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone about-line-top">
                        <div class="pet-grid-row">
                            <img src="{{ asset('templates/pet-sitter//images/f5.jpg') }}" alt="product"
                                class="img-responsive about-me">
                            <div class="about-grids editContent">
                                <h5><a href="#page" class="editContent">Dịch vụ tiêm phòng</a></h5>
                                <p class="para editContent">Chất lượng, uy tín, mang lại sự hài lòng cho khách hàng </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone about-line-top">
                        <div class="pet-grid-row">
                            <img src="{{ asset('templates/pet-sitter//images/f4.jpg') }}" alt="product"
                                class="img-responsive about-me">
                            <div class="about-grids editContent">
                                <h5><a href="#page" class="editContent">Chất lượng & Nhiệt tình</a></h5>
                                <p class="para editContent">Chất lượng, uy tín, mang lại sự hài lòng cho khách hàng </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone about-line-top">
                        <div class="pet-grid-row">
                            <img src="{{ asset('templates/pet-sitter//images/f3.jpg') }}" alt="product"
                                class="img-responsive about-me">
                            <div class="about-grids editContent">
                                <h5><a href="#page" class="editContent">Vệ sinh tai</a></h5>
                                <p class="para editContent">Chất lượng, uy tín, mang lại sự hài lòng cho khách hàng </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone about-line-top">
                        <div class="pet-grid-row">
                            <img src="{{ asset('templates/pet-sitter//images/f2.jpg') }}" alt="product"
                                class="img-responsive about-me">
                            <div class="about-grids editContent">
                                <h5><a href="#page" class="editContent">Vệ sinh răng</a></h5>
                                <p class="para editContent">Chất lượng, uy tín, mang lại sự hài lòng cho khách hàng </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone about-line-top">
                        <div class="pet-grid-row">
                            <img src="{{ asset('templates/pet-sitter//images/f6.jpg') }}" alt="product"
                                class="img-responsive about-me">
                            <div class="about-grids editContent">
                                <h5><a href="#page" class="editContent">Trông giữ thú cưng</a></h5>
                                <p class="para editContent">Chất lượng, uy tín, mang lại sự hài lòng cho khách hàng </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone about-line-top">
                        <div class="pet-grid-row">
                            <img src="{{ asset('templates/pet-sitter//images/f1.jpg') }}" alt="product"
                                class="img-responsive about-me">
                            <div class="about-grids editContent">
                                <h5><a href="#page" class="editContent">Huấn luyện chó cảnh</a></h5>
                                <p class="para editContent">Chất lượng, uy tín, mang lại sự hài lòng cho khách hàng </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-services-two" id="services">
        <div class="service-single-page editContent">
            <div class="container">
                <div class=" service-treat">

                    <div class="service-pet">
                        <div class="image-grid">
                            <img src="{{ asset('templates/pet-sitter//images/f6.jpg') }}" alt="product"
                                class="img-responsive about-me">
                        </div>
                        <div class="pet-animals">
                            <h4><a href="#page">Tắm & Cắt tỉa lông</a></h4>
                            <p class="para">Chất lượng, uy tín, mang lại sự hài lòng cho khách hàng</p>
                        </div>
                    </div>
                    <div class="service-pet">
                        <div class="image-grid">
                            <img src="{{ asset('templates/pet-sitter//images/f1.jpg') }}" alt="product"
                                class="img-responsive about-me">
                        </div>
                        <div class="pet-animals">
                            <h4><a href="#page">Phối giống chó</a></h4>
                            <p class="para">Chất lượng, uy tín, mang lại sự hài lòng cho khách hàng</p>
                        </div>
                    </div>
                    <div class="service-pet">
                        <div class="image-grid">
                            <img src="{{ asset('templates/pet-sitter//images/f9.jpg') }}" alt="product"
                                class="img-responsive about-me">
                        </div>
                        <div class="pet-animals">
                            <h4><a href="#page">Tiêm phòng định kỳ</a></h4>
                            <p class="para">Chất lượng, uy tín, mang lại sự hài lòng cho khách hàng</p>
                        </div>
                    </div>
                    <div class="service-pet">
                        <div class="image-grid">
                            <img src="{{ asset('templates/pet-sitter//images/f8.jpg') }}" alt="product"
                                class="img-responsive about-me">
                        </div>
                        <div class="pet-animals">
                            <h4><a href="#page">Chăm sóc tại nhà</a></h4>
                            <p class="para">Chất lượng, uy tín, mang lại sự hài lòng cho khách hàng</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
