@extends('sem.dashboard.default')

@section('title')
    Gestion des tuteurs
@endsection

@section('content')
    <main class="container mt-5">
        <h3 class="text-center">Gestion des tuteurs</h3>
        <section class="justify-content-center">
            <article>
                <form action="/sem/dashboard/gere" method="post">
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
                            <label for="inputEmail">Email</label>
                            <input type="email" name="inputEmail" id="inputEmail" class="form-control">
                        </article>
                        <article class="form-group col-md-6">
                            <label for="inputTel">Téléphone</label>
                            <input type="tel" name="inputTel" id="inputTel" class="form-control">
                        </article>
                    </section>
                    <section class="form-row">
                      <article class="form-group col-md-6">
                          <label for="inputSpecialite">Spécialité</label>
                          {{-- <input type="text" name="specialite" id="inputSpecialite" class="form-control"> --}}
                          <select name="specialite" id="input1"  class="form-control">
                            <option selected>Choisir une spécialité</option>
                            <option>BD</option>
                            <option>DAS</option>
                            <option>CMD</option>
                            <option>COM</option>
                            <option>MMX</option>
                            <option>ATD</option>
                            <option>STG</option>
                        </select>
                        </article>
                  </section>
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Soumettre</button>
                </form>
            </article>
        </section>
    </main>
@endsection
