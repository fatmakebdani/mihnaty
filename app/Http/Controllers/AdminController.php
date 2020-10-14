<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;
use App\Fichee;
use App\Refus;
class AdminController extends Controller
{
    //
      public function index()
    {   $offres = Offre::where('vérification','suspendue')->get();
        $entreprises = Fichee::where('vérification','suspendu')->get();
        return view('admin',compact('offres','entreprises'));
    }
    public function offre()
    {
    	 $data = [
            'offre' => $offre,
        ];
        return view('myModal3')->with('offre', $offre);
    }
    public function accepterOffre($id)
    {
    	Offre::where('id',$id)->update(['vérification'=>'acceptée']);
    	return redirect('admin');
    }
     public function refuserOffre($id)
    {
    	Offre::where('id',$id)->update(['vérification'=>'refusée','motif'=>$raison]);
    	return redirect('admin');
    }

     public function accepterFichee($id)
    {
        Fichee::where('id',$id)->update(['vérification'=>'valide']);
        return redirect('admin');
    }
     public function refuserFichee($id)
    {
        Fichee::where('id',$id)->update(['vérification'=>'invalide']);
        return redirect('admin');
    }
        public function refus(Request $request,$id) {
        $this->validate($request, [
           'motif' => 'required',
        ]);
      
     $refus = new Refus;
           $refus->offre_id = $id;
           $refus->motif = $request->input('motif');
           $refus->save();
            Offre::where('id',$id)->update(['vérification'=>'refusée']);
    return redirect('admin');

}
}
