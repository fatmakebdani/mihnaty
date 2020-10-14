<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;
use App\Competence;
use App\Diplome;
use App\PosteCourant;
use App\Experience;
use Auth;
use App\User;
use App\Professionnel;
use App\Fichee;
use App\Employe;
use App\Jury;
use Illuminate\Support\Facades\Storage;
use Spatie\Searchable\Search;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
{
        $offres = Offre::all();
       
            //->groupBy('at')
            //->orderBy(\Offre::raw('count(cat)', 'DESC'))
            //->take(3)
            //->lists('cat');
          
  
        return view('welcome',compact('offres'));
    }
}
