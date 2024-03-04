@extends('sem.dashboard.default')

@section('title')
    Notation du tuteur
@endsection

@section('content')
    <main class="container mt-5">
        <section class="justify-content-center">
            <h3 class="text-center">La note du tuteur</h3>
            <article>
                
                <form action="/sem/dashboard/note" method="post">

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
                            <label for="input1">Spécialité</label>
                            <select name="specialite" id="input1"  class="form-control">
                                <option selected>Choisir une spécialité</option>
                                <option>BD-DAS</option>
                                <option>CMD</option>
                                <option>COM</option>
                                <option>MMX</option>
                                <option>ATD</option>
                                <option>STG</option>
                            </select>
                        </article>
                        <article class="form-group col-md-6">
                            <label for="input2">Tuteur</label>
                            <select name="" id="input2"  class="form-control">
                                <option selected>Choisir un tuteur</option>
                                <option></option>
                                <option></option>
        
                            </select>
                        </article>
                    </section>
                    <section class="form-row">
                        <article class="form-group col-md-6">
                            <label for="input3">Participation aux réunions techniques</label>
                            <input type="number" class="form-control" id="input2" placeholder="La note" name="note1">
                        </article>
                        <article class="form-group col-md-6">
                            <label for="input2">Respect des consignes des réunions et de l'administration</label>
                            <input type="number" class="form-control" id="input3" placeholder="La note" name="note2">
                        </article>
                    </section>
                    <section class="form-row">
                        <article class="form-group col-md-6">
                            <label for="input4">Respect du calendrier du PCT </label>
                            <input type="number" class="form-control" id="input4" placeholder="La note" name="note1">
                        </article>
                        <article class="form-group col-md-6">
                            <label for="input5">Création des fichiers Drive de gestion du PCT / Notation continue des étudiants</label>
                            <input type="number" class="form-control" id="input5" placeholder="La note" name="note2">
                        </article>
                    </section>
                    <section class="form-row">
                        <article class="form-group col-md-6">
                            <label for="input6">Evaluation des rapports des étudiants et feedback</label>
                            <input type="number" class="form-control" id="input6" placeholder="La note" name="note1">
                        </article>
                        <article class="form-group col-md-6">
                            <label for="input7">Total</label>
                            <input type="number" class="form-control" id="input7" placeholder="La note" name="note2">
                        </article>
                    </section>

                    <button type="submit" class="btn btn-primary">Soumettre la note</button>
                </form>
            </article>
        </section>
    </main>
@endsection