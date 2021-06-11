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
            <li class="breadcrumb-item active" aria-current="page">Dịch Vụ</li>
        </ol>
    </div>
    <!-- //page details -->
    <!-- what we do -->
    <section class="what-we-do py-5">
        <div class="container py-md-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Dịch Vụ</h3>
            <div class="row what-we-do-grid">
                <div class="col-lg-3 col-md-6 pr-0 pl-md-3 pl-0">
                    <img src={{ asset("templates/menspa/images/sp1.jpg") }} class="img-fluid" alt="" />
                </div>
                <div class="col-lg-3 col-md-6 bg-grid-clr">
                    <h4 class="mt-md-0 my-2">Cắt tóc</h4>
                    <p class="">Xu hướng thời tran nam hot nhất hè 2020.</p>
                </div>
                <div class="col-lg-3 col-md-6 pr-0 pl-md-3 pl-0 mt-lg-0 mt-4">
                    <img src={{ asset("templates/menspa/images/sp2.jpg") }} class="img-fluid" alt="" />
                </div>
                <div class="col-lg-3 col-md-6 bg-grid-clr mt-lg-0 mt-md-4">
                    <h4 class="mt-md-0 my-2">SHAVES</h4>
                    <p class="">Xu hướng thời tran nam hot nhất hè 2020.</p>
                </div>

                <div class="col-lg-3 col-md-6 pr-0 pl-md-3 pl-0 mt-lg-5 mt-4">
                    <img src={{ asset("templates/menspa/images/sp3.jpg") }} class="img-fluid" alt="" />
                </div>
                <div class="col-lg-3 col-md-6 bg-grid-clr mt-lg-5 mt-md-4">
                    <h4 class="mt-md-0 my-2">Cạo Râu</h4>
                    <p class="">Xu hướng thời tran nam hot nhất hè 2020.</p>
                </div>
                <div class="col-lg-3 col-md-6 pr-0 pl-md-3 pl-0 mt-lg-5 mt-4">
                    <img src={{ asset("templates/menspa/images/sp4.jpg") }} class="img-fluid" alt="" />
                </div>
                <div class="col-lg-3 col-md-6 bg-grid-clr mt-lg-5 mt-md-4">
                    <h4 class="mt-md-0 my-2">Cắt ria mép</h4>
                    <p class="">Xu hướng thời tran nam hot nhất hè 2020.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- //what we do -->

    <!--/testimonials-->
    @include('templates.menspa.review')

    <!--//testimonials-->
@endsection
