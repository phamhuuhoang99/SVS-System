<!-- Top Menu 1 -->
<section class="w3l-top-menu-1">
    <div class="top-hd">
        <div class="container">
            <header class="row top-menu-top">
                <div class="accounts col-md-9 col-6">
                    <li class="top_li"><span class="fa fa-phone"></span><a href="tel:+142 5897555"> 035 618 5047</a>
                    </li>
                    <li class="top_li1"><span class="fa fa-envelope-o"></span> <a
                            href="mailto:education-mail@support.com" class="mail"> smartvietsolution@gmail.com</a> </li>
                </div>
                <div class="social-top col-md-3 col-6">
                    <a href="{{ route('temp.mastery.contact') }}" class="btn btn-secondary btn-theme4">Đăng Ký Ngay</a>
                </div>
            </header>
        </div>
    </div>
</section>
<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
    <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
        <div class="container">
            <a class="navbar-brand" href="{{ route('temp.mastery.index') }}"><span class="fa fa-pencil-square-o "></span> Mastery</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('temp.mastery.index') }}">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('temp.mastery.about') }}">Về Chúng Tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('temp.mastery.services') }}">Dịch Vụ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('temp.mastery.contact') }}">Liên Hệ</a>
                    </li>
                </ul>
                <form action="#" class="form-inline position-relative my-2 my-lg-0">
                    <input class="form-control search" type="search" placeholder="Tìm kiếm ở đây ..."
                        aria-label="Search" required="">
                    <button class="btn btn-search position-absolute" type="submit"><span class="fa fa-search"
                            aria-hidden="true"></span></button>
                </form>
            </div>
        </div>
    </nav>
</section>