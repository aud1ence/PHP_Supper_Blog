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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/post.create.css') }}">
</head>
<body>
<div class="content">
    <div class="links">
        <a href="{!! route('home') !!} "> {!! __('language.home') !!}</a>
        <a href="{{route('posts.list')}}">{!! __('language.list_post') !!}</a>
    </div>
    <form action="{{route('posts.store')}}" method="post" class="form-create-post">
        @csrf
        <label for="title">{!! __('language.title') !!}</label> <br/>
        <input id="title" name="title" type="text"/> <br/>
        <label for="content">{!! __('language.content') !!}</label> <br/>
        <textarea id="content" name="content"></textarea><br/>
        <button type="submit" value="Create">{!! __('language.save') !!}</button>
    </form>
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
            <a href="{{route('posts.list')}}">Danh sách bài viết</a>
        </div>
        <form action="{{route('posts.store')}}" method="post" class="form-create-post">
            @csrf
            <label for="title">Tiêu đề</label> <br/>
            <input id="title" name="title" type="text"/> <br/>
            <label for="content">Nội dung</label> <br/>
            <textarea id="content" name="content"></textarea><br/>
            <button type="submit" value="Create">Lưu</button>
        </form>
    </div>
</div>
</body>
</html>
