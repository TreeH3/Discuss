@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-1">
        <div class="col-12">
            <div class="card bg-dark bg-opacity-25">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        Welcome admin !
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- category -->
    <div class="row justify-content-center bg-dark bg-opacity-10">
        <div class="col-md-12">
            <h2>Toutes les catégories</h2>
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            <table class="table caption-top">
                <div class="float-end"><a href="{{ route('categories.create') }}" class="btn btn-primary">Ajouter une catégorie</a></div>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="#" class="btn btn-success">Modifier</a>
                                |
                                <a href="#" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
