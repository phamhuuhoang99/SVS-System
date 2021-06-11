@extends('templates.dental-health.master')
@section('title', 'Dental Health')
@section('content')
    <!-- banner -->
    <div class="innerpage-banner" id="home">
        <div class="inner-page-layer">
        </div>
    </div>
    <!-- //banner -->

    <!-- gallery -->
    <section class="gallery py-5" id="gallery">
        <div class="container py-lg-5">
            <h2 class="heading text-center mb-sm-5 mb-4">Bộ Sưu Tập</h2>
            <div class="row news-grids text-center">
                <div class="col-md-3 col-6 gal-img">
                    <a href="#gal1"><img src="{{ asset('templates/detal-health/images/gallery1.jpg') }}"
                            alt="portfolio image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 col-6 gal-img">
                    <a href="#gal2"><img src="{{ asset('templates/detal-health/images/gallery2.jpg') }}"
                            alt="portfolio image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 col-6 gal-img">
                    <a href="#gal3"><img src="{{ asset('templates/detal-health/images/gallery3.jpg') }}"
                            alt="portfolio image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 col-6 gal-img">
                    <a href="#gal4"><img src="{{ asset('templates/detal-health/images/gallery4.jpg') }}"
                            alt="portfolio image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 col-6 gal-img">
                    <a href="#gal5"><img src="{{ asset('templates/detal-health/images/gallery5.jpg') }}"
                            alt="portfolio image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 col-6 gal-img">
                    <a href="#gal6"><img src="{{ asset('templates/detal-health/images/gallery6.jpg') }}"
                            alt="portfolio image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 col-6 gal-img">
                    <a href="#gal1"><img src="{{ asset('templates/detal-health/images/gallery1.jpg') }}"
                            alt="portfolio image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 col-6 gal-img">
                    <a href="#gal2"><img src="{{ asset('templates/detal-health/images/gallery2.jpg') }}"
                            alt="portfolio image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 col-6 gal-img">
                    <a href="#gal3"><img src="{{ asset('templates/detal-health/images/gallery3.jpg') }}"
                            alt="portfolio image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 col-6 gal-img">
                    <a href="#gal4"><img src="{{ asset('templates/detal-health/images/gallery4.jpg') }}"
                            alt="portfolio image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 col-6 gal-img">
                    <a href="#gal5"><img src="{{ asset('templates/detal-health/images/gallery5.jpg') }}"
                            alt="portfolio image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 col-6 gal-img">
                    <a href="#gal6"><img src="{{ asset('templates/detal-health/images/gallery6.jpg') }}"
                            alt="portfolio image" class="img-fluid"></a>
                </div>
            </div>

            <!-- popup1 -->
            <div id="gal1" class="pop-overlay">
                <div class="popup">
                    <img src="{{ asset('templates/detal-health/images/gallery1.jpg') }}" alt="Popup Image"
                        class="img-fluid" />
                    <p class="mt-4">Sứ mệnh của chúng tôi là cung cấp dịch vụ chăm sóc răng miệng chất lượng cao, vượt trên
                        nhu cầu và mong đợi của khách hàng, với mức chi phí dịch vụ hợp lý nhất.
                    </p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup1 -->
            <!-- popup2 -->
            <div id="gal2" class="pop-overlay">
                <div class="popup">
                    <img src="{{ asset('templates/detal-health/images/gallery2.jpg') }}" alt="Popup Image"
                        class="img-fluid" />
                    <p class="mt-4">Sứ mệnh của chúng tôi là cung cấp dịch vụ chăm sóc răng miệng chất lượng cao, vượt trên
                        nhu cầu và mong đợi của khách hàng, với mức chi phí dịch vụ hợp lý nhất.
                    </p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup2 -->
            <!-- popup3 -->
            <div id="gal3" class="pop-overlay">
                <div class="popup">
                    <img src="{{ asset('templates/detal-health/images/gallery3.jpg') }}" alt="Popup Image"
                        class="img-fluid" />
                    <p class="mt-4">Sứ mệnh của chúng tôi là cung cấp dịch vụ chăm sóc răng miệng chất lượng cao, vượt trên
                        nhu cầu và mong đợi của khách hàng, với mức chi phí dịch vụ hợp lý nhất.
                    </p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup3 -->
            <!-- popup4 -->
            <div id="gal4" class="pop-overlay">
                <div class="popup">
                    <img src="{{ asset('templates/detal-health/images/gallery4.jpg') }}" alt="Popup Image"
                        class="img-fluid" />
                    <p class="mt-4">Sứ mệnh của chúng tôi là cung cấp dịch vụ chăm sóc răng miệng chất lượng cao, vượt trên
                        nhu cầu và mong đợi của khách hàng, với mức chi phí dịch vụ hợp lý nhất.
                    </p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup4 -->
            <!-- popup5 -->
            <div id="gal5" class="pop-overlay">
                <div class="popup">
                    <img src="{{ asset('templates/detal-health/images/gallery5.jpg') }}" alt="Popup Image"
                        class="img-fluid" />
                    <p class="mt-4">Sứ mệnh của chúng tôi là cung cấp dịch vụ chăm sóc răng miệng chất lượng cao, vượt trên
                        nhu cầu và mong đợi của khách hàng, với mức chi phí dịch vụ hợp lý nhất.
                    </p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup5 -->
            <!-- popup6 -->
            <div id="gal6" class="pop-overlay">
                <div class="popup">
                    <img src="{{ asset('templates/detal-health/images/gallery6.jpg') }}" alt="Popup Image"
                        class="img-fluid" />
                    <p class="mt-4">Sứ mệnh của chúng tôi là cung cấp dịch vụ chăm sóc răng miệng chất lượng cao, vượt trên
                        nhu cầu và mong đợi của khách hàng, với mức chi phí dịch vụ hợp lý nhất.
                    </p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup6 -->

        </div>
    </section>
    <!-- //gallery -->

    @include('templates.dental-health.appointment')
@endsection
