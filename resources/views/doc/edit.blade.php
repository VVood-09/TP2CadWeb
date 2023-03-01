@extends('layouts.app')
@section('title', __('lang.update'))
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-2 pt-5">
            <h1 class="display-one ">
                @lang('lang.updateDoc')
            </h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <form method="post">
            @csrf
            @method('put')
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
                            <input type="text" id="title" name="title" class="form-control" value="{{ $document->title }}">
                        </div>
                        <div class="control-group col-12">
                            @if($errors->has('title_fr'))
                                <div class="text-danger mt-2">
                                    {{ $errors->first('title_fr')}}
                                </div>
                            @endif
                            <label for="title_fr">@lang('lang.doc_title_fr')</label>
                            <input type="text" id="title_fr" name="title_fr" class="form-control" value="{{ $document->title_fr }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col-4">
                    <a href="{{ route('document.index') }}" class="btn btn-primary">@lang('lang.back')</a>
                </div>
                <div class="col-4">
                    <input type="submit" value="@lang('lang.update')" class="btn btn-success">
                </div>
                <div class="col-4">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                      @lang('lang.delete')
                    </button>           
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('lang.modalDelete')</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @lang('lang.modalDeleteText')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('lang.cancel')</button>
          <form action="{{ route('document.delete', $document->id)}}" method="post">
                  @csrf
                  @method('delete')
              <input type="submit" class="btn btn-danger" value="@lang('lang.delete')">
          </form>
        </div>
      </div>
    </div>
</div>

@endsection