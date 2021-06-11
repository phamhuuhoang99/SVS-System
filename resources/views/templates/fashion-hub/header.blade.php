<header>
    <div class="container">
        <!-- top nav -->
        <nav class="top_nav d-flex pt-3 pb-1">
            <!-- logo -->
            <h1>
                <a class="navbar-brand" href={{ route("temp.fashion-hub.index") }}>fh
                </a>
            </h1>
            <!-- //logo -->
            <div class="w3ls_right_nav ml-auto d-flex">
                <!-- search form -->
                <form class="nav-search form-inline my-0 form-control" >
                    <select class="form-control input-sm" name="category">
                        <option value="all">Tìm Kiếm  . . .</option>
                        <optgroup label="Mens">
                            <option value="Áo thun">Áo Thun</option>
                            <option value="áo khoác & áo jackets">Áo khoác & Áo Jackets</option>
                            <option value="Áo sơ mi">Áo sơ mi</option>
                            <option value="Đồ bộ">Đồ bộ</option>
                            <option value="Áo Jackets">Áo Jackets</option>
                            <option value="Sweat Áo sơ mi">Quần</option>
                        </optgroup>
                        <optgroup label="Womens">
                            <option value="Đầm">Đầm</option>
                            <option value="Áo thun">Áo thun</option>
                            <option value="Váy">Váy</option>
                            <option value="Quần Jeans">Quần Quần Jeans</option>
                            <option value="Áo dài">Áo dài</option>
                        </optgroup>
                        <optgroup label="Girls">
                            <option value="Đầm">Đầm</option>
                            <option value="Áo thun">Áo thun</option>
                            <option value="Váy">Váy</option>
                            <option value="Quần Jeans">Quần Quần Jeans</option>
                            <option value="Tops">Tops</option>
                        </optgroup>
                        <optgroup label="Boys">
                            <option value="Áo thun">Áo thun</option>
                            <option value="áo khoác & áo jackets">Áo khoác & Áo Jackets</option>
                            <option value="Áo sơ mi">Áo sơ mi</option>
                            <option value="Đồ bộ">Đồ bộ</option>
                            <option value="Áo Jackets">Áo Jackets</option>
                            <option value="Sweat Áo sơ mi">Sweat Áo sơ mi</option>
                        </optgroup>
                    </select>
                    <input class="btn btn-outline-secondary  ml-3 my-sm-0" type="submit" value="Tìm kiếm">
                </form>
                <!-- search form -->
                <div class="nav-icon d-flex">
                    <!-- sigin and sign up -->
                    <a class="text-dark login_btn align-self-center mx-3" href="#myModal_btn" data-toggle="modal" data-target="#myModal_btn">
                        <i class="far fa-user"></i>
                    </a>
                    <!-- sigin and sign up -->
                    <!-- shopping cart -->
                    <div class="cart-mainf">
                        <div class="hubcart hubcart2 cart cart box_1">
                            <form action="#">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="display" value="1">
                                <button class="btn top_hub_cart mt-1" type="submit" name="submit" value="" title="Cart">
                                    <i class="fas fa-shopping-bag"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- //shopping cart ends here -->
                </div>
            </div>
        </nav>
        <!-- //top nav -->
        <!-- bottom nav -->
        <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link  active" href={{ route("temp.fashion-hub.index") }}>Trang chủ
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown has-mega-menu" style="position:static;">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Quần áo nam</a>
                        <div class="dropdown-menu" style="width:100%">
                            <div class="px-0 container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Áo thun</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Áo khoác</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Áo sơ mi</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Đồ bộ</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Áo Jackets</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Quần</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Áo thun</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Quần</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Áo sơ mi</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Đồ bộ</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Áo khoác & Áo Jackets</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Áo Jackets</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Áo thun</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Áo khoác</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Áo sơ mi</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Đồ bộ</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Áo Jackets</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.men") }}>Quần</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown has-mega-menu" style="position:static;">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Quần áo nữ</a>
                        <div class="dropdown-menu" style="width:100%">
                            <div class="px-0 container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.women") }}>Đầm</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.women") }}>Áo thun</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.women") }}>Váy</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.women") }}>Quần Jeans</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.women") }}>Áo dài</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.women") }}>Áo thun</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.women") }}>Đầm</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.women") }}>Áo dài</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.women") }}>Váy</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.women") }}>Quần Jeans</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.women") }}>Đầm</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.women") }}>Áo thun</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.women") }}>Váy</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.women") }}>Quần Jeans</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.women") }}>Áo dài</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown has-mega-menu" style="position:static;">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Quần áo trẻ em</a>
                        <div class="dropdown-menu" style="width:100%">
                            <div class="container">
                                <div class="row w3_kids  py-3">
                                    <div class="col-md-3 ">
                                        <span class="bg-light">Bé Nam</span>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.boys") }}>Áo thun</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.boys") }}>Áo ấm</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.boys") }}>Áo sơ mi</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.boys") }}>Đồ bộ</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.boys") }}>Áo Jackets</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.boys") }}>Quần</a>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="dropdown-item mt-4" href={{ route("temp.fashion-hub.boys") }}>Áo thun</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.boys") }}>Áo khoác</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.boys") }}>Áo sơ mi</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.boys") }}>Đồ bộ</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.boys") }}>Áo Jackets</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.boys") }}>Quần</a>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Bé Nữ</span>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.girls") }}>Áo thun</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.girls") }}>Đầm</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.girls") }}>Áo dài</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.girls") }}>Váy</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.girls") }}>Quần Jeans</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.girls") }}>Midi</a>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="dropdown-item  mt-4" href={{ route("temp.fashion-hub.girls") }}>Áo dài</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.girls") }}>Váy</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.girls") }}>Áo thun</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.girls") }}>Đầm</a>
                                        <a class="dropdown-item" href={{ route("temp.fashion-hub.girls") }}>Quần Jeans</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route("temp.fashion-hub.about") }}>Về SVS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route("temp.fashion-hub.contact") }}>Liên hệ</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- //bottom nav -->
    </div>
    <!-- //header container -->
</header>