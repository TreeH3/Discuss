@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-1">
        <div class="col-12">
            <div class="card bg-dark bg-opacity-25">
                <div class="alert alert-primary" role="alert">
                    Hello <span class="text-capitalize">{{ Auth::user()->name }}</span>, {{ __('Pouvez-vous repondre à cette question ?') }}
                </div>

                <div class="card-body">
                    <p class="card-text"><small class="text-muted">Post by {{ $sujet->user->name }} at {{ $sujet->created_at->format('d M Y h:i') }}</small></p>
                    <h5 class="card-title">Question</h5>
                    <p class="card-text"><small class="text-muted">Catégorie: {{ $sujet->category->name }}</small></p>
                    <p class="card-text">{{ $sujet->question }}</p>

                    <div class="bg-secondary bg-opacity-10 my-3" style="height: 100px">
                        <h2>Toutes les reponses</h2>
                        <p>Aucune réponse</p>
                    </div>

                    <form method="POST" action="#">
                        @csrf

                        <div class="form-outline mb-4">
                            <label for="question" class="form-label">{{ __('Répondre') }}</label>
                            <textarea id="question" class="form-control @error('question') is-invalid @enderror" name="question" value="{{ old('question') }}" required autocomplete="question" autofocus cols="30" rows="5"></textarea>
                            @error('question')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <button type="submit" class="btn btn-primary form-control">
                                {{ __('Repondre') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
