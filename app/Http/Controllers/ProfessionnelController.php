<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessionnelController extends Controller
{
    //
      public function index()
    {
        return view('professionnel');
    }
     public function ficheE()
    {
        return view('MaFicheE');
    }
      public function mesExaminations()
    {
        return view('MesExaminations');
    }
    public function create(){
      return view('ficheE.create');
    }
    public function store(Request $request){
      $fichee = new fichee();
      $fichee->nom = $request->input('nom');
      $fichee->raison_sociale=$request->input('raison sociale');
      $fichee->photo=$request->input('photo');
      $fichee->adresse = $request->input('adresse');
      $fichee->num = $request->input('num');
      $fichee->site = $request->input('site');
       $fichee->code_postal=$request->input('code postal');
      $fichee->date_creation=$request->input('date de création');
      $fichee->nature_activité = $request->input('nature activite');
      $fichee->representant = $request->input('representant');
      $fichee->site = $request->input('site');
      $professionnel->save();
      return redirect('MaFicheE');
}
