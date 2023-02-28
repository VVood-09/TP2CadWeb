@extends('layouts.app')
@section('title', __('lang.registration'))
@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 pt-4">
                <div class="card">
                    <h3 class="card-header text-center">
                        @lang('lang.registration')
                    </h3>
                    <div class="card-body">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong> {{session('success')}}</strong> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <form action="{{route('user.store')}}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="@lang('lang.placeholderName')" class="form-control" name="name" value="{{ old('name')}}">
                                @if($errors->has('name'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('name')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" placeholder="@lang('lang.placeholderEmail')" class="form-control" name="email" value="{{ old('email')}}">
                                @if($errors->has('email'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('email')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="@lang('lang.placeholderPW')" class="form-control" name="password">
                                @if($errors->has('password'))
                                    <div class="text-danger mt-2">
                                        {{ $errors->first('password')}}
                                    </div>
                                @endif
                            </div>
                            <div class="d-grid mx-auto">
                                <input type="submit" value="@lang('lang.save')" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>  

@endsection