<div class="tainers-section">
    <div class="container">
        <!--sreen-gallery-cursual-->
        <div class="col-md-3 tainer wow bounceInLeft" data-wow-delay="0.4s">
            <h3>ĐỘI NGŨ Trainers</h3>
            <p>Còn lý do gì bạn không tham gia</p>
        </div>
        <div class="col-md-9 sreen-gallery-cursual wow bounceInRight" data-wow-delay="0.4s">
            <!-- start content_slider -->
            <div id="owl-demo" class="owl-carousel">
                <div class="item">
                    <div class="item-grid">
                        <div class="item-pic">
                            <img src="{{ asset('templates/fit-pro/images/t1.jpg') }}" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-grid">
                        <div class="item-pic">
                            <img src="{{ asset('templates/fit-pro/images/t2.jpg') }}" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-grid">
                        <div class="item-pic">
                            <img src="{{ asset('templates/fit-pro/images/t3.jpg') }}" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-grid">
                        <div class="item-pic">
                            <img src="{{ asset('templates/fit-pro/images/t1.jpg') }}" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-grid">
                        <div class="item-pic">
                            <img src="{{ asset('templates/fit-pro/images/t2.jpg') }}" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-grid">
                        <div class="item-pic">
                            <img src="{{ asset('templates/fit-pro/images/t3.jpg') }}" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-grid">
                        <div class="item-pic">
                            <img src="{{ asset('templates/fit-pro/images/t1.jpg') }}" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-grid">
                        <div class="item-pic">
                            <img src="{{ asset('templates/fit-pro/images/t2.jpg') }}" />
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-grid">
                        <div class="item-pic">
                            <img src="{{ asset('templates/fit-pro/images/t3.jpg') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!--//sreen-gallery-cursual-->
    </div>
</div>
<!-- requried-jsfiles-for owl -->
<link href="{{asset('templates/fit-pro/css/owl.carousel.css') }}" rel="stylesheet">
<script src="{{asset('templates/fit-pro/js/owl.carousel.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            items: 3,
            lazyLoad: true,
            autoPlay: true,
            navigation: true,
            navigationText: false,
            pagination: false,
        });
    });

</script>

<!-- //requried-jsfiles-for owl -->