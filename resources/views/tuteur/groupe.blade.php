@extends('tuteur.dashboard.default')

@section('title')
    NOTE DU GROUPE
@endsection

@section('content')
    <main class="container mt-5">
        <h3 class="text-center">Note du groupe</h3>
        <section class="justify-content-center">
            <article>
                <form action="/tuteur/dashboard/evalue/groupe" method="post">
                    
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
                            <label for="input1">Gestion des conflits</label>
                            <input type="number" class="form-control" id="input1" placeholder="/2" name="gestionConflits">
                        </article>
                        <article class="form-group col-md-6">
                            <label for="input2">Communication / Coordination</label>
                            <input type="number" class="form-control" id="input2" placeholder="/1" name="communicationCoordination">
                        </article>
                    </section>
                    <section class="form-row mt-4">
                        <article class="form-group col-md-6">
                            <label for="input3">Ambition / créativité du projet</label>
                            <input type="number" class="form-control" id="input3" placeholder="/4" name="ambitionCreativiteProjet">
                        </article>
                        <article class="form-group col-md-6">
                            <label for="input4">Qualité de réalisation</label>
                            <input type="number" class="form-control" id="input4" placeholder="/4" name="qualiteRealisation">
                        </article>
                    </section>
                    <section class="form-row mt-4">
                        <article class="form-group col-md-4">
                            <label for="input5">Réussite du projet</label>
                            <input type="number" class="form-control" id="input5" placeholder="/3" name="reussiteProjet">
                        </article>
                        <article class="form-group col-md-4">
                            <label for="input6">Savoir rendre compte à l'écrit</label>
                            <input type="number" class="form-control" id="input6" placeholder="/3" name="rendreCompte">
                        </article>
                        <article class="form-group col-md-4">
                            <label for="input7">Savoir justifier les choix opérés dans le projet</label>
                            <input type="number" class="form-control" id="input7" placeholder="/3" name="justifierChoix">
                        </article>
                    </section>
                    <section class="form-row mt-4">
                        <article class="form-group col-md-6">
                            <label for="input8">Note du groupe</label>
                            <input type="number" class="form-control" id="input8" placeholder="Note du groupe/20" name="noteGroupe">
                        </article>
                        <article class="form-group col-md-6">
                            <label for="input9">Observations du groupe</label>
                            <textarea name="observationsGroupe" id="input9" rows="1" class="form-control"></textarea>
                        </article>
                    </section>
                    <button type="submit" class="btn btn-primary">Enregistrer la note</button>
                </form>
            </article>
        </section>
    </main>
@endsection
