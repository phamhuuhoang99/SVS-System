<div @if (!$check) class="banner-w3-agileits-slider inner-banner-w3-agileits"
@else class="banner-w3-agileits-slider" @endif>
    <div class="overlay overlay-contentpush">
        <button type="button" class="overlay-close">
            <i class="fa fa-times" aria-hidden="true"></i>
        </button>
        <nav>
            <ul>
                <li>
                    <a href={{route("temp.amenity.index") }}>Trang Chủ</a>
                </li>
                <li>
                    <a href={{route("temp.amenity.about") }}>Về SVS</a>
                </li>
                <li>
                    <a href={{route("temp.amenity.services") }}>Dịch Vụ</a>
                </li>
                <li>
                    <a href={{route("temp.amenity.blog") }}>Blog</a>
                </li>
                <li>
                    <a href={{route("temp.amenity.gallery") }}>Bộ Sưu Tập</a>
                </li>
                <li>
                    <a href={{route("temp.amenity.contact") }}>Liên Hệ</a>
                </li>
            </ul>
        </nav>
    </div>
    <section class="header-w3layouts-top">
        <button id="trigger-overlay" type="button">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <h1>
            <a href={{route("temp.amenity.index") }}>
                <span>A</span>menity</a>
        </h1>
    </section>
    <div class="clearfix"></div>

    @if ($text!=null)
        <h6 class="inner-title">{{$text}}</h6>
    @endif

</div>
