<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/post.list.css') }}">
</head>
<body>
<div class="content">
    <div class="links">
        <a href="{!! route('home') !!} "> {!! __('language.home') !!}</a>
        <a href="{!! route('posts.create') !!} "> {!! __('language.create_post') !!}</a>
    </div>
    @if (count($posts) == 0)
        <p>{!! __('language.post_not_exist') !!}</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li>{{$post->title}}</li>
            @endforeach
        </ul>
    @endif
</div>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ route('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="links">
            <a href="{!! route('home') !!} "> Trang chủ</a>
            <a href="{!! route('posts.create') !!} "> Tạo bài viết</a>
        </div>
        @if (count($posts) == 0)
            <p>Không có bài viết nào</p>
        @else
            <ul>
                @foreach($posts as $post)
                    <li>{{$post->title}}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
</body>
</html>
