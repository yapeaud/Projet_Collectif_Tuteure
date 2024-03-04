 @extends('etudiant.dashboard.default')

@section('title')
    Évaluation tuteur par étudiant
@endsection

@section('content')
    <main class="container mt-5">
        <h3 class="text-center">Évaluation tuteur par étudiant</h3>
        <section class="justify-content-center">
            <article>
                <form action="/etudiant/dashboard/evalue/tuteur" method="post">
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
                            <label for="inputEmail">Adresse e-mail</label>
                            <input type="email" class="form-control" id="inputEmail"placeholder="Adresse e-mail étudiant" name="inputEmail">
                        </article>
                        <article class="form-group col-md-6">
                            <label for="inputTuteur">Choisir le nom de votre tuteur encadreur</label>
                            <select id="inputTuteur" class="form-control" name="nomTuteur">
                                <option selected>Choisissez...</option>
                                <option>KOUASSI Marius</option>
                                <option>YAO Koffi Charles</option>
                            </select>
                        </article>
                    </section>
                    <section class="form-row mt-2">
                        <article class="form-group col-md-6">
                            <label for="formControlSelect1">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</label>
                            <select id="formControlSelect1" class="form-control" name="presentationProjet">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                        <article class="form-group col-md-6">
                            <label for="formControlSelect2">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</label>
                            <select id="formControlSelect2" class="form-control" name="definitionPhases">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                    </section>
                    <section class="form-row mt-2">
                        <article class="form-group col-md-6">
                            <label for="formControlSelect3">Le tuteur nous a fourni des ressources explicatives</label>
                            <select id="formControlSelect3" class="form-control" name="ressourcesExplicatives">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                        <article class="form-group col-md-6">
                            <label for="formControlSelect4">Le tuteur convoque des réunions régulièrement avec mon groupe</label>
                            <select id="formControlSelect4" class="form-control" name="convocationGroupes">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                    </section>
                    <section class="form-row mt-2">
                        <article class="form-group col-md-6">
                            <label for="formControlSelect5">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</label>
                            <select id="formControlSelect5" class="form-control" name="etatAvancementGroupe">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                        <article class="form-group col-md-6">
                            <label for="formControlSelect6">Le tuteur ne s'intéresse pas à nos travaux</label>
                            <select id="formControlSelect6" class="form-control" name="interetTravaux">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                    </section>
                    <section class="form-row mt-2">
                        <article class="form-group col-md-6">
                            <label for="formControlSelect7">Le tuteur nous amène à trouver la solution par nous même </label>
                            <select id="formControlSelect7" class="form-control" name="solutionNousMeme">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                        <article class="form-group col-md-6">
                            <label for="formControlSelect8">Le tuteur vérifie nos solutions et nous recadre au besoin</label>
                            <select id="formControlSelect8" class="form-control" name="verifieNosSolutionsNousRecadre">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                    </section>
                    <section class="form-row mt-2">
                        <article class="form-group col-md-6">
                            <label for="formControlSelect9">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</label>
                            <select id="formControlSelect9" class="form-control" name="tempsSeance">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                        <article class="form-group col-md-6 mt-4">
                            <label for="formControlSelect10">le tuteur a facilité la création des groupes</label>
                            <select id="formControlSelect10" class="form-control" name="creerGroupes">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                    </section>
                    <section class="form-row mt-2">
                        <article class="form-group col-md-6 mt-4">
                            <label for="formControlSelect11">Le tuteur a facilité la collaboration entre les membres du groupe</label>
                            <select id="formControlSelect11" class="form-control" name="collaborationMembresGroupe">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                        <article class="form-group col-md-6">
                            <label for="formControlSelect12">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</label>
                            <select id="formControlSelect12" class="form-control" name="tenuReunions">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                    </section>
                    <section class="form-row mt-2">
                        <article class="form-group col-md-6">
                            <label for="formControlSelect13">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</label>
                            <select id="formControlSelect13" class="form-control" name="consulteEtatAvancementProjet">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                        <article class="form-group col-md-6 mt-4">
                            <label for="formControlSelect14">Le tuteur a su susciter mon intérêt pour ce projet</label>
                            <select id="formControlSelect14" class="form-control" name="interetProjet">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                    </section>
                    <section class="form-row mt-2">
                        <article class="form-group col-md-6">
                            <label for="formControlSelect15">Le tuteur stimule ma réflexion</label>
                            <select id="formControlSelect15" class="form-control" name="stimuleReflexion">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                        <article class="form-group col-md-6">
                            <label for="formControlSelect16">Le tuteur a su aplanir les conflits dans le groupe</label>
                            <select id="formControlSelect16" class="form-control" name="aplanirConflits">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                    </section>
                    <section class="form-row mt-2">
                        <article class="form-group col-md-6 mt-4">
                            <label for="formControlSelect17">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</label>
                            <select id="formControlSelect17" class="form-control" name="repondreQuestions">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                        <article class="form-group col-md-6">
                            <label for="formControlSelect18">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</label>
                            <select id="formControlSelect18" class="form-control" name="reponsesSatisfaisantes">
                                <option selected>Choisissez...</option>
                                <option>Pas du tout d'accord</option>
                                <option>Pas d'accord</option>
                                <option>plus ou moins d'accord</option>
                                  <option> D'accord</option>
                                <option>Tout à fait d'accord</option>
                            </select>
                        </article>
                    </section>
                    <section class="form-row mt-2">
                        <article class="form-group col-md-6">
                            <label for="formControlSelect19">Recommanderiez vous ce tuteur à un autre groupe ?</label>
                            <select id="formControlSelect19" class="form-control" name="recommander">
                                <option selected>Choisissez...</option>
                                <option>Oui</option>
                                <option>Non</option>
                            </select>
                        </article>
                        <article class="form-group col-md-6">
                            <label for="formControlSelect20">Attribuer une note sur 1 à votre tuteur</label>
                            <select id="formControlSelect20" class="form-control" name="noteTuteur">
                                <option selected>Choisissez...</option>
                                <option>0</option>
                                <option>0,25</option>
                                <option>0,5</option>
                                <option>0,75</option>
                                <option>1</option>
                            </select>
                        </article>
                    </section>
                    <section class="form-row mt-2">
                        <article class="form-group col-md-6">
                            <label for="formControlSelect21">Avez-vous eu entendu parler d'un tuteur dont vous souhaiteriez qu'il vous encadre ?</label>
                            <select id="formControlSelect21" class="form-control" name="autreTuteur">
                                <option selected>Choisissez...</option>
                                <option>Oui</option>
                                <option>Non</option>
                            </select>
                        </article>
                        <article class="form-group col-md-6 mt-4">
                            <label for="inputText1">Si oui indiquez son nom</label>
                            <input type="text" class="form-control" id="inputText1" placeholder="Nom du tuteur" name="indiquerNom">
                        </article>
                    </section>
                    <section class="form-row mt-2">
                        <article class="form-group col-md-6">
                            <label for="inputText2">Total</label>
                            <input type="text" class="form-control" id="inputText2" placeholder="Note / 20" name="noteSur20">
                        </article>
                    </section>
                    <button type="submit" class="btn btn-primary">Enregistrer l'évaluation</button>
                </form>

            </article>
        </section>
        <main>
        @endsection
