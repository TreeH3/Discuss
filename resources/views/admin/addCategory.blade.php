@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-1">
        <div class="col-12">
            <div class="card bg-dark bg-opacity-25">
                <div class="card-body">
                    <form method="POST" action="{{ route('categories.store') }}">
                        <h2>Ajouter une catégorie</h2>
                        @csrf

                        <div class="form-outline mb-4">
                            <label for="name" class="form-label">{{ __('Name of the category') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Category">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <button type="submit" class="btn btn-primary form-control">
                                {{ __('Ajouter') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
