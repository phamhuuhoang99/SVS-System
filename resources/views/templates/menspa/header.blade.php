<header>
    <div class="container">
        <div class="header d-lg-flex justify-content-between align-items-center">
            <div class="header-agile">
                <h1>
                    <a class="navbar-brand logo" href={{ route('temp.menspa.index') }}>
                        <span class="fa fa-scissors" aria-hidden="true"></span> Men spa <span class="fa fa-user-secret"
                            aria-hidden="true"></span>
                    </a>
                </h1>
            </div>
            <div class="nav_w3ls">
                <nav>
                    <label for="drop" class="toggle mt-lg-0 mt-1"><span class="fa fa-bars"
                            aria-hidden="true"></span></label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li class="mr-lg-3 mr-2 active"><a href={{ route('temp.menspa.index') }}>Trang Chủ</a></li>
                        <li class="mr-lg-3 mr-2"><a href={{ route('temp.menspa.about') }}>Về SVS </a></li>
                        <li class="mr-lg-3 mr-2 p-0">
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Xem <span class="fa fa-angle-down"
                                    aria-hidden="true"></span> </label>
                            <a href="#">Xem thêm <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul class="inner-dropdown">
                                <li><a href={{ route('temp.menspa.services') }}>Dịch Vụ</a></li>
                                <li><a href={{ route('temp.menspa.single') }}>Sản Phẩm</a></li>
                            </ul>
                        </li>
                        <li class="mr-lg-3 mr-2"><a href={{ route('temp.menspa.gallery') }}>Bộ sưu tập</a></li>
                        <li class="mr-lg-3 mr-2"><a href={{ route('temp.menspa.contact') }}>Liên hệ</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>
