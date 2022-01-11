@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card-deck">
            @foreach ($links as $link)
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ $link->url }}">{{ $link->title }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
