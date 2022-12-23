@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-1">
        <div class="col-md-2 d-none d-md-block">
            <img src="images/profiles/{{ Auth::user()->image }}" width="250" height="250" class="rounded-circle" alt="discuss profile - {{ Auth::user()->name }}">
        </div>
        <div class="col-md-10">
            <div class="card bg-dark bg-opacity-25">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <p class="fw-bold">Bonne nouvelle ! </p>
                        <p>{{ session('success') }}</p>
                    </div>
                @endif
                <div class="alert alert-primary" role="alert">
                    Hello <span class="text-capitalize">{{ Auth::user()->name }}</span>, {{ __('This is all of question !') }}
                </div>

                <div class="card-body">
                    @foreach ($sujets as $sujet)
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/images/profiles/{{ $sujet->user->image }}" class="img-fluid rounded-start" alt="{{ $sujet->user->name }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text"><small class="text-muted">Post by {{ $sujet->user->name }} at {{ $sujet->created_at->format('d M Y h:i') }}</small></p>
                                    <h5 class="card-title">Question</h5>
                                    <p class="card-text"><small class="text-muted">Catégorie: {{ $sujet->category->name }}</small></p>
                                    <p class="card-text">{{ Str::limit($sujet->question, 120) }}</p>
                                    <p class="card-text"><a href="{{ route('sujets.show', $sujet) }}" class="btn btn-secondary">Voir plus</a></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
