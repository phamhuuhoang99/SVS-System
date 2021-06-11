<section

    @if ($check)
        class="banner"
    @else
        class="banner-inner"
    @endif

    id="home">
    <!-- header -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <h1>
                    <a class="navbar-brand" href={{ route("temp.inwardly.index") }}>
                        <span class="fab fa-osi"></span> Inwardly
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active cool">
                            <a class="nav-link" href={{ route("temp.inwardly.index") }}>Trang Chủ
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item cool">
                            <a class="nav-link" href={{ route("temp.inwardly.about") }}>Về SVS</a>
                        </li>
                        <li class="nav-item cool">
                            <a class="nav-link" href={{ route("temp.inwardly.services") }}>Dịch Vụ</a>
                        </li>
                        <li class="nav-item cool">
                            <a class="nav-link" href={{ route("temp.inwardly.gallery") }}>Bộ Sưu Tập</a>
                        </li>
                        <li class="nav-item dropdown cool">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Blog
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href={{ route("temp.inwardly.blog") }}>Trang Blog</a>
                                <a class="dropdown-item" href={{ route("temp.inwardly.single") }}>Sản Phẩm</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href={{ route("temp.inwardly.404") }}>404</a>
                            </div>
                        </li>

                        <li class="nav-item cool">
                            <a class="nav-link" href={{ route("temp.inwardly.contact") }}>Liên Hệ</a>
                        </li>
                        <!-- /search -->
                        <li class="search">
                            <div class="cd-main-header">
                                <ul class="cd-header">
                                    <li>
                                        <a class="cd-search-trigger" href="#">
                                            <span></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="cd-search" class="cd-search">
                                <form>
                                    <input name="Search" type="search" placeholder="Bấm enter để  tìm kiếm ...">
                                </form>
                            </div>
                        </li>

                        <!-- /search -->
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- //header -->

    @if ($check)
        @include('templates.inwardly.banner');
    @else
        <div class="bs-slider-overlay-inner">
        </div>
    @endif
    </div>
</section>
