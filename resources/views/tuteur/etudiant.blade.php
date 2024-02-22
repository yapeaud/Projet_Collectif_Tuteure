@extends('tuteur.dashboard.default')

@section('title')
    NOTE INDIVIDUEL DE L'ÉTUDIANT
@endsection

@section('content')
    <main class="container mt-5">
        <h3 class="text-center">Note individuel de l'étudiant</h3>
        <section class="justify-content-center">
            <article>
                <form action="/tuteur/dashboard/evalue/etudiant" method="post">

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
                            <label for="inputText1">Participation à la résolution des conflits</label>
                            <input type="number" class="form-control" name="participationResolutionConflits" id="inputText1" placeholder="/3">
                        </article>
                        <article class="form-group col-md-6">
                            <label for="inputText2">Implication dans la coordination</label>
                            <input type="number" class="form-control" name="implicationCoordination" id="inputText2" placeholder="/3">
                        </article>
                    </section>
                    <section class="form-row">
                        <article class="form-group col-md-6">
                            <label for="inputText3">Ampleur et qualité des tâches réalisées</label>
                            <input type="number" class="form-control" name="ampleurQualiteTachesRealisees" id="inputText3" placeholder="/4">
                        </article>
                        <article class="form-group col-md-6">
                            <label for="inputText4">Prise d'initiatives</label>
                            <input type="number" class="form-control" name="priseInitiatives" id="inputText4" placeholder="/4">
                        </article>
                    </section>
                    <section class="form-row">
                        <article class="form-group col-md-6">
                            <label for="inputText5">Connaitre le projet</label>
                            <input type="number" class="form-control" name="connaitreProjet" id="inputText5" placeholder="/3">
                        </article>
                        <article class="form-group col-md-6">
                            <label for="inputText6">Savoir répondre aux questions</label>
                            <input type="number" class="form-control" name="savoirRepondreQuestions" id="inputText6" placeholder="/3">
                        </article>
                    </section>
                    <section class="form-row mt-4">
                        <article class="form-group col-md-6">
                            <label for="inputText7">Note individuelle</label>
                            <input type="number" class="form-control" name="noteIndividuelle" id="inputText7" placeholder="/20">
                        </article>
                        <article class="form-group col-md-6">
                            <label for="inputText8">Note définitive de l'étudiant</label>
                            <input type="number" class="form-control" name="noteDefinitiveEtudiant" id="inputText8" placeholder="/20">
                        </article>
                    </section>
                    <section class="form-row">
                        <article class="form-group col-md-6">
                            <label for="inputText9">Observations individuelle</label>
                            <textarea name="observationsIndividuelle" id="inputText9" rows="1" class="form-control"></textarea>
                        </article>
                    </section>
                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </form>
            </article>
        </section>
    </main>
@endsection