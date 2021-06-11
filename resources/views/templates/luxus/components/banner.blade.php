<!-- banner -->
<div class="banner">
    <div class="logo">
        <h1><a href={{ URL::route("temp.luxus.index") }}>LUXUS</a></h1>
    </div>
    <div class="search-in">
        <div class="search" style="display: none;">
            <form>
                <input type="text" class="text">
                <input type="submit" value="SEARCH">
            </form>
            <div class="close-in">
                <img src={{ URL::asset("templates/luxus/images/close.png") }} alt="">
            </div>
        </div>
        <div class="right"><button> </button></div>
    </div>

    <div class="banner-info">
        <div id="top" class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="banner-text">
                        <h3>CHÀO MỪNG ĐẾN VỚI LUXUS</h3>
                        <h4>THIÊN ĐƯỜNG NỘI THẤT DÀNH CHO BẠN</h4>
                    </div>
                </li>
                <li>
                    <div class="banner-text">
                        <h3>CHÀO MỪNG ĐẾN VỚI LUXUS</h3>
                        <h4>CUNG CẤP CHO BẠN NHỮNG THIẾT KẾ HOÀN MỸ NHẤT</h4>
                    </div>
                </li>
                <li>
                    <div class="banner-text">
                        <h3>CHÀO MỪNG ĐẾN VỚI LUXUS</h3>
                        <h4>MANG ĐẬM NÉT ĐẸP VÀ PHONG CÁCH CHÂU ÂU</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="scroll-button text-center"><a href="#hello" class="scroll">
        <img src={{ URL::asset("templates/luxus/images/arr1.png") }} alt="" /></a>
    </div>
</div>
<!-- //banner -->

<!-- banner-bottom -->
<div id="hello" class="banner-bottom">
    <div class="container">
        <div class="btm-header">
            <h3 class="tittle">XIN CHÀO!</h3>
            <p>
                Ra đời từ ý tưởng tạo nên sự khác biệt, Luxus đã giữ vững và phát triển trở thành vị trí
                hàng đầu trong thị trường nội thất Việt Nam. Đến nay, Nhà Xinh đã có nhiều cửa hàng quy mô
                và chuyên nghiệp tại 2 thành phố lớn là Hà Nội và TP.HCM.
            </p>
        </div>
        <div class="bottom-grids">
            <div class="col-md-6 bottom-grid">
                <div class="btm-left">
                    <img src={{ URL::asset("templates/luxus/images/aaa.png") }} alt="" />
                </div>
                <div class="btm-right">
                    <h4>Phong cách hiện đại</h4>
                    <p>
                        Sản phảm của chúng tôi mang đẹp nét đẹp và màu sắc văn hóa của Châu Âu,
                        đem lại cho bạn những trải nghiệm tuyệt vời.
                    </p>
                    <div class="captn"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 bottom-grid">
                <div class="btm-left">
                    <img src={{ URL::asset("templates/luxus/images/bbb.png") }} alt="" />
                </div>
                <div class="btm-right">
                    <h4>Nét đẹp cổ điển</h4>
                    <p>
                        Trộn lại với 1 chút cổ điển nhẹ nhàng, mang đến sự ấm cúng và quý phái
                        cho ngôi nhà của bạn, gắn kết gia đình với nhau
                    </p>
                    <div class="captn"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //banner-bottom -->