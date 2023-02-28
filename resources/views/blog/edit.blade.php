@extends('layouts.app')
@section('title', __('lang.update'))
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-2 pt-5">
            <h1 class="display-one ">
                @lang('lang.updateArticle')
            </h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <form method="post">
            @csrf
            @method('put')
            <div class="col-12 justify-content-between d-flex">
                <div class="card col-md-5">
                    <div class="card-header">
                        @lang('lang.englishF')
                    </div>
                    <div class="card-body col-12">
                        <div class="control-group col-12">
                            @if($errors->has('title'))
                                <div class="text-danger mt-2">
                                    {{ $errors->first('title')}}
                                </div>
                            @endif
                            <label for="title">@lang('lang.title')</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{ $blogPost->title }}">
                        </div>
                        <div class="control-group col-12">
                            @if($errors->has('body'))
                                <div class="text-danger mt-2">
                                    {{ $errors->first('body')}}
                                </div>
                            @endif
                            <label for="body">@lang('lang.body')</label>
                            <textarea name="body" id="body" class="form-control">{{ $blogPost->body }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card col-md-5">
                    <div class="card-header">
                        @lang('lang.frenchF')
                    </div>
                    <div class="card-body col-12">
                        <div class="control-group col-12">
                            @if($errors->has('title_fr'))
                                <div class="text-danger mt-2">
                                    {{ $errors->first('title_fr')}}
                                </div>
                            @endif
                            <label for="title_fr">@lang('lang.title')</label>
                            <input type="text" id="title_fr" name="title_fr" class="form-control" value="{{ $blogPost->title_fr }}">
                        </div>
                        <div class="control-group col-12">
                            @if($errors->has('body_fr'))
                                <div class="text-danger mt-2">
                                    {{ $errors->first('body_fr')}}
                                </div>
                            @endif
                            <label for="body_fr">@lang('lang.body')</label>
                            <textarea name="body_fr" id="body_fr" class="form-control">{{ $blogPost->body_fr }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col-4">
                    <a href="{{ route('blog.index') }}" class="btn btn-primary">@lang('lang.back')</a>
                </div>
                <div class="col-4">
                    <input type="submit" value="@lang('lang.update')" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection