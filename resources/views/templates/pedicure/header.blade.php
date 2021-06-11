@if (Route::currentRouteName() == 'temp.pedicure.index')
    <div id="demo-1"
        data-zs-src='["{{ asset('templates/pedicure/images/b3.jpg') }}", "{{ asset('templates/pedicure/images/b2.jpg') }}", "{{ asset('templates/pedicure/images/b1.jpg') }}"]'
        data-zs-overlay="dots">
        <div class="demo-inner-content">
            <!--/banner-info-->
            @include('templates.pedicure.bannerinfo')
            <div class="w3-banner-head-info">
                <div class="container">
                    <div class="banner-text">
                        <h2>Chăm sóc móng
                            <span>Nail xinh trong veo</span></h2>
                    </div>
                </div>
            </div>
            <!--/banner-info-->
        </div>
    </div>
@else
    <div class="baner">
        @include('templates.pedicure.bannerinfo')
    </div>
@endif
