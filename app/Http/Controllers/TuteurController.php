<?php

namespace App\Http\Controllers;

use App\Models\Tuteur;
use Illuminate\Http\Request;
use App\Models\TuteurEvalueGroupe;
use App\Models\TuteurEvalueEtudiant;
use Illuminate\Support\Facades\Hash;

class TuteurController extends Controller
{
    public function index()
  {
    return view('tuteur.index');
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
      'contact' => 'required|string|max:255',
      'email' => 'required|email|max:255',
      'mdp' => 'required'
    ]);
    $tuteur = new Tuteur;
    $tuteur->nom = $request->input('nom');
    $tuteur->prenom = $request->input('prenom');
    $tuteur->contact = $request->input('contact');
    $tuteur->email = $request->input('email');
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
    $tuteur_evalue_groupes = TuteurEvalueGroupe::all();
    return view('tuteur.groupe', compact('tuteur_evalue_groupes'));
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
    $tuteur_evalue_etudiant->qualite_taches = $request->input('ampleurQualiteTachesRealisees');
    $tuteur_evalue_etudiant->prise_initiatives = $request->input('priseInitiatives');
    $tuteur_evalue_etudiant->connaitre_projet = $request->input('connaitreProjet');
    $tuteur_evalue_etudiant->repondre_questions = $request->input('savoirRepondreQuestions');
    $tuteur_evalue_etudiant->note_individuelle = $request->input('noteIndividuelle');
    $tuteur_evalue_etudiant->note_definitive = $request->input('noteDefinitiveEtudiant');
    $tuteur_evalue_etudiant->observations_individuelle = $request->input('observationsIndividuelle');
    $tuteur_evalue_etudiant->save();
    return back()->with("successAdd", 'Note enregistrée avec succès.');
   
  }
 



















  public function tuteurCreeGroupe()
  {
  //   $tuteur_cree_groupes = TuteurCreeGroupe::all();
  //   return view('tuteur.creergroupe', compact('tuteur_cree_groupes'));
   }

  public function traitementTuteurCreeGroupe(Request $request)
  {
    // Validation des données
    //$request->validate([
      // 'groupname' => 'required|string|max:255',
      // 'specialty' => 'required|string|max:255',
      // 'studentnumbers' => 'required|integer|max:20',
      // 'tutorsname' => 'required|string|max:255'
    //]);

    // $tuteur_cree_groupe = new TuteurCreeGroupe;
    // $tuteur_cree_groupe->nom_du_groupe = $request->input('groupname');
    // $tuteur_cree_groupe->specialite = $request->input('specialty');
    // $tuteur_cree_groupe->nombre_d_etudiants = $request->input('studentnumbers');
    // $tuteur_cree_groupe->nom_du_tuteur = $request->input('tutorsname');
    // $tuteur_cree_groupe->save();
    // return back()->with("successAdd", 'Le groupe a été créé avec succès.');
  }
















  

  public function tuteurAttribueRole()
  {
    // $tuteur_attribue_roles = TuteurAttribueRole::all();
    // return view('tuteur.role', compact('tuteur_attribue_roles'));
  }

  public function traitementTuteurAttribueRole(Request $request)
  {
    // Validation des données
    //$request->validate([
      // 'groupname' => 'required|string|max:255',
      // 'studentname' => 'required|string|max:255',
      // 'assignedrole' => 'required|string|max:255',
    //]);

    // $tuteur_attribue_role = new TuteurAttribueRole;
    // $tuteur_attribue_role->nom_du_groupe = $request->input('groupname');
    // $tuteur_attribue_role->etudiant = $request->input('studentname');
    // $tuteur_attribue_role->role_attribue = $request->input('assignedrole');
    // $tuteur_attribue_role->save();
    // return back()->with("successAdd", 'Le rôle a été attribué avec succès.');
  }

  public function tuteurRapport()
  {
    // $tuteur_rapports = TuteurRapport::all();
    // return view('tuteur.rapport', compact('tuteur_rapports'));
  }

  public function traitementTuteurRapport(Request $request)
  {
    // $request->validate([
    //   'title' => 'required|string|max:255',
    //   'file' => 'required|mimes:docx,xlsx,pptx,pdf|max:10000000'
    // ]);

    // $title = $request->input('title');
    // $file = $request->file('file');

    // $fileName = $title . '_' . time() . '.' . $file->getClientOriginalExtension();

    // $path = $file->storeAs('uploads', $fileName);

    // $tuteur_rapport = new TuteurRapport;
    // $tuteur_rapport->nom_du_rapport = $request->input('title');
    // $tuteur_rapport->file = $request->input('file');

    // return back()->with("successAdd", 'Votre rapport a été déposé avec succès.');
  }
}
