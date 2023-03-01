@extends('layouts.app')
@section('title', 'Article')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-12 pt-5">
        <h4 class="display-one mt-2">
          {{ $blogPost->title }}
        </h4>
        <hr>
        <p> {!! $blogPost->body !!}</p>
        <p><strong>@lang('lang.blogAuthor') : </strong> {{ $blogPost->blogHasUser->name}}</p>
        <hr>
      </div>
    </div>
    <div class="row text-center mt-4">
      <div class="col-4">
        <a href="{{ route('blog.index') }}" class="btn btn-primary">@lang('lang.back')</a>
      </div>
      @if( $blogPost->user_id === Auth::user()->id )
      <div class="col-4">
        <a href="{{route('blog.edit', $blogPost->id)}}" class="btn btn-success">@lang('lang.update')</a>
      </div>
      <div class="col-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
          @lang('lang.delete')
        </button>           
      </div>
      @endif
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
        <form action="{{ route('blog.edit', $blogPost->id)}}" method="post">
                @csrf
                @method('delete')
            <input type="submit" class="btn btn-danger" value="@lang('lang.delete')">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
