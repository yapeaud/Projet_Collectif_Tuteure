<?php

namespace App\Http\Controllers;

use App\Models\Sem;
use Illuminate\Http\Request;
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

    public function traitementSemNoteTuteur()
    {

    }

    public function semGereTuteur()
    {

    }

    public function traitementSemGereTuteur()
    {

    }

    public function semAttribueEtudiant()
    {

    }

    public function traitementSemAttribueEtudiant()
    {
        
    }
}
