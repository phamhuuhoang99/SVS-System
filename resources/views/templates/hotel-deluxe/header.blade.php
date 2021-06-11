<div class="header">
    <div class="col-sm-8 header-left">
        <div class="logo">
            <a href={{ URL::route("temp.hotel-deluxe.index") }}>
                <img src={{ URL::asset("templates/hotel-deluxe/images/logo.png") }} alt="" />
            </a>
        </div>
        <div class="menu">
            <a class="toggleMenu" href="#"><img src={{ URL::asset("templates/hotel-deluxe/images/nav.png") }} alt="" /></a>
            <ul class="nav" id="nav">
                <li><a href={{ URL::route("temp.hotel-deluxe.index") }}>Trang chủ</a></li>
                <li><a href={{ URL::route("temp.hotel-deluxe.rooms") }}>Phòng</a></li>
                <li><a href={{ URL::route("temp.hotel-deluxe.news") }}>Tin tức</a></li>
                <li><a href={{ URL::route("temp.hotel-deluxe.gallery") }}>Thư viện</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <!-- start search-->
        <div class="search-box">
            <div id="sb-search" class="sb-search">
                <form>
                    <input class="sb-search-input" placeholder="Nhập thông tin tìm kiếm..." type="search"
                        name="search" id="search">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"> </span>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="col-sm-4 header_right">
        <div id="loginContainer">
            <a href="#" id="loginButton">
                <img src={{ URL::asset("templates/hotel-deluxe/images/login.png") }}>
                <span>Đăng nhập</span>
            </a>
            <div id="loginBox">
                <form id="loginForm">
                    <fieldset id="body">
                        <fieldset>
                            <label for="email">Địa chỉ Email</label>
                            <input type="text" name="email" id="email">
                        </fieldset>
                        <fieldset>
                            <label for="password">Mật khẩu</label>
                            <input type="password" name="password" id="password">
                        </fieldset>
                        <input type="submit" id="login" value="Đăng nhập">
                        <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Ghi nhớ</i></label>
                    </fieldset>
                    <span><a href="#">Quên mật khẩu?</a></span>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>