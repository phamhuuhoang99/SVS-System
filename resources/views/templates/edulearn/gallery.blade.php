@extends('templates.edulearn.master')
@section('title','Edulearn')
@section('content')
    @include('templates.edulearn.banner')
<!-- breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('temp.edulearn.index') }}">Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Bộ sưu tập</li>
    </ol>
</nav>
<!-- breadcrumb -->
<!-- //banner -->

<!-- gallery -->
<section class="gallery py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Bộ
            <span class="font-weight-bold">Sưu Tập</span>
        </h3>
        <div class="inner-sec pt-md-4">
            <div class="row proj_gallery_grid">
                <div class="col-sm-4 section_1_gallery_grid">

                        <div class="section_1_gallery_grid1">
                            <img src="{{ asset('templates/edulearn/images/ab.jpg') }}" alt=" " class="img-fluid" />
                            <div class="proj_gallery_grid1_pos">
                                <h3>Edulearn</h3>
                                <p>Học mọi lúc, mọi nơi</p>
                            </div>
                        </div>

                </div>
                <div class="col-sm-4 section_1_gallery_grid my-sm-0 my-4">

                        <div class="section_1_gallery_grid1">
                            <img src="{{ asset('templates/edulearn/images/n2.jpg') }}" alt=" " class="img-fluid" />
                            <div class="proj_gallery_grid1_pos">
                                <h3>Edulearn</h3>
                                <p>Học mọi lúc, mọi nơi</p>
                            </div>
                        </div>

                </div>
                <div class="col-sm-4 section_1_gallery_grid">

                        <div class="section_1_gallery_grid1">
                            <img src="{{ asset('templates/edulearn/images/n3.jpg') }}" alt=" " class="img-fluid" />
                            <div class="proj_gallery_grid1_pos">
                                <h3>Edulearn</h3>
                                <p>Học mọi lúc, mọi nơi</p>
                            </div>
                        </div>

                </div>
            </div>
            <div class="row proj_gallery_grid mt-4">
                <div class="col-sm-4 section_1_gallery_grid">

                        <div class="section_1_gallery_grid1">
                            <img src="{{ asset('templates/edulearn/images/am1.jpg') }}" alt=" " class="img-fluid" />
                            <div class="proj_gallery_grid1_pos">
                                <h3>Edulearn</h3>
                                <p>Học mọi lúc, mọi nơi</p>
                            </div>
                        </div>

                </div>
                <div class="col-sm-4 section_1_gallery_grid  my-sm-0 my-4">

                        <div class="section_1_gallery_grid1">
                            <img src="{{ asset('templates/edulearn/images/am2.jpg') }}" alt=" " class="img-fluid" />
                            <div class="proj_gallery_grid1_pos">
                                <h3>Edulearn</h3>
                                <p>Học mọi lúc, mọi nơi</p>
                            </div>
                        </div>

                </div>
                <div class="col-sm-4 section_1_gallery_grid">

                        <div class="section_1_gallery_grid1">
                            <img src="{{ asset('templates/edulearn/images/ap-2.jpg') }}" alt=" " class="img-fluid" />
                            <div class="proj_gallery_grid1_pos">
                                <h3>Edulearn</h3>
                                <p>Học mọi lúc, mọi nơi</p>
                            </div>
                        </div>

                </div>
            </div>
            <div class="row proj_gallery_grid mt-4">
                <div class="col-sm-4 section_1_gallery_grid">

                        <div class="section_1_gallery_grid1">
                            <img src="{{ asset('templates/edulearn/images/am4.jpg') }}" alt=" " class="img-fluid" />
                            <div class="proj_gallery_grid1_pos">
                                <h3>Edulearn</h3>
                                <p>Học mọi lúc, mọi nơi</p>
                            </div>
                        </div>

                </div>
                <div class="col-sm-4 section_1_gallery_grid  my-sm-0 my-4">

                        <div class="section_1_gallery_grid1">
                            <img src="{{ asset('templates/edulearn/images/n1.jpg') }}" alt=" " class="img-fluid" />
                            <div class="proj_gallery_grid1_pos">
                                <h3>Edulearn</h3>
                                <p>Học mọi lúc, mọi nơi</p>
                            </div>
                        </div>

                </div>
                <div class="col-sm-4 section_1_gallery_grid">

                        <div class="section_1_gallery_grid1">
                            <img src="{{ asset('templates/edulearn/images/am3.jpg') }}" alt=" " class="img-fluid" />
                            <div class="proj_gallery_grid1_pos">
                                <h3>Edulearn</h3>
                                <p>Học mọi lúc, mọi nơi</p>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--//gallery-->

@endsection