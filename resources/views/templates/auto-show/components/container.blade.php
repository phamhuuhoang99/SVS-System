<div class="container">
    <div class="navbar-header">
        <div class="logo">
            <a href="{{ route('temp.auto-show.index') }}"><img src="{{ asset('templates/auto-show/images/auto.png') }}" alt="" /></a>
        </div>
        <div class="navg">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
        </div>
    </div>
    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản Phẩm<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <div class="col1 nav-float">
                            <div class="h_nav">
                                <h4>Mới</h4>
                                <ul>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Honda</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Toyota</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Mahindra</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Tata</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Ford</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Chevrolet</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Renault</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Nissan</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Skoda</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="col1 nav-float">
                            <div class="h_nav">
                                <h4>Sắp Tới</h4>
                                <ul>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Audi</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Bmw</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Jaguar</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Mercedes-benz</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Volkswagen</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Datsun</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Lamborghini</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Ferrari</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Rolls-Royce</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="col2 nav-imgs">
                            <div class="h_nav nav-img">
                                <h4>Thịnh hành</h4>
                                <ul>
                                    <li class>
                                        <div class="p_left">
                                            <img src="{{ asset('templates/auto-show/images/p1.jpg') }}" class="img-responsive" alt="" />
                                        </div>
                                        <div class="p_right">
                                            <h4><a href="#">Ô tô</a></h4>
                                            <span class="item-cat"><small><a href="#">Ferrari</a></small></span>
                                            {{-- <span class="price">100000 $</span> --}}
                                        </div>
                                        <div class="clearfix"> </div>
                                    </li>
                                    <li>
                                        <div class="p_left">
                                            <img src="{{ asset('templates/auto-show/images/p2.jpg') }}" class="img-responsive" alt="" />
                                        </div>
                                        <div class="p_right">
                                            <h4><a href="#">Ô tô</a></h4>
                                            <span class="item-cat"><small><a href="#">Ferrari</a></small></span>
                                            {{-- <span class="price">100000 $</span> --}}
                                        </div>
                                        <div class="clearfix"> </div>
                                    </li>
                                    <li>
                                        <div class="p_left">
                                            <img src="{{ asset('templates/auto-show/images/p3.jpg') }}" class="img-responsive" alt="" />
                                        </div>
                                        <div class="p_right">
                                            <h4><a href="#">Ô tô</a></h4>
                                            <span class="item-cat"><small><a href="#">Ferrari</a></small></span>
                                            {{-- <span class="price">100000 $</span> --}}
                                        </div>
                                        <div class="clearfix"> </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <div class="clearfix"> </div>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản Phẩm Cũ<b class="caret"></b></a>
                <ul class="dropdown-menu nav-equal">
                    <li>
                        <div class="col1 nav-float">
                            <div class="h_nav">
                                <h4>Mới</h4>
                                <ul>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Honda</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Toyota</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Mahindra</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Tata</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Ford</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Chevrolet</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Renault</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Nissan</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Skoda</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="col1 nav-float">
                            <div class="h_nav">
                                <h4>Sắp Tới</h4>
                                <ul>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Audi</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Bmw</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Jaguar</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Mercedes-benz</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Volkswagen</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Datsun</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Lamborghini</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Ferrari</a></li>
                                    <li><a href="{{ route('temp.auto-show.models') }}">Rolls-Royce</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="col2 nav-imgs">
                            <div class="h_nav nav-img">
                                <h4>Thịnh Hành</h4>
                                <ul>
                                    <li class>
                                        <div class="p_left">
                                            <img src="{{ asset('templates/auto-show/images/p1.jpg') }}" class="img-responsive" alt="" />
                                        </div>
                                        <div class="p_right">
                                            <h4><a href="#">Ô tô</a></h4>
                                            <span class="item-cat"><small><a href="#">Ferrari</a></small></span>
                                            {{-- <span class="price">100000 $</span> --}}
                                        </div>
                                        <div class="clearfix"> </div>
                                    </li>
                                    <li>
                                        <div class="p_left">
                                            <img src="{{ asset('templates/auto-show/images/p2.jpg') }}" class="img-responsive" alt="" />
                                        </div>
                                        <div class="p_right">
                                            <h4><a href="#">Ô tô</a></h4>
                                            <span class="item-cat"><small><a href="#">Ferrari</a></small></span>
                                            {{-- <span class="price">100000 $</span> --}}
                                        </div>
                                        <div class="clearfix"> </div>
                                    </li>
                                    <li>
                                        <div class="p_left">
                                            <img src="{{ asset('templates/auto-show/images/p3.jpg') }}" class="img-responsive" alt="" />
                                        </div>
                                        <div class="p_right">
                                            <h4><a href="#">Ô tô</a></h4>
                                            <span class="item-cat"><small><a href="#">Ferrari</a></small></span>
                                            {{-- <span class="price">100000 $</span> --}}
                                        </div>
                                        <div class="clearfix"> </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="last-nav" href="{{ route('temp.auto-show.brands') }}">Thương Hiệu</a>
            </li>
            <li class="dropdown">
                <a class="last-nav" href="{{ route('temp.auto-show.index') }}">Mua Xe</a>
            </li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>