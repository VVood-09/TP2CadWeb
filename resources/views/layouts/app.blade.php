<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}} : @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
</head>
<body>
@php $locale = session()->get('locale'); @endphp
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">@lang('lang.greet') @if(Auth::check()) {{Auth::user()->name }} @else @lang('lang.guest') @endif</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    @guest
                    <a class="nav-link" href="{{route('user.create')}}">@lang('lang.registration')</a>
                    @else
                    <a class="nav-link" href="{{route('blog.index')}}">@lang('lang.blogPath')</a>
                    @endguest
                    @guest
                    <a class="nav-link" href="{{route('login')}}">@lang('lang.login')</a>
                    @else
                    <a class="nav-link" href="{{route('logout')}}">@lang('lang.logout')</a>  
                    @endguest
                    <a class="nav-link @if($locale=='en') bg-secondary @endif" href="{{route('lang', 'en')}}">En</a>
                    <a class="nav-link {{ $locale =='fr' ? 'bg-secondary' : '' }}" href="{{route('lang', 'fr')}}">Fr</a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
</html>