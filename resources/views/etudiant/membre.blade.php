@extends('etudiant.dashboard.default')

@section('title')
    Évalue les membres du groupe
@endsection

@section('content')
    <main class="container mt-5">
        <h3 class="text-center">Évaluation</h3>
        <section class="row justify-content-center">
            <article>
                <form action="/etudiant/dashboard/evalue/membre" method="post">

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
                            <label for="inputNom">Nom</label>
                            <input type="text" class="form-control" id="inputNom" placeholder="Nom de l'évaluer" name="nomEtudiant">
                        </article>
                        <article class="form-group col-md-6">
                            <label for="inputPrenom">Prénom</label>
                            <input type="text" class="form-control" id="inputPrenom" placeholder="Prénom de l'évaluer" name="prenomEtudiant">
                        </article>
                    </section>
                    <section class="form-row">
                        <article class="form-group col-md-6">
                            <label for="inputSpecialite">Spécialité</label>
                            <input type="text" name="specialite" class="form-control" id="inputSpecialite" placeholder="Spécialité de l'évaluer">
                        </article>
                        <article class="form-group col-md-6">
                            <label for="inputNote">Note</label>
                            <input type="number" name="noteMembre" class="form-control" id="inputNote" placeholder="Note de l'évaluer">
                        </article>
                    </section>
                    <button type="submit" class="btn btn-primary">Enregistrer l'évaluation</button>
                </form>
                </form>
            </article>
        </section>
        <main>
        @endsection
