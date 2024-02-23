@extends('etudiant.dashboard.default')

@section('title')
   Mon groupe
@endsection

@section('content')
    <main class="container mt-5">
        <h1 class="text-center">Mon groupe </h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom & Prénoms</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($etudiants as $etudiant)
                    <tr>
                        {{-- <th scope="row">{{ $etudiant->id }}</th>
                        <td>{{ $etudiant->nom }} {{ $etudiant->prenom }}</td>
                        <td>{{ $etudiant->email }}</td>
                        <td>{{ $etudiant->contact }}</td> --}}
                    </tr>
                @endforeach

            </tbody>
        </table>
    </main>
@endsection