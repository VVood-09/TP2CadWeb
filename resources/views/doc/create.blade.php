@extends('layouts.app')
@section('title', __('lang.add_doc'))
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-2 pt-5">
            <h1 class="display-one ">
                @lang('lang.add_doc')
            </h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <form method="post" enctype="multipart/form-data">
        @csrf
            <div class="col-12">
                <div class="card col-12">
                    <div class="card-header">
                        @lang('lang.doc_form')
                    </div>
                    <div class="card-body col-12">
                        
                        <div class="control-group col-12">
                            @if($errors->has('title'))
                                <div class="text-danger mt-2">
                                    {{ $errors->first('title')}}
                                </div>
                            @endif
                            <label for="title">@lang('lang.doc_title')</label>
                            <input type="text" id="title" name="title" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            @if($errors->has('title_fr'))
                                <div class="text-danger mt-2">
                                    {{ $errors->first('title_fr')}}
                                </div>
                            @endif
                            <label for="title_fr">@lang('lang.doc_title_fr')</label>
                            <input type="text" id="title_fr" name="title_fr" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            @if($errors->has('file'))
                                <div class="text-danger mt-2">
                                    {{ $errors->first('file')}}
                                </div>
                            @endif
                            <input type="file" id="file" name="file" class="form-control">
                        </div>

                    </div>
                </div>
                <div class="row text-center mt-4">
                    <div class="col-4">
                        <a href="{{ route('blog.index') }}" class="btn btn-primary">@lang('lang.back')</a>
                    </div>
                    <div class="col-4">
                        <input type="submit" value="@lang('lang.save')" class="btn btn-success">
                    </div>
                </div>    
            </div>
        </form>
    </div>
</div>
@endsection