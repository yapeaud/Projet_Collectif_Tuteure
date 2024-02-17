@extends('etudiant.dashboard.default')

@section('title')
    Évaluation tuteur par étudiant
@endsection

@section('content')
    <main class="container mt-5">
        <h3 class="text-center">Évaluation tuteur par étudiant</h3>
        <section class="row justify-content-start">
            <article class="col-md-6">
                
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

                    <div class="container mt-5">
                        <form>
                            {{-- <div class="form-group">
                                <label for="email">Adresse e-mail :</label>
                                <input type="email" class="form-control" id="email" placeholder="Adresse e-mail de l'étudiant" name="email">
                            </div> --}}
                            <section class="form-row">
                                <span>
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation1" name="choixAppreciation1">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse1" name="choixReponse1">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </span>
                            </section>
                            
                            <section class="form-row">
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation2" name="choixAppreciation2">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse2" name="choixReponse2">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="form-row">
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation3" name="choixAppreciation3">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse3" name="choixReponse3">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="form-row">
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation4" name="choixAppreciation4">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse4" name="choixReponse4">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="form-row">
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation5" name="choixAppreciation5">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse5" name="choixReponse5">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="form-row">
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation6" name="choixAppreciation6">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse6" name="choixReponse6">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="form-row">
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation7" name="choixAppreciation7">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse7" name="choixReponse7">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="form-row">
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation8" name="choixAppreciation8">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse8" name="choixReponse8">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="form-row">
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation9" name="choixAppreciation9">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse9" name="choixReponse9">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="form-row">
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation10" name="choixAppreciation10">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse10" name="choixReponse10">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="form-row">
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation11" name="choixAppreciation11">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse11" name="choixReponse11">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="form-row"> 
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation12" name="choixAppreciation12">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse12" name="choixReponse12">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="form-row">
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation13" name="choixAppreciation13">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse13" name="choixReponse13">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="form-row">
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation14" name="choixAppreciation14">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse14" name="choixReponse14">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="form-row">
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation15" name="choixAppreciation15">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse15" name="choixReponse15">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="form-row"> 
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation16" name="choixAppreciation16">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse16" name="choixReponse16">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </section>
                            
                            <section class="form-row">
                                <article class="mb-3">
                                    <select class="form-select" id="choixAppreciation17" name="choixAppreciation17">
                                        <option value="">Le tuteur a présenté le projet à tous les étudiants lors d'une séance</option>
                                        <option value="">Le tuteur nous a bien défini les différentes phases de la réalisation du projet</option>
                                        <option value="">Le tuteur nous a fourni des ressources explicatives</option>
                                        <option value="">Le tuteur convoque des réunions régulièrement avec mon groupe</option>
                                        <option value="">Le tuteur est très présent pour savoir l'état d'avancement de mon groupe</option>
                                        <option value="">Le tuteur ne s'intéresse pas à nos travaux</option>
                                        <option value="">Le tuteur nous amène à trouver la solution par nous même</option>
                                        <option value="">Le tuteur vérifie nos solutions et nous recadre au besoin</option>
                                        <option value="">La durée des séances était suffisante pour vous permettre d’atteindre les objectifs visés</option>
                                        <option value="">le tuteur a facilité la création des groupes</option>
                                        <option value="">Le tuteur a facilité la collaboration entre les membres du groupe</option>
                                        <option value="">Le tuteur a fréquemment tenu des réunions avec notre groupe pour nous guider</option>
                                        <option value="">Le tuteur consulte notre groupe régulièrement pour voir l'état d’avancement de notre projet</option>
                                        <option value="">Le tuteur a su susciter mon intérêt pour ce projet</option>
                                        <option value="">Le tuteur stimule ma réflexion</option>
                                        <option value="">Le tuteur a su aplanir les conflits dans le groupe</option>
                                        <option value="">Les tuteurs étaient suffisamment disponibles pour répondre aux questions</option>
                                        <option value="">J’ai le plus souvent obtenu des réponses satisfaisantes de la part du tuteur à mes questions</option>
                                    </select>
                                </article>
                                
                                <article class="mb-3">
                                    <select class="form-select" id="choixReponse17" name="choixReponse17">
                                        <option value="">Pas du tout d'accord</option>
                                        <option value="">Pas d'accord</option>
                                        <option value="">plus ou moins d'accord</option>
                                        <option value=""> D'accord</option>
                                        <option value="">Tout à fait d'accord</option>
                                    </select>
                                </article>
                            </section>


                            
                            <button type="submit" class="btn btn-primary">Enregistrer l'évaluation</button>
                        </form>
                    </div>


                </form>
            </article>
        </section>
        <main>
        @endsection
