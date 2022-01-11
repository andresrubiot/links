@extends('layouts.app')

@section('content')
    <div class="container-fluid w-50 h-100">
        <div class="flex-center position-ref h-100">
            <div class="content card">
                <div class="title m-b-md card-header text-center font-weight-bold text-muted">
                    <h1>Links App</h1>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-light mb-3">
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        <a href="{{ route('links.index') }}">List Links</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-light mb-3">
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        <a href="{{ route('links.create') }}">Add Link</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
