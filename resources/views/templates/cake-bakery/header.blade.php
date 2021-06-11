<!-- header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="logo text-left">
            <h1>
                <a class="navbar-brand" href={{ URL::route("temp.cake-bakery.index") }}>
                    <img src={{ URL::asset("templates/cake-bakery/images/logo.png") }} alt="" class="img-fluid">
                    Cakes Bakery
                </a>
            </h1>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">

            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto text-lg-right text-center">
                <li class="nav-item">
                    <a class="nav-link" href={{ URL::route("temp.cake-bakery.index") }}>Trang chủ
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ URL::route("temp.cake-bakery.about") }}>Về chúng tôi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Mục lục
                    </a>
                    <div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item scroll" href="#services">Dịch vụ</a>
                        <a class="dropdown-item scroll" href="#products" title="">Sản phẩm mới</a>
                        <a class="dropdown-item scroll" href="#news" title="">Tin tức</a>
                        <a class="dropdown-item" href={{ URL::route("temp.cake-bakery.about") }} title="">Đội ngũ</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ URL::route("temp.cake-bakery.gallery") }}>Thư viện</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ URL::route("temp.cake-bakery.contact") }}>Liên hệ</a>
                </li>
            </ul>
            <!-- menu button -->
            <div class="menu">
                <a href="#" class="navicon"></a>
                <div class="toggle">
                    <ul class="toggle-menu list-unstyled">
                        <li>
                            <a href={{ URL::route("temp.cake-bakery.index") }}>Trang chủ</a>
                        </li>
                        <li>
                            <a class="scroll" href="#products">Sản phẩm mới</a>
                        </li>
                        <li>
                            <a href={{ URL::route("temp.cake-bakery.gallery") }}>Thư viện ảnh</a>
                        </li>
                        <li>
                            <a class="scroll" href="#order">Đặt hàng</a>
                        </li>
                        <li>
                            <a class="scroll" href="#faqs">Hỗ trợ</a>
                        </li>
                        <li>
                            <a href={{ URL::route("temp.cake-bakery.contact") }}>Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- //menu button -->
        </div>
    </nav>
</header>
<!-- //header -->