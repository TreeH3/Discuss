@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-1">
        <div class="col-md-2 d-none d-md-block">
            <img src="images/profiles/{{ Auth::user()->image }}" width="250" height="250" class="rounded-circle" alt="discuss profile - {{ Auth::user()->name }}">
        </div>
        <div class="col-md-10">
            <div class="card bg-dark bg-opacity-25">
                <div class="alert alert-primary" role="alert">
                    Hello <span class="text-capitalize">{{ Auth::user()->name }}</span>, {{ __('What is your question !') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('sujets.store') }}">
                        <p>Nous pocédons une vaste communauté des développeurs prête à vous aider avec <span class="text-danger">&hearts;</span> !</p>
                        @csrf

                        <div class="form-outline mb-4">
                            <label for="question" class="form-label">{{ __('Votre question') }}</label>
                            <textarea id="question" class="form-control @error('question') is-invalid @enderror" name="question" value="{{ old('question') }}" required autocomplete="question" autofocus cols="30" rows="10"></textarea>
                            @error('question')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <label for="category" class="form-label">{{ __('Choisie la catégorie de votre question') }}</label>
                            <select name="category" id="category" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <button type="submit" class="btn btn-primary form-control">
                                {{ __('Envoyer') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
