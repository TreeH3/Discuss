@extends('layouts.app')

@section('content')
<section style="background-color: #bebebe">
    <div class="container py-2">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-xs-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-5 d-flex align-items-center">
                            <div class="w-100">
                                <img src="/images/image0.png" alt="Logo Discuss" class="w-100">
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                    <img src="/images/logo.png" style="width:100px" alt="Logo Discuss">
                                    <h4 class="mt-1 mb-3 pb-1">{{ __('Connexion') }}</h4>
                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                    <p>Veuillez vous connecter àvotre compte</p>
                                    @csrf
                                
                                    <div class="form-outline mb-4">
                                        <label for="email" class="form-label">{{ __('Adresse email') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Votre email">
                                        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="password" class="form-label">{{ __('Mot de passe') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Taper votre mot de passe">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Se souvenir de moi') }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Se connecter') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Mot de passe oublié') }}
                                            </a>
                                        @endif
                                    </div>
                                    

                                    <div class="form-outline mb-4">
                                        Vous n'avez pas de compte ?
                                        <a class="btn btn-link" href="{{ route('register') }}">
                                            Créer un compte
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
