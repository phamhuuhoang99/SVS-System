@extends('templates.befit.master')
@section('title', 'Befit')
@section('content')
    <!-- page details -->
    <div class="breadcrumb-agile">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ asset('temp.befit.index') }}">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Bộ sưu tập</li>
        </ol>
    </div>
    <!-- //page details -->

    <!-- gallery -->
    <div class="gallery py-5" id="gallery">
        <div class="container py-lg-5">
            <h3 class="title-w3 text-bl text-center font-weight-bold">Bộ sưu tập</h3>
            <p class="title-sub mb-sm-5 mb-4 text-center">Ẩn sau mỗi bức ảnh dưới đây là những câu chuyện dài về sự nỗ lực để thay đổi bản thân, trở thành phiên bản tốt hơn, mạnh mẽ hơn, kỉ luật hơn của chính mình.</p>
            <div class="news-grids text-center">
                <div class="row news-grids text-center">
                    <div class="col-md-4 gal-img">
                        <a href="#gal1"><img src="{{asset('templates/befit/images/g1.jpg') }} " alt="news image" class="img-fluid"></a>
                        <a href="#gal2"><img src="{{asset('templates/befit/images/g2.jpg') }} " alt="news image" class="img-fluid mt-4"></a>
                        <a href="#gal9"><img src="{{asset('templates/befit/images/g9.jpg') }} " alt="news image" class="img-fluid mt-4"></a>
                    </div>
                    <div class="col-md-4 gal-img my-md-0 my-4">
                        <a href="#gal3"><img src="{{asset('templates/befit/images/g3.jpg') }} " alt="news image" class="img-fluid"></a>
                        <a href="#gal4"><img src="{{asset('templates/befit/images/g4.jpg') }} " alt="news image" class="img-fluid mt-4"></a>
                        <a href="#gal8"><img src="{{asset('templates/befit/images/g8.jpg') }} " alt="news image" class="img-fluid mt-4"></a>
                    </div>
                    <div class="col-md-4 gal-img">
                        <a href="#gal5"><img src="{{asset('templates/befit/images/g5.jpg') }} " alt="news image" class="img-fluid"></a>
                        <a href="#gal7"><img src="{{asset('templates/befit/images/g7.jpg') }} " alt="news image" class="img-fluid mt-4"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popup-->
    <div id="gal1" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('templates/befit/images/g1.jpg') }} " alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Mang lại cho khách hàng là trải nghiệm tập luyện thoải mái và hài lòng nhất.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal2" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('templates/befit/images/g2.jpg') }} " alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Mang lại cho khách hàng là trải nghiệm tập luyện thoải mái và hài lòng nhất.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal3" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('templates/befit/images/g3.jpg') }} " alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Mang lại cho khách hàng là trải nghiệm tập luyện thoải mái và hài lòng nhất.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup3 -->
    <!-- popup-->
    <div id="gal4" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('templates/befit/images/g4.jpg') }} " alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Mang lại cho khách hàng là trải nghiệm tập luyện thoải mái và hài lòng nhất.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal5" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('templates/befit/images/g5.jpg') }} " alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Mang lại cho khách hàng là trải nghiệm tập luyện thoải mái và hài lòng nhất.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal6" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('templates/befit/images/g6.jpg') }} " alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Mang lại cho khách hàng là trải nghiệm tập luyện thoải mái và hài lòng nhất.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal7" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('templates/befit/images/g77.jpg') }} " alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Mang lại cho khách hàng là trải nghiệm tập luyện thoải mái và hài lòng nhất.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal8" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('templates/befit/images/g8.jpg') }} " alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Mang lại cho khách hàng là trải nghiệm tập luyện thoải mái và hài lòng nhất.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal9" class="popup-effect animate">
        <div class="popup">
            <img src="{{asset('templates/befit/images/g9.jpg') }} " alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Mang lại cho khách hàng là trải nghiệm tập luyện thoải mái và hài lòng nhất.</p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- //gallery -->

@endsection
