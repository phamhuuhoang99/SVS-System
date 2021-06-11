<div class="header_agileits">
    <div class="logo">
        <h1><a class="navbar-brand" href={{ route("temp.downyshoes.index") }}><span>Downy</span><i>Shoes</i></a></h1>
    </div>
    <div class="overlay overlay-contentpush">
        <button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>
        <nav>
            <ul>
                <li><a href={{ route("temp.downyshoes.index") }} class="active">Trang Chủ</a></li>
                <li><a href={{ route("temp.downyshoes.about") }}>Về SVS</a></li>
                <li><a href={{ route("temp.downyshoes.404") }}>Đội Ngũ</a></li>
                <li><a href={{ route("temp.downyshoes.shop") }}>Mua Ngay</a></li>
                <li><a href={{ route("temp.downyshoes.contact") }}>Liên hệ</a></li>
            </ul>
        </nav>
    </div>
    <div class="mobile-nav-button">
        <button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
    </div>
    <!-- cart details -->
    <div class="top_nav_right">
        <div class="shoecart shoecart2 cart cart box_1">
            <form class="last">
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="display" value="1">
                <button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
            </form>
        </div>

    </div>
    <!-- //cart details -->
    <!-- search -->
    <div class="search_w3ls_agileinfo">
        <div class="cd-main-header">
            <ul class="cd-header-buttons">
                <li>
                    <a class="cd-search-trigger" href="#cd-search"> <span></span></a>
                </li>
            </ul>
        </div>
        <div id="cd-search" class="cd-search">
            <form>
                <input name="Search" type="search" placeholder="Tìm kiếm...">
            </form>
        </div>
    </div>
    <!-- //search -->

    <div class="clearfix"></div>
</div>