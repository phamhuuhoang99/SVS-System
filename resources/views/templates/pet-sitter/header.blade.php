<section class=" w3l-header-4 header-sticky">
    <header class="absolute-top">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <h1><a class="navbar-brand" href="{{ route('temp.pet-sitter.index') }}"><span class="fa fa-paw mr-2" aria-hidden="true"></span>
            Pet Sitter
            </a></h1>
            <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
				<span class="fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('temp.pet-sitter.index') }}">Trang Chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('temp.pet-sitter.about') }}">Về Chúng Tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('temp.pet-sitter.services') }}">Dịch Vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('temp.pet-sitter.contact') }}">Liên Hệ</a>
                    </li>
                </ul>
            </div>
        </div>

        </nav>
    </div>
      </header>
</section>