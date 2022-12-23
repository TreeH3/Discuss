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
                                <img src="/images/image1.jpeg" alt="Logo Discuss" class="w-100">
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                    <img src="/images/logo.png" style="width:100px" alt="Logo Discuss">
                                    <h4 class="mt-1 mb-3 pb-1">{{ __("S'inscrire") }}</h4>
                                </div>

                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    <p>Bonjour, nous procédons à la création de votre compte !</p>
                                    @csrf
                                
                                    <div class="form-outline mb-4">
                                        <label for="name" class="form-label">{{ __('Name') }}</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Votre nom">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Votre adresse mail">
                                        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="password" class="form-label">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Inserer votre mot de passe">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer mot de passe">
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="formFileSm" class="form-label">Photo de profile</label>
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" name="image">
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                    

                                    <div class="form-outline mb-4">
                                        Vous avez dejà un compte ?
                                        <a class="btn btn-link" href="{{ route('login') }}">
                                            Se connecter
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
