<!-- banner -->
<div class="main-banner-2">

</div>
<!-- //banner -->

<!-- page details -->
<div class="breadcrumb-agile bg-light py-2">
    <ol class="breadcrumb bg-light m-0">
        <li class="breadcrumb-item">
            <a href={{ URL::route("temp.tasty-burger.index") }}>Trang chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Về chúng tôi</li>
    </ol>
</div>
<!-- //page details -->

<!-- about -->
<section class="w3ls-bnrbtm py-5" id="about">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-section text-center mb-md-5 mb-4">
            <h3 class="w3ls-title mb-3">Về <span>chúng tôi</span></h3>
        </div>
        <div class="row">
            <div class="col-lg-6 pr-xl-5 mt-xl-2 mt-lg-0">
                <h3 class="title-sub mb-4">Đội ngũ đầu bếp kì cựu</h3>
                <p class="sub-para">
                    Với kinh nghiệm lâu năm trong nghề và đã đạt được nhiều giải thưởng trong các cuộc thi
                    làm bánh, chúng tôi đảm bảo sẽ mang đến cho bạn những sản phẩm tốt nhất
                </p>
                <p class="sub-para pt-4 mt-4 border-top">
                    "niềm hạnh phúc của khách hàng chính là động lực to lớn nhất của chúng tôi" -- Bếp trưởng
                </p>
            </div>
            <div class="col-lg-6 text-center mt-lg-0 mt-4">
                <img src={{ URL::asset("templates/tasty-burger/images/ab.jpg") }} alt="about" class="img-fluid" />
            </div>
        </div>
    </div>
</section>
<!-- //about -->