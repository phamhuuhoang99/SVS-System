@extends('templates.inwardly.master')
@section('title', 'Inwardly')
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href={{ route("temp.inwardly.index") }}>Trang Chủ</a>
    </li>
    <li class="breadcrumb-item active">404</li>
</ol>
<!-- error -->
<section class="banner-bottom-w3ls py-lg-5 py-md-4  py-3">
    <div class="container">
        <div class="inner-sec-wthreelayouts py-md-5 py-3">
            <div class="error-404">
                <h4>404</h4>
                <p>Lỗi ! Không có gì ở đây.</p>
                <form>
                    <input class="form-control" type="search" name="serch" placeholder="Tìm kiếm" required="">
                    <button class="btn btn1">
						<i class="fa fa-search" aria-hidden="true"></i>
					</button>
                    <div class="clearfix"> </div>
                </form>
                <div class="test_social_pos">
                    <ul class="social_list1">
                        <li>
                            <a href="#" class="facebook1">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter2">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dribble3">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <a class="b-home btn" href={{ route("temp.inwardly.index") }}>Quay về Trang Chủ</a>
            </div>
        </div>
    </div>
</section>
<!-- //error -->
@endsection