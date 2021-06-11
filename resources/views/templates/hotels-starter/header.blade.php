<header class="w3l-header-nav">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        <div class="container">
            <a class="navbar-brand" href={{ URL::route("temp.hotels-starter.index") }}>
                <img src={{ URL::asset("templates/hotels-starter/images/hotels.png") }} alt="Your logo" style="height:35px;" /> Hotels</a>
            <!-- if logo is image enable this -->
                {{--  <a class="navbar-brand" href="#index.html">
                    <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                </a>   --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href={{ URL::route("temp.hotels-starter.index") }}>Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ URL::route("temp.hotels-starter.about") }}>Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ URL::route("temp.hotels-starter.services") }}>Dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ URL::route("temp.hotels-starter.contact") }}>Liên hệ</a>
                    </li>
                </ul>
                <a href="#booking" class="ml-3 book btn btn-secondary btn-style">Đặt ngay</a>
            </div>
        </div>
    </nav>
    <!--//nav-->
</header>