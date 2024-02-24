@extends('tuteur.dashboard.default')

@section('title')
    Créer un groupe
@endsection

@section('content')
    <main class="container mt-5">
        <h3 class="text-center">Le tuteur crée un groupe</h3>
        <section class="justify-content-center">
            <article>
                <form action="/tuteur/dashboard/creegroupe" method="post">

                    @if (session()->has('successAdd'))
                        <div class="alert alert-success mb-4">
                            <h4>{{ session()->get('successAdd') }}</h4>
                        </div>
                    @endif

                    @if (session()->has('successDelete'))
                        <div class="alert alert-success mb-4">
                            <h4>{{ session()->get('successDelete') }}</h4>
                        </div>
                    @endif

                    @csrf
                    <section class="form-row mt-4">
                        <article class="form-group col-md-6">
                            <label for="inputText1">Responsable</label>
                            <input type="text" class="form-control" name="nomResponsable" id="inputText1" placeholder="Entrez le nom & prénoms du responsable" required>
                        </article>
                        <article class="form-group col-md-6">
                            <label for="inputText2">Code du Groupe:</label>
                            <input type="text" class="form-control" name="codeGroupe" id="inputText2" placeholder="Entrez le code du groupe" required>
                        </article>
                    </section>
                    <section class="form-row">
                        <article class="form-group col-md-6">
                            <label for="inputText3">Nom</label>
                            <input type="text" class="form-control" name="nomEtudiant" id="inputText3" placeholder="Entrez le nom" required>
                        </article>
                        <article class="form-group col-md-6">
                            <label for="inputText4">Prénoms</label>
                            <input type="text" class="form-control" name="prenomsEtudiant" id="inputText4" placeholder="Entrez le prénom" required>
                        </article>
                    </section>
                    <section class="form-row">
                        <article class="form-group col-md-6">
                            <label for="inputText5">E-mail</label>
                            <input type="email" class="form-control" name="email" id="inputText5" placeholder="Entrez l'e-mail" required>
                        </article>
                        <article class="form-group col-md-6">
                            <label for="inputText6">Contact</label>
                            <input type="number" class="form-control" name="contact" id="inputText6" placeholder="Entrez le numéro de contact" required>
                        </article>
                    </section>

                    <button type="submit" class="btn btn-primary">Créer Groupe</button>
                </form>
            </article>
        </section>
    </main>
@endsection