<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
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
use Illuminate\Support\Facades\Storage;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $offres = Offre::all();
        //return Post::where('title', 'Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        //$posts = Post::orderBy('title','desc')->get();
         $nbr=  Offre::count();

        $offres = Offre::orderBy('created_at','desc')->paginate(10);
       return view ('lesOffres',compact('offres','nbr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $user= Auth::user();
        $data = [
            'user' => $user,
        ];
        return view('offre.mesPropositions')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { $auth = Auth::user();
        
        $this->validate($request, [
            
            'titre' => 'required',
            'ville' => 'required',
            'description' => 'required',
            'sexe' => 'required',
            'contrat' => 'required',
            'dernier_delais' => 'required',
            'date_notif' => 'required',
            'date_fonction' => 'required',

            
        ]);
       

        $offre = new Offre;
        $offre->statut = ('ouvert');
        $offre->titre = $request->input('titre');
        $offre->ville = $request->input('ville');
        $offre->cat = $request->input('cat');
        $offre->description = $request->input('description');
        $offre->sexe = $request->input('sexe');
        $offre->salaire=$request->input('salaire');
        $offre->contrat = $request->input('contrat');
        $offre->dernier_delais = $request->input('dernier_delais');
        $offre->date_notif = $request->input('date_notif');
        $offre->date_fonction = $request->input('date_fonction');
        $offre->rec_id = $auth->id;
        $offre->entreprise_id = 
        $offre->save();

        

        return view('offre.mesPropositions')->with('succes', 'Compte créé avec Succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Offre $offre)
    {
        return redirect('/offre'.'/'. $offre->id . '/edit');
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Offre $offre)
    {
        if (!isset($offre)){
            return redirect('/offre'.'/'. $offre->id . 'myModal3')->with('error', 'No Post Found');
        }

        if(auth()->user()->id !== $offre->user_id){
            return redirect('/offre'.'/'. $offre->id . 'myModal3')->with('error', 'Unauthorized Page');
        }

        $data = [
            'offre' => $offre,
        ];
        return view('myModal3')->with('offre', $offre);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offre $offre)
    {
        $this->validate($request, [
            
            'titre' => 'required',
            'ville' => 'required',
            'description' => 'required',
            'sexe' => 'required',
            'contrat' => 'required',
            'dernier_delais' => 'required',
            'date_notif' => 'required',
            'date_fonction' => 'required',

            
        ]);

        
        
        $offre->titre = $request->input('titre');
        $offre->ville = $request->input('ville');
        $offre->description = $request->input('description');
        $offre->sexe = $request->input('sexe');
        $offre->contrat = $request->input('contrat');
        $offre->dernier_delais = $request->input('dernier_delais');
        $offre->date_notif = $request->input('fate_notif');
        $offre->date_fonction = $request->input('date_fonction');
        $offre->save();

     

        return redirect('/offre'.'/'. $offre->id . '/myModal3' )->with('success', 'Mise à Jour Réussie');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
