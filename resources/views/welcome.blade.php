@extends('layouts.app')

@section('content')
    <div class="container-fluid w-50 h-100">
        <div class="flex-center position-ref h-100">
            <div class="content card">
                <div class="title m-b-md card-header text-center font-weight-bold text-muted">
                    <h1>Links App</h1>
                </div>

                <div class="card-body">
                    @guest
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card bg-light mb-3">
                                    <div class="card-body text-center">
                                        <a href="{{ route('login') }}">
                                            You must first login
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card bg-light mb-3">
                                    <div class="card-body text-center">
                                        <a href="{{ route('links.index') }}">
                                            List Links
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light mb-3">
                                    <div class="card-body text-center">
                                        <a href="{{ route('links.create') }}">
                                            Add Link
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endguest
                </div>

            </div>
        </div>
    </div>
@endsection
