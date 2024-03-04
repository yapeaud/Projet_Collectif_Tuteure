<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Models\EtudiantRapport;
use Illuminate\Support\Facades\DB;
use App\Models\EtudiantEvalueMembre;
use App\Models\EtudiantEvalueTuteur;
use Illuminate\Support\Facades\Hash;

class EtudiantController extends Controller
{
    public function index()
    {
        return view('etudiant.index');
    }

    public function traitementConnexion(Request $request)
    {
        //Validation des données
        $request->validate([
            'email' => 'required|email|max:255',
            'mdp' => 'required|string|min:6',
        ]);

        $tableName  = 'etudiants'; //A modifier la table

        $conn = array(
            'email'  =>  $request->input('email'),
            'mot_de_passe' => $request->input('mdp')
        );
        $user = DB::table($tableName)->where('email', $conn['email'])->first();

        if ($user && password_verify($conn['mot_de_passe'], $user->mot_de_passe)) {
            // Authentification réussie
            return redirect()->route('etudiantDashboard');
        } else {
            return redirect()->back()->withErrors(['errors' => 'Email ou mot de passe incorrect.']);
        }
    }

    public function inscription()
    {
        return view('etudiant.inscription');
    }

    public function traitementInscriptionEtudiant(Request $request)
    {
        //Validation des données
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tel' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'mdp' => 'required'
        ]);

        $etudiant = new Etudiant;
        $etudiant->nom_etudiant = $request->input('nom');
        $etudiant->prenom_etudiant = $request->input('prenom');
        $etudiant->email = $request->input('email');
        $etudiant->telephone = $request->input('tel');
        $etudiant->specialite = $request->input('specialite');
        $etudiant->mot_de_passe  = Hash::make($request->input('mdp'));
        $etudiant->save();
        return back()->with("successAdd", "Inscription reçue.");
    }

    public function listeEtudiant()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }


    public function groupeEtudiant()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.groupe', compact('etudiants'));
    }

    public function etudiantDashboard()
    {
        return view('etudiant.dashboard');
    }

    public function etudiantEvalueMembre()
    {
        //$etudiant_evalue_membres = EtudiantEvalueMembre::all();
        $membres = Etudiant::all();
        return view('etudiant.membre', compact('membres'));
    }

    public function traitementEtudiantEvalueMembre(Request $request)
    {
        //Validation des données
        $request->validate([
            'nomEtudiant' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'noteMembre' => 'required|string|max:20',
        ]);
        $etudiant_evalue_membre = new EtudiantEvalueMembre;
        $etudiant_evalue_membre->nom_prenoms = $request->input('nomEtudiant');
        $etudiant_evalue_membre->specialite = $request->input('specialite');
        $etudiant_evalue_membre->note = $request->input('noteMembre');
        $etudiant_evalue_membre->save();
        return back()->with("successAdd", 'Note enregistrée avec succès.');
    }

    public function etudiantEvalueTuteur()
    {
        //$etudiant_evalue_tuteurs = EtudiantEvalueTuteur::all();
        return view('etudiant.tuteur');
    }

    public function traitementEtudiantEvalueTuteur(Request $request)
    {
        //Validation des données
        $request->validate([[ 
            'inputEmail' => 'required|string|255',
            'nomTuteur' => 'required|string|255',
            'presentationProjet' => 'required|string|255',
            'definitionPhases' => 'required|string|255',
            'ressourcesExplicatives' => 'required|string|255',
            'convocationGroupes' => 'required|string|255',
            'etatAvancementGroupe' => 'required|string|255',
            'interetTravaux' => 'required|string|255',
            'solutionNousMeme' => 'required|string|255',
            'verifieNosSolutionsNousRecadre' => 'required|string|255',
            'tempsSeance' => 'required|string|255',
            'creerGroupes' => 'required|string|255',
            'collaborationMembresGroupe' => 'required|string|255',
            'tenuReunions' => 'required|string|255',
            'consulteEtatAvancementProjet' => 'required|string|255',
            'interetProjet' => 'required|string|255',
            'stimuleReflexion' => 'required|string|255',
            'aplanirConflits' => 'required|string|255',
            'repondreQuestions' => 'required|string|255',
            'reponsesSatisfaisantes' => 'required|string|255',
            'recommander' => 'required|string|255',
            'noteTuteur' => 'required|string|10',
            'autreTuteur'=> 'required|string|255',
            'indiquerNom'=> 'required|string|255',
            'noteSur20'=> 'required|string|10',
        ]]);

        $etudiant_evalue_tuteur = new EtudiantEvalueTuteur;
        $etudiant_evalue_tuteur->email = $request->input('inputEmail');
        $etudiant_evalue_tuteur->nom_tuteur = $request->input('nomTuteur');
        $etudiant_evalue_tuteur->presentation_projet = $request->input('presentationProjet');
        $etudiant_evalue_tuteur->phase_realisation = $request->input('definitionPhases');
        $etudiant_evalue_tuteur->ressources = $request->input('ressourcesExplicatives');
        $etudiant_evalue_tuteur->reunions = $request->input('convocationGroupes');
        $etudiant_evalue_tuteur->avacement_groupe = $request->input('etatAvancementGroupe');
        $etudiant_evalue_tuteur->interet_travaux = $request->input('interetTravaux');
        $etudiant_evalue_tuteur->trouver_solution = $request->input('solutionNousMeme');
        $etudiant_evalue_tuteur->verifier_solution = $request->input('verifieNosSolutionsNousRecadre');
        $etudiant_evalue_tuteur->duree_seance = $request->input('tempsSeance');
        $etudiant_evalue_tuteur->creation_groupe = $request->input('creerGroupes');
        $etudiant_evalue_tuteur->collaboration = $request->input('collaborationMembresGroupe');
        $etudiant_evalue_tuteur->tenu_reunions = $request->input('tenuReunions');
        $etudiant_evalue_tuteur->consulte_groupe = $request->input('consulteEtatAvancementProjet');
        $etudiant_evalue_tuteur->susciter_mon_interet = $request->input('interetProjet');
        $etudiant_evalue_tuteur->stimuler_reflexion = $request->input('stimuleReflexion');
        $etudiant_evalue_tuteur->aplanir_conflit = $request->input('aplanirConflits');
        $etudiant_evalue_tuteur->disponible_repondre_question = $request->input('repondreQuestions');
        $etudiant_evalue_tuteur->obtenir_reponse = $request->input('reponsesSatisfaisantes');
        $etudiant_evalue_tuteur->recommander_tuteur = $request->input('recommander');
        $etudiant_evalue_tuteur->note = $request->input('noteTuteur');
        $etudiant_evalue_tuteur->autre_tuteur = $request->input('autreTuteur');
        $etudiant_evalue_tuteur->indiquer = $request->input('indiquerNom');
        $etudiant_evalue_tuteur->total = $request->input('noteSur20');
        $etudiant_evalue_tuteur->save();
        return back()->with("successAdd", 'Note enregistrée avec succès.');
    }

    public function etudiantRapport()
    {
        //$etudiant_rapports = EtudiantRapport::all();
        return view('etudiant.rapport');
    }

    public function traitementEtudiantRapport(Request $request)
    {
        //Validation des données

        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|mimes:docx,xlsx,pptx,sql,pdf|max:10000000'
        ]);

        $title = $request->input('title');
        $file = $request->file('file');

        $fileName = $title . '_' . time() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs('uploads', $fileName);

        $etudiant_rapport = new EtudiantRapport;
        $etudiant_rapport->nom_du_rapport = $request->input('title');
        $etudiant_rapport->file = $request->input('file');

        return back()->with("successAdd", 'Votre rapport a été déposé.');
    }
}
