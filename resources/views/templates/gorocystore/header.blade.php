<div class="agileits_header">
    <div class="w3l_offers">
        <a href="{{ route('temp.gorocystore.products') }}">Hôm nay có ưu đãi đặc biệt !</a>
    </div>
    <div class="w3l_search">
        <form>
            <input type="text" name="Product" value="Tìm kiếm sản phẩm..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tìm kiếm sản phẩm...';}" required="">
            <input type="submit" value=" ">
        </form>
    </div>
    <div class="product_list_header">
        <form action="#" method="post" class="last">
            <fieldset>
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="display" value="1" />
                <input type="submit" name="submit" value="Xem giỏ hàng" class="button" />
            </fieldset>
        </form>
    </div>
    <div class="w3l_header_right">
        <ul>
            <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
                <div class="mega-dropdown-menu">
                    <div class="w3ls_vegetables">
                        <ul class="dropdown-menu drp-mnu">
                            <li><a href="{{ route('temp.gorocystore.login') }}">Đăng nhập</a></li>
                            <li><a href="{{ route('temp.gorocystore.login') }}">Đăng ký</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- script-for sticky-nav -->
<script>
    $(document).ready(function() {
        var navoffeset = $(".agileits_header").offset().top;
        $(window).scroll(function() {
            var scrollpos = $(window).scrollTop();
            if (scrollpos >= navoffeset) {
                $(".agileits_header").addClass("fixed");
            } else {
                $(".agileits_header").removeClass("fixed");
            }
        });
    });
</script>
<!-- //script-for sticky-nav -->
<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left">
            <h1><a href="{{ route('temp.gorocystore.index') }}"><span>Grocery</span> Store</a></h1>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="special_items">
                <li><a href="{{ route('temp.gorocystore.events') }}">Sự kiện</a><i>/</i></li>
                <li><a href="{{ route('temp.gorocystore.about') }}">Về SVS</a><i>/</i></li>
                <li><a href="{{ route('temp.gorocystore.products') }}">Ưu đãi tốt nhất</a><i>/</i></li>
                <li><a href="{{ route('temp.gorocystore.services') }}">Dịch vụ</a></li>
            </ul>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="phone_email">
                <li><i class="fa fa-phone" aria-hidden="true"></i>035 618 5047</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:smartvietsolution@gmail.com">smartvietsolution@gmail.com</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>