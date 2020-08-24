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
}
