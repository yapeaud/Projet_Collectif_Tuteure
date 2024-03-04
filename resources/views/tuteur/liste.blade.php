@extends('tuteur.dashboard.default')

@section('title')
    Liste des tuteurs
@endsection

@section('content')
    <main class="container mt-5">
        <h1 class="text-center">Liste des tuteurs </h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Spécialité</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($tuteurs as $tuteur)
                    <tr>
                        <th scope="row">{{ $tuteur->id_tuteur }}</th>
                        <td>{{ $tuteur->nom_tuteur }}</td>
                        <td>{{ $tuteur->prenom_tuteur }}</td>
                        <td>{{ $tuteur->email }}</td>
                        <td>{{ $tuteur->telephone }}</td>
                        <td>{{ $tuteur->specialite }}</td>
                       
                    </tr>
                @endforeach

            </tbody>
        </table>
    </main>
@endsection