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

        $offres = Offre::orderBy('created_at','desc')->paginate(10);
        return view('offres')->with('offres', $offres);
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
        return view('myModal1')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $auth = Auth::user();

        $offre = new Offre;
        $offre->user_id = $auth->id;
        $offre->id_entreprise = '1';
        $offre->statut = ('ouvert');
        $offre->titre = $request->input('titre');
        $offre->ville = $request->input('ville');
        $offre->description = $request->input('description');
        $offre->sexe = $request->input('sexe');
        $offre->contrat = $request->input('contrat');
        $offre->dernier_delais = $request->input('dernier_delais');
        $offre->date_notif = $request->input('date_notif');
        $offre->date_fonction = $request->input('date_fonction');
        $offre->save();

        $user = User::find($auth->id);
        $user->save();

        return redirect('/Professionnel/mesPropositions')->with('succes', 'Compte créé avec Succès');
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
