@extends('templates.menspa.master')
@section('title', 'Men Spa')
@section('content')
    <!-- banner -->
    <section class="inner-page-banner" id="home">
    </section>
    <!-- //banner -->

    <!-- page details -->
    <div class="breadcrumb-agile">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href={{ route("temp.menspa.index") }}>Trang Chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Bộ Sưu Tập</li>
        </ol>
    </div>
    <!-- //page details -->
    <!--/gallery -->
    <section class="gallery py-5" id="gallery">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Bộ Sưu Tập</h3>
            <div class="gallery-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6 gal-img">
                        <a href="#gal1"><img src={{ asset("templates/menspa/images/g1.jpg") }} alt="aegis" class="img-fluid mt-4"></a>
                    </div>
                    <div class="col-md-4 col-sm-6 gal-img">
                        <a href="#gal2"><img src={{ asset("templates/menspa/images/g2.jpg") }} alt="aegis" class="img-fluid mt-4"></a>
                    </div>
                    <div class="col-md-4 col-sm-6 gal-img">
                        <a href="#gal3"><img src={{ asset("templates/menspa/images/g3.jpg") }} alt="aegis" class="img-fluid mt-4"></a>
                    </div>
                    <div class="col-md-4 col-sm-6 gal-img">
                        <a href="#gal4"><img src={{ asset("templates/menspa/images/g4.jpg") }} alt="aegis" class="img-fluid mt-4"></a>
                    </div>
                    <div class="col-md-4 col-sm-6 gal-img">
                        <a href="#gal5"><img src={{ asset("templates/menspa/images/g5.jpg") }} alt="aegis" class="img-fluid mt-4"></a>
                    </div>
                    <div class="col-md-4 col-sm-6 gal-img">
                        <a href="#gal6"><img src={{ asset("templates/menspa/images/g6.jpg") }} alt="aegis" class="img-fluid mt-4"></a>
                    </div>

                </div>
                <!-- gallery popups -->
                <!-- popup-->
                <div id="gal1" class="popup-effect">
                    <div class="popup">
                        <img src={{ asset("templates/menspa/images/g1.jpg") }} alt="Popup image" class="img-fluid mt-4" />
                        <a class="close" href="#gallery">&times;</a>
                    </div>
                </div>
                <!-- //popup -->
                <!-- popup-->
                <div id="gal2" class="popup-effect">
                    <div class="popup">
                        <img src={{ asset("templates/menspa/images/g2.jpg") }} alt="Popup image" class="img-fluid mt-4" />
                        <a class="close" href="#gallery">&times;</a>
                    </div>
                </div>
                <!-- //popup -->
                <!-- popup-->
                <div id="gal3" class="popup-effect">
                    <div class="popup">
                        <img src={{ asset("templates/menspa/images/g3.jpg") }} alt="Popup image" class="img-fluid mt-4" />
                        <a class="close" href="#gallery">&times;</a>
                    </div>
                </div>
                <!-- //popup -->
                <!-- popup-->
                <div id="gal4" class="popup-effect">
                    <div class="popup">
                        <img src={{ asset("templates/menspa/images/g4.jpg") }} alt="Popup image" class="img-fluid mt-4" />
                        <a class="close" href="#gallery">&times;</a>
                    </div>
                </div>
                <!-- //popup -->

                <!-- popup-->
                <div id="gal5" class="popup-effect">
                    <div class="popup">
                        <img src={{ asset("templates/menspa/images/g5.jpg") }} alt="Popup image" class="img-fluid mt-4" />
                        <a class="close" href="#gallery">&times;</a>
                    </div>
                </div>
                <!-- //popup -->
                <!-- popup-->
                <div id="gal6" class="popup-effect">
                    <div class="popup">
                        <img src={{ asset("templates/menspa/images/g6.jpg") }} alt="Popup image" class="img-fluid mt-4" />
                        <a class="close" href="#gallery">&times;</a>
                    </div>
                </div>
                <!-- //popup -->
                <!-- //gallery popups -->

            </div>
        </div>


    </section>
    <!-- //gallery-->
@endsection
