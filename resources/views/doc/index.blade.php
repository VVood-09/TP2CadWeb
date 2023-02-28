@extends('layouts.app')
@section('title', __('lang.blogPath'))
@section('content')

<div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one">
                    @lang('lang.my_blog')
                </h1>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            @lang('lang.reading_title')
                        </p>
                    </div>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @lang('lang.blogList')
                        </div>
                        <div class="card-body">
                            <ul>
                                @forelse($blogs as $blog)
                                        <li><a href="{{ route('blog.show', $blog->id)}}">{{ $blog->title }}</a></li>
                                @empty
                                        <li class="text-danger">@lang('lang.blogUnvavail')</li>
                                @endforelse
                            </ul>
                            {{ $blogs }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center mt-4">
            <div class="col-4">
                <a href="{{ route('blog.create')}}" class="btn btn-primary">@lang('lang.add_post')</a>
            </div>
        </div>
    </div>

@endsection