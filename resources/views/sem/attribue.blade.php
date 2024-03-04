@extends('sem.dashboard.default')

@section('title')
    Gestion des tuteurs
@endsection

@section('content')
    <main class="container mt-5">
        <section class=" justify-content-center">
            <article>
                <h3 class="text-center">Attribue des étudiants</h3>
                <form action="/sem/dashboard/attribue" method="post">

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
                            <label for="inputNomTuteur">Nom du tuteur</label>
                            <input type="text" class="form-control" id="inputNomTuteur" name="inputNomTuteur">
                        </article>
                        <article class="form-group col-md-6">
                            <label for="inputPenomTuteur">Prénom du tuteur</label>
                            <input type="text" class="form-control" id="inputPenomTuteur" name="inputPenomTuteur">
                        </article>
                    </section>
                    <section class="form-row">
                        <article class="form-group col-md-6">
                            <label for="inputNomEtudiant">Nom de l'étudiant</label>
                            <input type="text" class="form-control" id="inputNomEtudiant" name="inputNomEtudiant">
                        </article>
                        <article class="form-group col-md-6">
                            <label for="inputPenomEtudiant">Prénom de l'étudiant</label>
                            <input type="text" class="form-control" id="inputPenomEtudiant" name="inputPenomEtudiant">
                        </article>
                    </section>

        
                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </form>
            </article>
        </section>
    </main>
@endsection