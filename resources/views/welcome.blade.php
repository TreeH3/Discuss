<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap core CSS and JS-->
     @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

  </head>
  <body class="d-flex h-100 text-center text-white bg-dark bg-gradient">
    
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
            <h3 class="float-md-start mb-0">Discuss</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Accueil</a>
                <a class="nav-link" aria-current="page" href="{{ route('login') }}">Se connecter</a>
                <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
            </nav>
            </div>
        </header>

        <main class="px-3">
            <h1>Bienvenue</h1>
            <p class="lead">Discuss est un forum de discussion sur des nombreux thématique en informatique. vous êtes professionnel ou amateur en informatique ou programmation ? Retrouvez la reponse à toutes vos préoccupations de maintenant.</p>
            <p class="lead">
                <a href="{{ route('register') }}" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Créer un compte</a>
            </p>
        </main>

        <footer class="mt-auto text-white-50">
            <p>&copy; Copyright 2022 &middot; by <a href="mailto:abubakarkayumba.s@gmail.com" class="text-white">Aboubakar Kayumba</a></p>
        </footer>
        </div>

  </body>
</html>
