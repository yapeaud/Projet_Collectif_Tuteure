<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Models\EtudiantRapport;
use App\Models\EtudiantEvalueMembre;
use App\Models\EtudiantEvalueTuteur;
use Illuminate\Support\Facades\Hash;

class EtudiantController extends Controller
{
    public function index()
    {
        return view('etudiant.index');
    }

    public function inscription()
    {
        return view('etudiant.inscription');
    }

    public function traitementInscriptionEtudiant(Request $request)
    {
        //Validation des donnéest
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mdp' => 'required'
        ]);

        $etudiant = new Etudiant;
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->contact = $request->input('contact');
        $etudiant->email = $request->input('email');
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

    public function etudiantEvalueTuteur()
    {
        $etudiant_evalue_tuteurs = EtudiantEvalueTuteur::all();
        return view('etudiant.tuteur', compact('etudiant_evalue_tuteurs'));
    }

    public function etudiantEvalueMembre()
    {
        //$etudiant_evalue_membres = EtudiantEvalueMembre::all();
       return view('etudiant.membre');
    }

    public function traitementEtudiantEvalueMembre(Request $request)
    {
        //Validation des données
        $request->validate([
            'nomEtudiant' => 'required|string|max:255',
            'prenomEtudiant' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'noteMembre' => 'required|string|max:20',
        ]);
        $etudiant_evalue_membre = new EtudiantEvalueMembre;
        $etudiant_evalue_membre->nom = $request->input('nomEtudiant');
        $etudiant_evalue_membre->prenom = $request->input('prenomEtudiant');
        $etudiant_evalue_membre->specialite = $request->input('specialite');
        $etudiant_evalue_membre->note = $request->input('noteMembre');
        $etudiant_evalue_membre->save();
        return back()->with("successAdd", 'Note enregistrée avec succès.');
    }

    public function traitementEtudiantEvalueTuteur(Request $request)
    {
        //Validation des données
        $request->validate([[
            'inputEmail' => 'required|string|max:255',
            'nomTuteur' => 'required|string|max:255',
            'presentationProjet' => 'required|string|max:255',
            'definitionPhases' => 'required|string|max:20',
            'ressourcesExplicatives' => 'required|string|max:255',
            'convocationGroupes' => 'required|string|max:20',
            'etatAvancementGroupe' => 'required|string|max:255',
            'interetTravaux' => 'required|string|max:20',
            'solutionNousMeme' => 'required|string|max:255',
            'verifieNosSolutionsNousRecadre' => 'required|string|max:20',
            'tempsSeance' => 'required|string|max:255',
            'creerGroupes' => 'required|string|max:20',
            'collaborationMembresGroupe' => 'required|string|max:255',
            'tenuReunions' => 'required|string|max:20',
            'consulteEtatAvancementProjet' => 'required|string|max:255',
            'interetProjet' => 'required|string|max:20',
            'stimuleReflexion' => 'required|string|max:255',
            'aplanirConflits' => 'required|string|max:20',
            'repondreQuestions' => 'required|string|max:255',
            'reponsesSatisfaisantes' => 'required|string|max:255',
            'recommander' => 'required|string|max:20',
            'noteTuteur' => 'required|string|max:255',
            'autreTuteur' => 'required|string|max:20',
            'indiquerNom' => 'string|max:255',
            'noteSur20' => 'required|string|max:20',
        ]]);

        $etudiant_evalue_tuteur = new EtudiantEvalueTuteur;
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation1');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse1');
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation2');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse2');
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation3');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse3');
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation4');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse4');
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation5');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse5');
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation6');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse6');
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation7');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse7');
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation8');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse8');
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation9');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse9');
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation10');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse10');
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation11');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse11');
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation12');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse12');
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation13');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse13');
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation14');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse14');
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation15');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse15');
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation16');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse16');
        $etudiant_evalue_tuteur->appreciation = $request->input('choixAppreciation17');
        $etudiant_evalue_tuteur->reponses_possibles = $request->input('choixReponse17');
        $etudiant_evalue_tuteur->save();
        return back()->with("successAdd", 'Note enregistrée avec succès.');
    }

    public function etudiantRapport()
    {
        $etudiant_rapports = EtudiantRapport::all();
        return view('etudiant.rapport', compact('etudiant_rapports'));
    }

    public function traitementEtudiantRapport(Request $request)
    {
        //Validation des données

        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|mimes:docx,xlsx,pptx,sgl,pdf|max:10000000'
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
