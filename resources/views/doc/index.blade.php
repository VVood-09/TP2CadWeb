@extends('layouts.app')
@section('title', 'Documents')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one">
                    @lang('lang.topDoc')
                </h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @lang('lang.listDoc')
                        </div>
                        <div class="card-body">
                            <ul>
                                @forelse($docs as $doc)
                                        <li class="col-12 justify-content-between d-flex">
                                            <p>{{ $doc->title }}</p>
                                            <div class="d-flex">
                                                <a href="{{ route('document.download', $doc->file)}}" class="btn btn-success">@lang('lang.dload')</a>
                                                @if($doc->users_id === Auth::user()->id)
                                                <form action="{{ route('document.delete', $doc->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" class="btn btn-danger" value="@lang('lang.delete')">
                                                </form>
                                                @endif
                                            </div>
                                        </li>
                                        <hr>
                                @empty
                                        <li class="text-danger">@lang('lang.docUnvavail')</li>
                                @endforelse
                            </ul>
                            {{ $docs }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center mt-4">
            <div class="col-4">
                <a href="{{ route('document.create')}}" class="btn btn-primary">@lang('lang.add_doc')</a>
            </div>
        </div>
    </div>

@endsection