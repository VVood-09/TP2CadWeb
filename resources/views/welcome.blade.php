@extends('layouts.app')
@section('title', __('lang.welcome'))
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name')}}</h1>
                @guest
                <p>@lang('lang.catchPhraseOut')</p>
                <a class="btn btn-outline-primary" href="{{route('login')}}">@lang('lang.login')</a>
                <a class="btn btn-outline-primary" href="{{route('user.create')}}">@lang('lang.registration')</a>
                @else
                <p>@lang('lang.catchPhraseIn')</p>
                <a href="{{ route('blog.index')}}" class="btn btn-outline-primary">Afficher le blog</a>
                @endguest
            </div>
        </div>
    </div>
@endsection