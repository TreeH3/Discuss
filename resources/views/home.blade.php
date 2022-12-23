@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-1">
        <div class="col-md-2 d-none d-md-block">
            <img src="images/profiles/{{ Auth::User()->image }}" width="250" height="250" class="rounded-circle" alt="discuss profile - {{ Auth::user()->name }}">
        </div>
        <div class="col-md-10">
            <div class="card bg-dark bg-opacity-25">
                <div class="card-header">{{ Auth::user()->email }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="alert alert-primary" role="alert">
                        Hello <span class="text-capitalize">{{ Auth::user()->name }}</span>, {{ __('You are logged in!') }}
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- category -->
    <div class="row justify-content-center bg-dark bg-opacity-10">
        <div class="col-md-12">
            <a href="{{ route('sujets.create') }}" class="btn btn-primary w-100 my-3">Poser votre question</a>
            <h1 class="text-secondary fw-bolder text-center mb-3">Nos débatons sur</h1>
            @foreach ($categories as $category)
                <ul>
                    <li class="text-secondary fw-bold fs-5">{{ $category->name }}</li>
                </ul>
            @endforeach
            <a href="{{ route('sujets.index') }}" class="btn btn-primary w-100 my-3">Voir les questions</a>
        </div>
    </div>
</div>
@endsection
