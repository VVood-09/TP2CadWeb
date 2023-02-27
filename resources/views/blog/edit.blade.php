@extends('layouts.app')
@section('title', 'Mettre a jour')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-2 pt-5">
            <h1 class="display-one ">
                Mettre a jour un article
            </h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <form method="post">
            <div class="col-12 d-flex">
                @csrf
                @method('put')
                <div class="card col-6">
                    <div class="card-header">
                        Formulaire
                    </div>

                    <div class="card-body">

                        <div class="control-group col-12">
                            <label for="title">Titre du message</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{ $blogPost->title}}">
                        </div>
                        <div class="control-group col-12">
                            <label for="body">Message</label>
                            <textarea name="body" id="body" class="form-control">{{ $blogPost->body }}</textarea>
                        </div>
                                                
                    </div>
                </div>
                <div class="card col-6">
                    <div class="card-header">
                        Formulaire 2
                    </div>

                    <div class="card-body">

                        <div class="control-group col-12">
                            <label for="title">Titre du message</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{ $blogPost->title}}">
                        </div>
                        <div class="control-group col-12">
                            <label for="body">Message</label>
                            <textarea name="body" id="body" class="form-control">{{ $blogPost->body }}</textarea>
                        </div>
                                                
                    </div>
                </div>
            </div>
            <input type="submit" value="Mettre a jour" class="btn btn-success">
        </form>
    </div>
</div>
@endsection