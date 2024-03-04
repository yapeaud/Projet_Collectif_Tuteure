<?php

namespace App\Http\Controllers;

use App\Models\Tuteur;
use App\Models\CreerGroupe;
use Illuminate\Http\Request;
use App\Models\TuteurRapport;
use App\Models\TuteurCreeGroupe;
use App\Models\TuteurCreerGroupe;
use App\Models\TuteurAttribueRole;
use App\Models\TuteurEvalueGroupe;
use Illuminate\Support\Facades\DB;
use App\Models\TuteurEvalueEtudiant;
use Illuminate\Support\Facades\Hash;
use App\Models\PhaseRealisationProjet;

class TuteurController extends Controller
{
  public function index()
  {
    return view('tuteur.index');
  }

  public function traitementConnexionTuteur(Request $request)
  {
  //   //Validation des données
  //   $request->validate([
  //     'email' => 'required|email|max:255',
  //     'mdp' => 'required|string|min:6',
  // ]);

  // $tableName  = 'tuteurs';//A modifier la table

  // $conn = array(

  //     'email'  =>  $request->input('email'),
  //     'mot_de_passe' => $request->input('mdp')
  // );
  // $user = DB::table($tableName)->where('email', $conn['email'])->first();

  // if ($user && password_verify($conn['mot_de_passe'], $user->mot_de_passe)) {
  //     // Authentification réussie
  //     return redirect()->route('tuteurDasboard');
  // } else {
  //     return redirect()->back()->withErrors(['errors' => 'Email ou mot de passe incorrect.']);
  // }
  }

  public function inscription()
  {
    return view('tuteur.inscription');
  }

  public function traitementInscriptionTuteur(Request $request)
  {
    // Validation des données
    $request->validate([
      'nom' => 'required|string|max:255',
      'prenom' => 'required|string|max:255',
      'email' => 'required|email|max:255',
      'tel' => 'required|string|max:255',
      'specialite' => 'required|string|max:255',
      'mdp' => 'required'
    ]);
    $tuteur = new Tuteur;
    $tuteur->nom_tuteur = $request->input('nom');
    $tuteur->prenom_tuteur = $request->input('prenom');
    $tuteur->email = $request->input('email');
    $tuteur->telephone = $request->input('tel');
    $tuteur->specialite = $request->input('specialite');
    $tuteur->mot_de_passe  = Hash::make($request->input('mdp'));
    $tuteur->save();
    return back()->with("successAdd", "Le tutorat a été intégré avec succès !");
  }

  public function listeTuteur()
  {
    $tuteurs = Tuteur::all();
    return view('tuteur.liste', compact('tuteurs'));
  }

  public function tuteurDasboard()
  {
    return view('tuteur.dashboard');
  }

  public function tuteurEvalueGroupe()
  {
    //$tuteur_evalue_groupes = TuteurEvalueGroupe::all();
    return view('tuteur.groupe');
  }

  public function traitementTuteurEvalueGroupe(Request $request)
  {
    // Validation des données
    $request->validate([
      'gestionConflits' => 'required|integer|max:255',
      'communicationCoordination' => 'required|integer|max:255',
      'ambitionCreativiteProjet' => 'required|integer|max:255',
      'qualiteRealisation' => 'required|integer|max:255',
      'reussiteProjet' => 'required|integer|max:255',
      'rendreCompte' => 'required|integer|max:255',
      'justifierChoix' => 'required|integer|max:255',
      'noteGroupe' => 'required|integer|max:255',
      'observationsGroupe' => 'required|string|max:255',
    ]);

    $tuteur_evalue_groupe = new TuteurEvalueGroupe;
    $tuteur_evalue_groupe->gestion_conflits = $request->input('gestionConflits');
    $tuteur_evalue_groupe->communication_coordination = $request->input('communicationCoordination');
    $tuteur_evalue_groupe->ambition_creativite_projet = $request->input('ambitionCreativiteProjet');
    $tuteur_evalue_groupe->qualite_realisation = $request->input('qualiteRealisation');
    $tuteur_evalue_groupe->reussite_projet = $request->input('reussiteProjet');
    $tuteur_evalue_groupe->savoir_rendre_compte = $request->input('rendreCompte');
    $tuteur_evalue_groupe->savoir_justifier_choix_projet = $request->input('justifierChoix');
    $tuteur_evalue_groupe->note_groupe = $request->input('noteGroupe');
    $tuteur_evalue_groupe->observations_groupe = $request->input('observationsGroupe');
    $tuteur_evalue_groupe->save();
    return back()->with("successAdd", 'Note enregistrée avec succès.');
  }

