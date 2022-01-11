@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <h1>Submit a link</h1>
        </div>

        <div class="row">
            <form action="{{ route('links.store') }}" method="POST">
                @csrf

                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following erros
                    </div>
                @endif

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" >
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" name="url" id="url" placeholder="Url" value="{{ old('url') }}" class="form-control @error('url') is-invalid @enderror">
                    @error('url')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" placeholder="Description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">
                        {{ old('description') }}
                    </textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>

            </form>
        </div>
    </div>
@endsection
