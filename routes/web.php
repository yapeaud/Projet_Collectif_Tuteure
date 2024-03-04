<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SemController;
use App\Http\Controllers\TuteurController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\InternshipController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* ---------- ETUDIANT ----------- */
Route::get('/etudiant/connexion', [EtudiantController::class, 'index'])->name('connexion');
Route::post('/etudiant/connexion', [EtudiantController::class, 'traitementConnexion'])->name('traitementConnexion');
Route::get('/etudiant/inscription', [EtudiantController::class, 'inscription'])->name('inscription');
Route::post('/etudiant/inscription', [EtudiantController::class, 'traitementInscriptionEtudiant'])->name('traitementInscriptionEtudiant');
Route::get('/etudiant/dashboard', [EtudiantController::class, 'etudiantDashboard'])->name('etudiantDashboard');

#Mon groupe
Route::get('/etudiant/liste', [EtudiantController::class, 'listeEtudiant'])->name('listeEtudiant');
Route::get('/etudiant/groupe', [EtudiantController::class, 'groupeEtudiant'])->name('groupeEtudiant');

#L'étudiant évalue les membres de son groupe.
Route::get('/etudiant/dashboard/evalue/membre', [EtudiantController::class, 'etudiantEvalueMembre'])->name('etudiantEvalueMembre');
Route::post('/etudiant/dashboard/evalue/membre', [EtudiantController::class, 'traitementEtudiantEvalueMembre'])->name('traitementEtudiantEvalueMembre');

#L'étudiant évalue son tuteur
Route::get('/etudiant/dashboard/evalue/tuteur', [EtudiantController::class, 'etudiantEvalueTuteur'])->name('etudiantEvalueTuteur');
Route::post('/etudiant/dashboard/evalue/tuteur', [EtudiantController::class, 'traitementEtudiantEvalueTuteur'])->name('traitementEtudiantEvalueTuteur');

#L'étudiant dépose son rapport
Route::get('/etudiant/dashboard/rapport', [EtudiantController::class, 'etudiantRapport'])->name('etudiantRapport');
Route::post('/etudiant/dashboard/rapport', [EtudiantController::class, 'traitementEtudiantRapport'])->name('traitementEtudiantRapport');

/* ---------- TUTEURS ----------- */
Route::get('/tuteur/connexion', [TuteurController::class, 'index'])->name('connexion');
Route::post('/tuteur/connexion', [TuteurController::class, 'traitementConnexionTuteur'])->name('traitementConnexionTuteur');
Route::get('/tuteur/inscription', [TuteurController::class,'inscription'])->name('inscription');
Route::post('/tuteur/inscription', [TuteurController::class,'traitementInscriptionTuteur'])->name('traitementInscriptionTuteur');
Route::get('/tuteur/liste', [TuteurController::class, 'listeTuteur'])->name('listeTiteur');
Route::get('/tuteur/dashboard', [TuteurController::class, 'tuteurDasboard'])->name('tuteurDasboard');

#Le tuteur évalue ses étudiants
Route::get('/tuteur/dashboard/evalue/etudiant', [TuteurController::class, 'tuteurEvalueEtudiant'])->name('tuteurEvalueEtudiant');
Route::post('/tuteur/dashboard/evalue/etudiant', [TuteurController::class, 'traitementTuteurEvalueEtudiant'])->name('traitementTuteurEvalueEtudiant');
Route::get('/tuteur/dashboard/evalue/groupe', [TuteurController::class, 'tuteurEvalueGroupe'])->name('tuteurEvalueGroupe');
Route::post('/tuteur/dashboard/evalue/groupe', [TuteurController::class, 'traitementTuteurEvalueGroupe'])->name('traitementTuteurEvalueGroupe');
Route::get('/tuteur/dashboard/evalue/realisation',[TuteurController::class,'phaseRealisationProjet'])->name('phaseRealisationProjet');
Route::post('/tuteur/dashboard/evalue/realisation',[TuteurController::class,'traitementPhaseRealisationProjet'])->name('traitementPhaseRealisationProjet');

#Le tuteur crée un groupe
Route::get('/tuteur/dashboard/creergroupe', [TuteurController::class, 'creerGroupe'])->name('creerGroupe');
Route::post('/tuteur/dashboard/creergroupe', [TuteurController::class, 'traitemenCreerGroupe'])->name('traitemenCreerGroupe');

#Le tuteur attribue un rôle
Route::get('/tuteur/dashboard/groupe/role', [TuteurController::class, 'tuteurAttribueRole'])->name('tuteurAttribueRole');
Route::post('/tuteur/dashboard/groupe/role', [TuteurController::class, 'traitementTuteurAttribueRole'])->name('traitementTuteurAttribueRole');

#Le tuteur dépose un rapport
Route::get('/tuteur/dashboard/rapport', [TuteurController::class, 'tuteurRapport'])->name('tuteurRapport');
Route::post('/tuteur/dashboard/rapport', [TuteurController::class, 'traitementTuteurRapport'])->name('traitementTuteurRapport');









  















/* ---------- RESPONSABLE DU SERVICE STAGE ET EMPLOI ----------- */
Route::get('/sem/connexion', [SemController::class, 'index'])->name('connexion');
Route::get('/sem/inscription', [SemController::class,'inscription'])->name('inscription');
Route::post('/sem/inscription', [SemController::class,'traitementInscriptionSem'])->name('traitementInscriptionSem');
Route::get('/sem/liste', [SemController::class, 'listeSem'])->name('listeSem');
Route::get('/sem/dashboard', [SemController::class, 'semDashboard'])->name('semDashboard');

#L'internship note le tuteur
Route::get('/sem/dashboard/note', [SemController::class, 'semNoteTuteur'])->name('semNoteTuteur');
Route::post('/sem/dashboard/note', [SemController::class, 'traitementSemNoteTuteur'])->name('traitementSemNoteTuteur');

#Gestion du tuteur par le responsable du service stage et emploi
Route::get('/sem/dashboard/gere', [SemController::class, 'semGereTuteur'])->name('semGereTuteur');
Route::post('/sem/dashboard/gere', [SemController::class, 'traitementSemGereTuteur'])->name('traitementSemGereTuteur');

#Attribution des rôles par le responsable du service stage et emploi
Route::get('/sem/dashboard/attribue', [SemController::class, 'semAttribueEtudiant'])->name('semAttribueEtudiant');
Route::post('/sem/dashboard/attribue', [SemController::class, 'traitementSemAttribueEtudiant'])->name('traitementSemAttribueEtudiant');


/* ---------- RESPONSABLE DE LA PÉDAGOGIE ----------- */