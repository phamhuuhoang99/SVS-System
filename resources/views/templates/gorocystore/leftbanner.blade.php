<div class="w3l_banner_nav_left">
    <nav class="navbar nav_bottom">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav nav_1">
                <li><a href="{{ route('temp.gorocystore.products') }}">Thực phẩm thương hiệu</a></li>
                <li><a href="{{ route('temp.gorocystore.household') }}">Hộ gia đình</a></li>
                <li class="dropdown mega-dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rau và trái cây<span class="caret"></span></a>
                    <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                        <div class="w3ls_vegetables">
                            <ul>
                                <li><a href="{{ route('temp.gorocystore.vegetables') }}">Rau</a></li>
                                <li><a href="{{ route('temp.gorocystore.vegetables') }}">Trái cây</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="{{ route('temp.gorocystore.kitchen') }}">Nhà bếp</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Đồ uống<span class="caret"></span></a>
                    <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                        <div class="w3ls_vegetables">
                            <ul>
                                <li><a href="{{ route('temp.gorocystore.drinks') }}">Nước ngọt</a></li>
                                <li><a href="{{ route('temp.gorocystore.drinks') }}">Nước ép</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="{{ route('temp.gorocystore.pet') }}">Thức ăn cho thú cưng</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thực phẩm đông lạnh<span class="caret"></span></a>
                    <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                        <div class="w3ls_vegetables">
                            <ul>
                                <li><a href="{{ route('temp.gorocystore.frozen') }}"></a>Snack đông lạnh</li>
                                <li><a href="{{ route('temp.gorocystore.frozen') }}">Nonveg đông lạnh</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="{{ route('temp.gorocystore.bread') }}">Tiệm bánh mì</a></li>
            </ul>
        </div>
    </nav>
</div>