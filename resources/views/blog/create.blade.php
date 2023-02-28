@extends('layouts.app')
@section('title', __('lang.titleCreateBlog'))
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-2 pt-5">
            <h1 class="display-one ">
                @lang('lang.addArticle')
            </h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <form method="post">
            @csrf
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
                            <input type="text" id="title" name="title" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            @if($errors->has('body'))
                                <div class="text-danger mt-2">
                                    {{ $errors->first('body')}}
                                </div>
                            @endif
                            <label for="body">@lang('lang.body')</label>
                            <textarea name="body" id="body" class="form-control"></textarea>
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
                            <input type="text" id="title_fr" name="title_fr" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            @if($errors->has('body_fr'))
                                <div class="text-danger mt-2">
                                    {{ $errors->first('body_fr')}}
                                </div>
                            @endif
                            <label for="body_fr">@lang('lang.body')</label>
                            <textarea name="body_fr" id="body_fr" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="@lang('lang.save')" class="btn btn-success mt-4">
        </form>
    </div>
</div>
@endsection