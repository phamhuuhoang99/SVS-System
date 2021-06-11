@extends('templates.hairsalon.master')
@section('title', 'Hair Salon')
@section('content')
<!-- breadcrumb -->
<div class="w3_breadcrumb">
    <div class="breadcrumb-inner">
        <ul>
            <li><a href={{ route("temp.hairsalon.index") }}>Trang Chủ</a> <i>//</i></li>
            <li>Bộ Sưu Tập</li>
        </ul>
    </div>
</div>
<!-- //breadcrumb -->
<!--/content-inner-section-->
<div class="w3_content_agilleinfo_inner">
    <div class="container">
        <div class="title-agileits">
            <h2 class="w3l-agile">Bộ Sưu Tập</h2>
        </div>
        <div class="gallery-grids">
            <div class="col-md-4 gallery-grid">
                <div class="grid">
                    <figure class="effect-apollo">
                        <a class="example-image-link" href={{ asset("templates/hairsalon/images/g8.jpg") }} data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
                            <img src={{ asset("templates/hairsalon/images/g8.jpg") }} alt="" />
                            <figcaption>
                                <p>Hair Salon</p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="grid">
                    <figure class="effect-apollo">
                        <a class="example-image-link" href={{ asset("templates/hairsalon/images/g2.jpg") }} data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
                            <img src={{ asset("templates/hairsalon/images/g2.jpg") }} alt="" />
                            <figcaption>
                                <p>Hair Salon</p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="grid">
                    <figure class="effect-apollo">
                        <a class="example-image-link" href={{ asset("templates/hairsalon/images/g7.jpg") }} data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
                            <img src={{ asset("templates/hairsalon/images/g7.jpg") }} alt="" />
                            <figcaption>
                                <p>Hair Salon</p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="grid">
                    <figure class="effect-apollo">
                        <a class="example-image-link" href={{ asset("templates/hairsalon/images/g4.jpg") }} data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
                            <img src={{ asset("templates/hairsalon/images/g4.jpg") }} alt="" />
                            <figcaption>
                                <p>Hair Salon</p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="grid">
                    <figure class="effect-apollo">
                        <a class="example-image-link" href={{ asset("templates/hairsalon/images/g5.jpg") }} data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
                            <img src={{ asset("templates/hairsalon/images/g5.jpg") }} alt="" />
                            <figcaption>
                                <p>Hair Salon</p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="grid">
                    <figure class="effect-apollo">
                        <a class="example-image-link" href={{ asset("templates/hairsalon/images/g6.jpg") }} data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
                            <img src={{ asset("templates/hairsalon/images/g6.jpg") }} alt="" />
                            <figcaption>
                                <p>Hair Salon</p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="grid">
                    <figure class="effect-apollo">
                        <a class="example-image-link" href={{ asset("templates/hairsalon/images/g7.jpg") }} data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
                            <img src={{ asset("templates/hairsalon/images/g7.jpg") }} alt="" />
                            <figcaption>
                                <p>Hair Salon</p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="grid">
                    <figure class="effect-apollo">
                        <a class="example-image-link" href={{ asset("templates/hairsalon/images/g2.jpg") }} data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
                            <img src={{ asset("templates/hairsalon/images/g2.jpg") }} alt="" />
                            <figcaption>
                                <p>Hair Salon</p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 gallery-grid">
                <div class="grid">
                    <figure class="effect-apollo">
                        <a class="example-image-link" href={{ asset("templates/hairsalon/images/g3.jpg") }} data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sem ac lectus mattis sagittis. Donec pulvinar quam sit amet est vestibulum volutpat. Phasellus sed nibh odio. Phasellus posuere at purus sit amet porttitor. Cras euismod egestas enim eget molestie. Aenean ornare condimentum odio, in lacinia felis finibus non. Nam faucibus libero et lectus finibus, sed porttitor velit pellentesque.">
                            <img src={{ asset("templates/hairsalon/images/g3.jpg") }} alt="" />
                            <figcaption>
                                <p>Hair Salon</p>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            </div>
            <div class="clearfix"> </div>

        </div>

    </div>
</div>
@endsection