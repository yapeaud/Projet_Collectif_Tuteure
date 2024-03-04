@extends('etudiant.dashboard.default')

@section('title')
    Évalue les membres du groupe
@endsection

@section('content')
    <main class="container mt-5">
        <h3 class="text-center">Évaluation</h3>
        <section class="justify-content-center">
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
                            <label for="inputNom">Nom & prénoms</label>
                            {{-- <input type="text" class="form-control" id="inputNom" placeholder="Nom de l'évaluer" name="nomEtudiant"> --}}
                            <select id="inputNote" class="form-control" name="nomEtudiant">
                                <option selected>Nom de l'étudiant</option>
                                @foreach ($membres as $membre )
                                    <option>{{ $membre->nom_etudiant }} {{ $membre->prenom_etudiant }}</option>
                                @endforeach
                            </select>  
                        </article>
                        <article class="form-group col-md-6">
                            <label for="inputSpecialite">Spécialité</label>
                            <input type="text" name="specialite" class="form-control" id="inputSpecialite" placeholder="Spécialité de l'évaluer">
                        </article>
                        {{-- <article class="form-group col-md-6">
                            <label for="inputPrenom">Prénom</label>
                            <input type="text" class="form-control" id="inputPrenom" placeholder="Prénom de l'évaluer" name="prenomEtudiant">
                        </article> --}}
                    </section>
                    <section class="form-row">
                        <article class="form-group col-md-6">
                            <label for="inputNote">Note</label>
                            <select id="inputNote" class="form-control" name="noteMembre">
                                <option selected>Note de l'évaluer</option>
                                <option>0</option>
                                <option>2</option>
                                <option>4</option>
                                <option>6</option>
                                <option>8</option>
                                <option>10</option>
                                <option>12</option>
                                <option>14</option>
                                <option>16</option>
                                <option>18</option>
                                <option>20</option>
                            </select>
                        </article>
                    </section>
                    <button type="submit" class="btn btn-primary">Enregistrer l'évaluation</button>
                </form>
                </form>
            </article>
        </section>
        <main>
        @endsection
