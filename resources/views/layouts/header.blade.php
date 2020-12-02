<!-- /HEADER -->
<div class="container-fluid px-md-5  pt-4 pt-md-5">
    <div class="row justify-content-between">
        <div class="col-md-8 order-md-last">
            <div class="row">
                <div class="col-md-6 text-center">
                    <a class="navbar-brand" href="{{route('index')}}">Publishing <span>Company</span> <small>Book
                            Publishing
                            Company</small></a>
                </div>
                <div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
                    <form method="get" action="{{route('search')}}" class="searchform order-lg-last">
                        <div class="form-group d-flex">
                            <input type="text" name="key" class="form-control pl-3" placeholder="Search">
                            <button id="searchSubmit" type="submit" placeholder="" class="form-control search"><span
                                    class="fa fa-search"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="social-media">
                <p class="mb-0 d-flex">
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i
                                class="sr-only">Facebook</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i
                                class="sr-only">Twitter</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span
                            class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i
                                class="sr-only">Dribbble</i></span></a>
                </p>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active"><a href="{{route('index'),}}" class="nav-link" aria-selected="true">Trang
                        Chủ</a></li>
                <li class="nav-item"><a href="{{route('products')}}" class="nav-link" aria-selected="false">Sản Phẩm</a>
                </li>
                <li class="nav-item"><a href="{{route('news')}}" class="nav-link" aria-selected="false">Tin Tức</a></li>
                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link" aria-selected="false">Liên Hệ</a>
                </li>
                <li class="nav-item"><a href="{{route('auther')}}" class="nav-link" aria-selected="false">Tác Giả</a>
                </li>
                @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login in
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if (Route::has('login'))
                        <a class="nav-link dropdown-item" href="{{ route('login') }}"
                            style="font-size: 18px;">{{ __('Login') }}</a>
                        @endif

                        @if (Route::has('register'))
                        <a class="nav-link dropdown-item" href="{{ route('register') }}"
                            style="font-size: 18px;">{{ __('Register') }}</a>
                        @endif
                    </div>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('profile.user',Auth::user()->id)}}"
                            style="font-size: 18px;">Trang Cá Nhân</a>
                        @if(Auth::user()->role == 1)
                        <a class="dropdown-item" href="/admin" style="font-size: 18px;">
                            Admin
                        </a>
                        @endif
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" style="font-size: 18px;">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-pill badge-dark">
                            <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                        style="width: 500px; padding: 0px; border-color: #9DA0A2">
                        <ul class="list-group" style="margin: 20px;">
                            @include('partials.cart-drop')
                        </ul>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>