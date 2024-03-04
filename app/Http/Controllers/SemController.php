<?php

namespace App\Http\Controllers;

use App\Models\Sem;
use Illuminate\Http\Request;
use App\Models\SemGereTuteur;

use App\Models\SemNoteTuteur;
use App\Models\SemAttribueEtudiant;
use Illuminate\Support\Facades\Hash;
use function PHPUnit\Framework\returnSelf;

class SemController extends Controller
{
    public function index()
    {
        return view('sem.index');
    }

    public function inscription()
    {
        return view('sem.inscription');
    }
    
    public function traitementInscriptionSem(Request $request)
    {
         //Validation des données
         $request->validate([
            
        ]);
        $sem = new Sem;
        $sem->nom = $request->input('');
        $sem->prenom = $request->input('');
        $sem->contact = $request->input('');
        $sem->email = $request->input('');
        $sem->mot_de_passe  = Hash::make($request->input(''));
        $sem->save();
        return back()->with("successAdd", "Inscription reçue.");
    }

    public function semDashboard()
    {
        return view('sem.dasboard');
    }

    public function listeSem()
    {
        $sems = Sem::all();
        return view('sem.liste', compact('sems'));
    }

    public function semNoteTuteur()
    {
        return view('sem.note');
    }

    public function traitementSemNoteTuteur(Request $request)
    {
        //Validation des données
        $request->validate([
            'specialite' => 'required|string|max:255',
            'choixTuteur' => 'required|string|max:255',
            'note1' => 'required|string|max:255',
            'note2' => 'required|string|max:255',
            'note3' => 'required|string|max:255',
            'note4' => 'required|string|max:255',
            'note5' => 'required|string|max:255',
            'note6' => 'required|string|max:255',
        ]);

        $sem_note_tuteur = new SemNoteTuteur;
        $sem_note_tuteur->specialite = $request->input('specialite');
        $sem_note_tuteur->choix_tuteur = $request->input('choixTuteur');
        $sem_note_tuteur->participation_reunions_techniques = $request->input('note1');
        $sem_note_tuteur->respect_consignes_reunions_administration = $request->input('note2');
        $sem_note_tuteur->respect_calendrier_pct = $request->input('note3');
        $sem_note_tuteur->creation_fichiers_notation_continue_etudiant = $request->input('note4');
        $sem_note_tuteur->evaluation_rapports_etudiants_feedback = $request->input('note5');
        $sem_note_tuteur->total = $request->input('note6');
        $sem_note_tuteur->save();
        return back()->with("successAdd", "La note a été ajouté avec succès.");
    }

    public function semGereTuteur()
    {
        return view('sem.gere');
    }

    public function traitementSemGereTuteur(Request $request)
    {
        //Validation des données
        $request->validate([
            'inputNomTuteur' => 'required|string|max:255',
            'inputPenomTuteur' => 'required|string|max:255',
            'inputEmail' => 'required|string|max:255',
            'inputTel' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
        ]);

        $sem_gere_tuteur = new SemGereTuteur;
        $sem_gere_tuteur->nom_tuteur = $request->input('inputNomTuteur');
        $sem_gere_tuteur->prenom_tuteur = $request->input('inputPenomTuteur');
        $sem_gere_tuteur->email = $request->input('inputEmail');
        $sem_gere_tuteur->telephone = $request->input('inputTel');
        $sem_gere_tuteur->specialite =$request->input('specialite');
        $sem_gere_tuteur->save();
        return back()->with("successAdd", "Soumission reçue.");
    }

    public function semAttribueEtudiant()
    {
        return view('sem.attribue');
    }

    public function traitementSemAttribueEtudiant(Request $request)
    {
        //Validation des données
        $request->validate([
            'inputNomTuteur' => 'required|string|max:255',
            'inputPenomTuteur' => 'required|string|max:255',
            'inputNomEtudiant' => 'required|string|max:255',
            'inputPenomEtudiant' => 'required|string|max:255',
        ]);

        $sem_attribue_etudiant = new SemAttribueEtudiant;
        $sem_attribue_etudiant->nom_tuteur = $request->input('inputNomTuteur');
        $sem_attribue_etudiant->prenom_tuteur = $request->input('inputPenomTuteur');
        $sem_attribue_etudiant->nom_etudiant = $request->input('inputNomEtudiant');
        $sem_attribue_etudiant->prenom_etudiant = $request->input('inputPenomEtudiant');
        $sem_attribue_etudiant->save();
        return back()->with("successAdd", "Soumission reçue.");
    }
}
