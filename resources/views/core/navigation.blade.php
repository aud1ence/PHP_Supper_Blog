<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#">Supper Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/home') }}">Home</a></li>
                        @else
                            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('register') }}">Register</a></li>
                        @endauth
                    </div>
                @endif
                {{--                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#">Sample Post</a></li>--}}
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{!! route('posts.list') !!} "> {!! __('language.list_post') !!}</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{!! route('posts.create') !!} ">{!! __('language.create_post') !!}</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{!! route('user.change-language', ['en']) !!}">English</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{!! route('user.change-language', ['vi']) !!}">Vietnamese</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page Header-->
<header class="masthead" style="background-image: url('{{asset('backend/assets/img/home-bg.jpg')}}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>{{ __('language.blog_application') }}</h1>
                    <span class="subheading">{{ __('language.blog_by') }}</span>
                </div>
            </div>
        </div>
    </div>
</header>
