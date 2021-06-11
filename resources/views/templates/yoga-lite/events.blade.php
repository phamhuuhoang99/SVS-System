@extends('templates.yoga-lite.master')
@section('title', 'Yoga Lite')
@section('content')
<!-- banner-bottom -->
<section class="events py-5">
    <div class="container py-md-5">
        <h3 class="title-w3pvt text-center">Sự kiện</h3>
        <div class="row mid-grids mt-5">
            <div class="col-md-5 content-w3pvt-img">
                <a href="{{ route('temp.yoga-lite.single') }} "><img src="{{ asset('templates/yoga-lite/images/n1.jpg') }}" alt="news image" class="img-fluid"></a>
            </div>
            <div class="col-md-7 content-left-bottom entry-w3layouts-info text-left mt-3">
                <h5 class="mt-1"><a href="{{ route('temp.yoga-lite.single') }} ">1.Chào mùa thu mát mẻ</a></h5>
                <small>06/09/2020</small>
                <p class="mt-2 text-left">Yoga Lite mang đến làn gió đầu mùa thu làm say đắm các tín đồ Yoga. Mua thẻ 3 tháng tặng 1 thángMua thẻ 6 tháng tặng 2 thángMua thẻ 1 năm tặng 3 tháng Điều đặc biệt:Thẻ tập của Yoga Lite...</p>

            </div>

        </div>
        <div class="row mid-grids my-lg-5 py-lg-5">

            <div class="col-md-7 content-left-bottom entry-w3layouts-info text-left mt-3">
                <h5 class="mt-1"><a href="{{ route('temp.yoga-lite.single') }} ">2.Mừng Quốc khánh 2/9</a></h5>
                <small>02/09/2020</small>
                <p class="mt-2 text-left">– Quà tặng Thả ga – Cơn mưa thẻ tập Yoga Lite – Hệ thống phòng tập Yoga xếp hạng 5 sao Cơn mưa Ưu đãi từ Yoga NewLife khuyến mãi lên tới #50% giá trị thẻ tập Đặc biệt tặng...</p>
            </div>
            <div class="col-md-5 content-w3pvt-img">
                <a href="{{ route('temp.yoga-lite.single') }} "><img src="{{ asset('templates/yoga-lite/images/n2.jpg') }}" alt="news image" class="img-fluid"></a>
            </div>

        </div>
        <div class="row mid-grids">
            <div class="col-md-5 content-w3pvt-img">
                <a href="{{ route('temp.yoga-lite.single') }} "><img src="{{ asset('templates/yoga-lite/images/n3.jpg') }}" alt="news image" class="img-fluid"></a>
            </div>
            <div class="col-md-7 content-left-bottom entry-w3layouts-info text-left mt-3">
                <h5 class="mt-1"><a href="{{ route('temp.yoga-lite.single') }} ">3.Lớp tập Pilates tại Yoga Lite</a></h5>
                <small>06/10/2020</small>
                <p class="mt-2 text-left">Lớp tập Pilates tập cùng block tại #Yoga_Lite, tham gia lớp học với đa phần là các giáo viên Yoga ở các trung tâm. Nếu bạn đã từng thích Yoga, Pilates có thể là nấc thang để dẫn đến...</p>

            </div>

        </div>

    </div>
</section>
<!-- //banner-bottom -->
<!--/help-line -->
@include('templates.yoga-lite.help')
<!--//help-line -->

@endsection