  public function tuteurEvalueEtudiant()
  {
    //$tuteur_evalue_etudiants = TuteurEvalueEtudiant::all();
    return view('tuteur.etudiant');
  }

  public function traitementTuteurEvalueEtudiant(Request $request)
  {
    // Validation des données
    $request->validate([
      'participationResolutionConflits' => 'required|integer|max:255',
      'implicationCoordination' => 'required|integer|max:255',
      'ampleurQualiteTachesRealisees' => 'required|integer|max:255',
      'priseInitiatives' => 'required|integer|max:255',
      'connaitreProjet' => 'required|integer|max:255',
      'savoirRepondreQuestions' => 'required|integer|max:255',
      'noteIndividuelle' => 'required|integer|max:255',
      'noteDefinitiveEtudiant' => 'required|integer|max:255',
      'observationsIndividuelle' => 'required|string|max:255',
    ]);

    $tuteur_evalue_etudiant = new TuteurEvalueEtudiant;
    $tuteur_evalue_etudiant->resolution_conflits = $request->input('participationResolutionConflits');
    $tuteur_evalue_etudiant->implication_coordination = $request->input('implicationCoordination');
    $tuteur_evalue_etudiant->qualite_taches_realisees = $request->input('ampleurQualiteTachesRealisees');
    $tuteur_evalue_etudiant->prise_initiatives = $request->input('priseInitiatives');
    $tuteur_evalue_etudiant->connaitre_projet = $request->input('connaitreProjet');
    $tuteur_evalue_etudiant->repondre_questions = $request->input('savoirRepondreQuestions');
    $tuteur_evalue_etudiant->note_individuelle = $request->input('noteIndividuelle');
    $tuteur_evalue_etudiant->note_definitive = $request->input('noteDefinitiveEtudiant');
    $tuteur_evalue_etudiant->observations_individuelle = $request->input('observationsIndividuelle');
    $tuteur_evalue_etudiant->save();
    return back()->with("successAdd", 'Note enregistrée avec succès.');
  }

  public function creerGroupe()
  {
    return view('tuteur.creergroupe');
  }

  public function traitemenCreerGroupe(Request $request)
  {
    //validation des données
    $request->validate([
      'codeGroupe' => 'required|string|max:255',
      'nomEtudiant' => 'required|string|max:255',
      'prenomsEtudiant' => 'required|string|max:255',
      'email' => 'required|string|max:255',
      'tel' => 'required|string|max:255',
    ]);

    $tuteur_creer_groupe = new CreerGroupe;
    $tuteur_creer_groupe->code_groupe = $request->input('codeGroupe');
    $tuteur_creer_groupe->nom_etudiant = $request->input('nomEtudiant');
    $tuteur_creer_groupe->prenom_etudiant = $request->input('prenomsEtudiant');
    $tuteur_creer_groupe->email = $request->input('email');
    $tuteur_creer_groupe->telephone = $request->input('tel');
    $tuteur_creer_groupe->save();
    return back()->with("successAdd", 'Enregistrement a été un succès.');
  }


  public function phaseRealisationProjet()
  {
    return view('tuteur.realisationprojet');
  }

