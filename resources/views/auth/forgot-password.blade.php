@extends('layouts.app')
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4 pt-4">
                <div class="card">
                    <h3 class="card-header text-center">Forgot password</h3>
                        <div class="card-body">
                            @if(session('success'))
                                <h4 class="text-success">{{session('success')}}</h4>
                            @endif
                            @if($errors)
                                @foreach($errors->all() as $error)
                                    <h4 class="text-danger">{{$error}}</h4>
                                @endforeach
                            @endif
                        <form method="POST" action="{{ route('temp.password') }}">
                            @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="S'il vous plaît informer votre e-mail " id="email" class="form-control" name="email" required autofocus>
                                    {{-- @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif --}}
                                </div>
                            <div class="d-grid mx-auto">
                                <input type="submit" class="btn btn-dark btn-block" value="Envoyer">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection