@extends('templates.amenity.master')
@section('title','Amenity')
@section('content')

<!--Breadcrumb-->
<div class="services-breadcrumb">
    <div class="inner_breadcrumb">
        <ul class="short_ls">
            <li>
                <a href={{route("temp.amenity.index") }}>Trang Chủ</a>
                <span>| |</span>
            </li>
            <li>Bộ Sưu Tập</li>
        </ul>
    </div>
</div>
<!--//Breadcrumb-->
<!--Gallery-->
<div class="gallery" id="gallery">
    <div class="container">
        <h3 class="tittle-w3layouts">Bộ Sưu Tập</h3>
        <div class="main_gallery_sctn demo">
            <div class="col-md-4 col-sm-4 col-xs-4 gal-sec">
                <div class="gallery-grid1">
                    <a title="" href={{ URL:: asset("templates/amenity/images/g1.jpg") }}>
                        <img src={{ asset("templates/amenity/images/g1.jpg") }} alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>
                                <span>A</span>menity</h4>
                            <p>Nội Thất</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-grid1">
                    <a title="" href={{ URL:: asset("templates/amenity/images/g2.jpg") }}>
                        <img src={{ asset("templates/amenity/images/g2.jpg") }} alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>
                                <span>A</span>menity</h4>
                            <p>Nội Thất</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-grid1">
                    <a title="" href={{ URL:: asset("templates/amenity/images/g4.jpg") }}>
                        <img src={{ asset("templates/amenity/images/g4.jpg") }} alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>
                                <span>A</span>menity</h4>
                            <p>Nội Thất</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 gal-sec">
                <div class="gallery-grid1">
                    <a title="" href={{ URL:: asset("templates/amenity/images/g3s.jpg") }}>
                        <img src={{ asset("templates/amenity/images/g3.jpg") }} alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>
                                <span>A</span>menity</h4>
                            <p>Nội Thất</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-grid1">
                    <a title="" href={{ URL:: asset("templates/amenity/images/g6.jpg") }}>
                        <img src={{ asset("templates/amenity/images/g6.jpg") }} alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>
                                <span>A</span>menity</h4>
                            <p>Nội Thất</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 gal-sec">
                <div class="gallery-grid1">
                    <a title="" href={{ URL:: asset("templates/amenity/images/g6.jpg") }}>
                        <img src={{ asset("templates/amenity/images/g6.jpg") }} alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>
                                <span>A</span>menity</h4>
                            <p>Nội Thất</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-grid1">
                    <a title="" href={{ URL:: asset("templates/amenity/images/g1.jpg") }}>
                        <img src={{ asset("templates/amenity/images/g1.jpg") }} alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>
                                <span>A</span>menity</h4>
                            <p>Nội Thất</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-grid1">
                    <a title="" href={{ URL:: asset("templates/amenity/images/g7.jpg") }}>
                        <img src={{ asset("templates/amenity/images/g7.jpg") }} alt=" " class="img-responsive" />
                        <div class="p-mask">
                            <h4>
                                <span>A</span>menity</h4>
                            <p>Nội Thất</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//Gallery-->
@endsection