  public function traitementPhaseRealisationProjet(Request $request)
  {
    //Validation des données
    $request->validate([
     'inputNomEtudiant' => 'required|string|max:255',
      'phase1' => 'required|string|max:255',
      'phase2' => 'required|string|max:255',
      'phase3' => 'required|string|max:255',
      'phase4' => 'required|string|max:255',
      'phase5' => 'required|string|max:255',
      'phase6' => 'required|string|max:255',
      'phase7' => 'required|string|max:255',
      'phase8' => 'required|string|max:255',
      'phase9' => 'required|string|max:255',
      'phase10' => 'required|string|max:255',
      'phase11' => 'required|string|max:255',
      'phase12' => 'required|string|max:255',
      'phase13' => 'required|string|max:255',
      'phase14' => 'required|string|max:255',
      'phase15' => 'required|string|max:255',
      'phase16' => 'required|string|max:255',
      'phase17' => 'required|string|max:255',
      'phase18' => 'required|string|max:255',
      'phase19' => 'required|string|max:255',
      'phase20' => 'required|string|max:255'
    ]);

    $phase_realisation_projet = new PhaseRealisationProjet;
    $phase_realisation_projet->nom_prenoms_etudiant = $request->input('inputNomEtudiant');
    $phase_realisation_projet->organisation_etudiants_groupes_1 = $request->input('phase1');
    $phase_realisation_projet->organisation_etudiants_groupes_2 = $request->input('phase2');
    $phase_realisation_projet->organisation_etudiants_groupes_3 = $request->input('phase3');
    $phase_realisation_projet->organisation_etudiants_groupes_4 = $request->input('phase4');
    $phase_realisation_projet->enquete_preliminaire_1 = $request->input('phase5');
    $phase_realisation_projet->enquete_preliminaire_2 = $request->input('phase6');
    $phase_realisation_projet->enquete_preliminaire_3 = $request->input('phase7');
    $phase_realisation_projet->enquete_preliminaire_4 = $request->input('phase8');
    $phase_realisation_projet->enquete_preliminaire_5 = $request->input('phase9');
    $phase_realisation_projet->elaboration_matrice_activites_chronologique_groupe_1 = $request->input('phase10');
    $phase_realisation_projet->elaboration_matrice_activites_chronologique_groupe_2= $request->input('phase11');
    $phase_realisation_projet->elaboration_matrice_activites_chronologique_groupe_3 = $request->input('phase12');
    $phase_realisation_projet->elaboration_matrice_activites_chronologique_groupe_4 = $request->input('phase13');
    $phase_realisation_projet->realisation_taches_1 = $request->input('phase14');
    $phase_realisation_projet->realisation_taches_2 = $request->input('phase15');
    $phase_realisation_projet->realisation_taches_3 = $request->input('phase16');
    $phase_realisation_projet->redaction_rapport_activites_1= $request->input('phase17');
    $phase_realisation_projet->redaction_rapport_activites_2 = $request->input('phase18');
    $phase_realisation_projet->redaction_rapport_activites_3 = $request->input('phase19');
    $phase_realisation_projet->redaction_rapport_activites_4 = $request->input('phase20');
    $phase_realisation_projet->save();
    return back()->with("successAdd", 'Enregistrement a été un succès.');
  }

  public function tuteurAttribueRole()
  {
    // $tuteur_attribue_roles = TuteurAttribueRole::all();
     return view('tuteur.role');
  }

  public function traitementTuteurAttribueRole(Request $request)
  {
    //Validation des données
    $request->validate([
    'groupname' => 'required|string|max:255',
    'studentname' => 'required|string|max:255',
    'assignedrole' => 'required|string|max:255',
    ]);

    $tuteur_attribue_role = new TuteurAttribueRole;
    $tuteur_attribue_role->nom_du_groupe = $request->input('groupname');
    $tuteur_attribue_role->etudiant = $request->input('studentname');
    $tuteur_attribue_role->role_attribue = $request->input('assignedrole');
    $tuteur_attribue_role->save();
    return back()->with("successAdd", 'Le rôle a été attribué avec succès.');
  }

  public function tuteurRapport()
  {
     //$tuteur_rapports = TuteurRapport::all();
    return view('tuteur.rapport');
  }

  public function traitementTuteurRapport(Request $request)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'file' => 'required|mimes:docx,xlsx,pptx,pdf|max:10000000'
    ]);

    $title = $request->input('title');
    $file = $request->file('file');

    $fileName = $title . '_' . time() . '.' . $file->getClientOriginalExtension();

    $path = $file->storeAs('uploads', $fileName);

    $tuteur_rapport = new TuteurRapport;
    $tuteur_rapport->nom_du_rapport = $request->input('title');
    $tuteur_rapport->file = $request->input('file');

    return back()->with("successAdd", 'Votre rapport a été déposé avec succès.');
  }
}
