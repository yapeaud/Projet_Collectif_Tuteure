@extends('etudiant.dashboard.default')

@section('title')
    Liste des étudians
@endsection

@section('content')
    <main class="container mt-5">
        <h1 class="text-center">Liste des étudiants </h1>
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

                @foreach ($etudiants as $etudiant)
                    <tr>
                        <th scope="row">{{ $etudiant->id_etudiant }}</th>
                        <td>{{ $etudiant->nom_etudiant }}</td>
                        <td>{{ $etudiant->prenom_etudiant }}</td>
                        <td>{{ $etudiant->email }}</td>
                        <td>{{ $etudiant->telephone }}</td>
                        <td>{{ $etudiant->specialite }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </main>
@endsection