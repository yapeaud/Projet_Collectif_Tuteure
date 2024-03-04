@extends('tuteur.dashboard.default')

@section('title')
    Phase de réalisation du projet
@endsection

@section('content')
    <main class="container mt-5">
        <h3 class="text-center">Phase de réalisation du projet</h3>
        <section class="justify-content-center">
            <article>
                <form action="/tuteur/dashboard/evalue/realisation" method="post">
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
                    <div class="mt-5">
                        <section class="form-row mt-4">
                            <article class="col-md-8">
                                <label for="inputNomEtudiant">Nom et prénoms de l'étudiant</label>
                                <input type="text" name="inputNomEtudiant" id="inputNomEtudiant" class="form-control">
                            </article>
                        </section>
                        <h4 class="text-center mt-5">Phase 1 : Organisation des étudiants en groupes</h4>
                        <section class="form-row mt-4">
                            <article class="form-group col-md-6">
                                <label for="input1">L'étudiant a répondu présent dès l'entame</label>
                                <select id="input1" class="form-control" name="phase1">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                            <article class="form-group col-md-6">
                                <label for="input2">L'étudiant a choisi un groupe</label>
                                <select id="input2" class="form-control" name="phase2">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                            <article class="form-group col-md-6">
                                <label for="input3">L'étudiant a validé les groupes constitués</label>
                                <select id="input3" class="form-control" name="phase3">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                            <article class="form-group col-md-6">
                                <label for="input4">L'étudiant a pris part aux séances d'échanges autours du projet</label>
                                <select id="input4" class="form-control" name="phase4">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                        </section>
                    </div>

                    <div class="mt-5">
                        <h4 class="text-center">Phase 2 : Enquête préliminaire</h4>
                        <section class="form-row mt-4">
                            <article class="form-group col-md-6">
                                <label for="input5">L'étudiant a participé à construire l'outil d'enquête</label>
                                <select id="input5" class="form-control" name="phase5">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                            <article class="form-group col-md-6">
                                <label for="input6">L'étudiant a validé l'outil d'enquête</label>
                                <select id="input6" class="form-control" name="phase6">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                            <article class="form-group col-md-6">
                                <label for="input7">L'étudiant a contribué à constituer l'équipe qui mènera l'enquête</label>
                                <select id="input7" class="form-control" name="phase7">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                            <article class="form-group col-md-6">
                                <label for="input8">L'étudiant a pris part à l'analyse et l'interprétation des données</label>
                                <select id="input8" class="form-control" name="phase8">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                            <article class="form-group col-md-6">
                                <label for="input9">L'étudiant a validé le rapport de collecte et d'analyse des données</label>
                                <select id="input9" class="form-control" name="phase9">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                        </section>
                    </div>

                    <div class="mt-5">
                        <h4 class="text-center">Phase 3 : Elaboration de la matrice d’activités chronologique du groupe</h4>
                        <section class="form-row mt-4">
                            <article class="form-group col-md-6">
                                <label for="input10">L'étudiant a participé à l'analyse du projet</label>
                                <select id="input10" class="form-control" name="phase10">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                            <article class="form-group col-md-6">
                                <label for="input11">L'étudiant a proposé des activités pour la réalisation du projet</label>
                                <select id="input11" class="form-control" name="phase11">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                            <article class="form-group col-md-6">
                                <label for="input12">L'étudiant a pris part à la répartition des tâches</label>
                                <select id="input12" class="form-control" name="phase12">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                            <article class="form-group col-md-6">
                                <label for="input13">L'étudiant a pris part à l'élaboration du diagramme de Gant</label>
                                <select id="input13" class="form-control" name="phase13">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                        </section>
                    </div>

                    <div class="mt-5">
                        <h4 class="text-center">Phase 4 : Réalisation des tâches</h4>
                        <section class="form-row mt-4">
                            <article class="form-group col-md-6">
                                <label for="input14">L'étudiant a des tâches à réaliser</label>
                                <select id="input14" class="form-control" name="phase14">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                            <article class="form-group col-md-6">
                                <label for="input15">L'étudiant a réalisé les tâches à lui confiées</label>
                                <select id="input15" class="form-control" name="phase15">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                            <article class="form-group col-md-6">
                                <label for="input16">L'étudiant a contribué à réaliser des tâches d'autres étudiants</label>
                                <select id="input16" class="form-control" name="phase16">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                        </section>
                    </div>

                    <div class="mt-5">
                        <h4 class="text-center">Phase 5 : Rédaction du rapport d’activités</h4>
                        <section class="form-row mt-4">
                            <article class="form-group col-md-6">
                                <label for="input17">L'étudiant a rédigé une ou plusieurs parties du rapport</label>
                                <select id="input17" class="form-control" name="phase17">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                            <article class="form-group col-md-6">
                                <label for="input18">L'étudiant a contribué a rédiger d'autres parties du rapport</label>
                                <select id="input18" class="form-control" name="phase18">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                            <article class="form-group col-md-6">
                                <label for="input19">L'étudiant a contribué à la prise en compte de remarques du tuteur</label>
                                <select id="input19" class="form-control" name="phase19">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                            <article class="form-group col-md-6">
                                <label for="input20">L'étudiant a contribué à la prise en compte de remarques du tuteur</label>
                                <select id="input20" class="form-control" name="phase20">
                                    <option selected>Faire un choix</option>
                                    <option>Vrai</option>
                                    <option>Pas assez</option>
                                    <option>Pas du tout</option>
                                </select>
                            </article>
                        </section>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </article>
        </section>
    </main>
@endsection
