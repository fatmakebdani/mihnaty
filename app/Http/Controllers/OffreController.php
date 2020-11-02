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
use App\Employe;
use App\Jury;
use App\Candidature;
use App\Evaluation;
use Illuminate\Support\Facades\Storage;
use Spatie\Searchable\Search;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$offres = Offre::all();
        $offres = Offre::select('*')
        ->where([
            ['vérification','acceptée'],
            ['statut','ouverte']
        ])->get();
        //return Post::where('title', 'Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        //$posts = Post::orderBy('title','desc')->get();
         $nbr = Offre::select('*')
        ->where([
            ['vérification','acceptée'],
            ['statut','ouverte']
        ])->count();
         //$fichee=$offre

       // $offres = Offre::orderBy('created_at','desc')->paginate(10);
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
            'professionnels'=>Professionnel::all(),
               'mesOffres'=>  Offre::select('*')
        ->where([
            ['vérification','acceptée'],
            ['user_id',$user->id]
               ])
        ->get(),
         'offreA'=> Offre::select('*')
        ->where([
            ['vérification','acceptée'],
            ['user_id',$user->id]
               ])
        ->count(),
         'mesOffresR'=>  Offre::select('*')
        ->where([
            ['vérification','refusée'],
            ['user_id',$user->id]
               ])
        ->get(),
         'offreR'=> Offre::select('*')
        ->where([
            ['vérification','refusée'],
            ['user_id',$user->id]
               ])
        ->count(),
        'mesOffresS'=>  Offre::select('*')
        ->where([
            ['vérification','suspendue'],
            ['user_id',$user->id]
               ])
        ->get(),
         'offreS'=> Offre::select('*')
        ->where([
            ['vérification','suspendue'],
            ['user_id',$user->id]
               ])
        ->count(),
        'candidats' => Candidature::all(),
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
        //$prof   = Professionnel::where('nom','kebdani');
        //$entreprise = Employe::where('id_professionnel','$prof')->get('id_entreprise');
        
        $this->validate($request, [
            
            'titre' => 'required',
            'ville' => 'required',
            'description' => 'required',
            'sexe' => 'required',
            'contrat' => 'required',
            'dernier_delais' => 'required',
            'date_examination' => 'required',
            'date_notif' => 'required',
            'date_fonction' => 'required',

            ]);
       
       

        $offre = new Offre;
        $offre->statut = ('ouverte');
        $offre->vérification = ('suspendue');
        $offre->titre = $request->input('titre');
        $offre->ville = $request->input('ville');
        $offre->cat = $request->input('cat');
        $offre->description = $request->input('description');
        $offre->sexe = $request->input('sexe');
        $offre->salaire=$request->input('salaire');
        $offre->contrat = $request->input('contrat');
        $offre->dernier_delais = $request->input('dernier_delais');
        $offre->date_examination = $request->input('date_examination');
        $offre->date_notif = $request->input('date_notif');
        $offre->date_fonction = $request->input('date_fonction');
        $offre->user_id = $auth->id;
        $offre->save();
        foreach ($request->input('jurys') as $jur) {
           $jury = new Jury;
           $jury->offre_id = $offre->id;
           $jury->professionnel_id = intval($jur);
           $jury->save();
            $user= Auth::user();
}  $data = [
            'user' => $user,
            'professionnels'=>Professionnel::all(),
               'mesOffres'=>  Offre::select('*')
        ->where([
            ['vérification','acceptée'],
            ['user_id',$user->id]
               ])
        ->get(),
         'offreA'=> Offre::select('*')
        ->where([
            ['vérification','acceptée'],
            ['user_id',$user->id]
               ])
        ->count(),
         'mesOffresR'=>  Offre::select('*')
        ->where([
            ['vérification','refusée'],
            ['user_id',$user->id]
               ])
        ->get(),
         'offreR'=> Offre::select('*')
        ->where([
            ['vérification','refusée'],
            ['user_id',$user->id]
               ])
        ->count(),
        'mesOffresS'=>  Offre::select('*')
        ->where([
            ['vérification','suspendue'],
            ['user_id',$user->id]
               ])
        ->get(),
         'offreS'=> Offre::select('*')
        ->where([
            ['vérification','suspendue'],
            ['user_id',$user->id]
               ])
        ->count(),
        'candidats' => Offre::all(),
        ];
        

        return view('offre.mesPropositions')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Offre $offre)
    {
    
        

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
        
    }
    public function mesPropositions()
    {
        $user= Auth::user();
        $data = [
            'user' => $user,
            'professionnels'=>Professionnel::all(),
               'mesOffres'=>  Offre::select('*')
        ->where([
            ['vérification','acceptée'],
            ['user_id',$user->id]
               ])
        ->get(),
         'offreA'=> Offre::select('*')
        ->where([
            ['vérification','acceptée'],
            ['user_id',$user->id]
               ])
        ->count(),
         'mesOffresR'=>  Offre::select('*')
        ->where([
            ['vérification','refusée'],
            ['user_id',$user->id]
               ])
        ->get(),
         'offreR'=> Offre::select('*')
        ->where([
            ['vérification','refusée'],
            ['user_id',$user->id]
               ])
        ->count(),
        'candidats'=> Candidature::all(),
        'evaluations'=>Evaluation::all(),
        
        ];
         return view('offre.mesPropositions')->with($data);
    }
   
     public function supprimerOffre($id)
    { $user= Auth::user();
        $data = [
            'user' => $user,
            'professionnels'=>Professionnel::all(),
               'mesOffres'=>  Offre::select('*')
        ->where([
            ['vérification','acceptée'],
            ['user_id',$user->id]
               ])
        ->get(),
         'offreA'=> Offre::select('*')
        ->where([
            ['vérification','acceptée'],
            ['user_id',$user->id]
               ])
        ->count(),
         'mesOffresR'=>  Offre::select('*')
        ->where([
            ['vérification','refusée'],
            ['user_id',$user->id]
               ])
        ->get(),
         'offreR'=> Offre::select('*')
        ->where([
            ['vérification','refusée'],
            ['user_id',$user->id]
               ])
        ->count(),
        ];
         $offre = Offre::where('id',$id)->first();
         if ($offre != null) {
        $offre->delete();
       return view('offre.mesPropositions')->with($data);
    }
       
         return view('offre.mesPropositions')->with($data);
    }
    public function categories()
    {
        $cats = Offre::select('*')
        ->where([
            ['vérification','acceptée'],
            ['statut','ouverte']
        ])->get();
            //->groupBy('vat')
            //->orderBy(\Offre::raw('count(cat)', 'DESC'))
            //->take(3)
            //->lists('cat');
            return view('welcome',compact('cats'));
    }
    public function candidats($id)
    {
     $candidats= Candidature::select("*")
     ->where('offre_id',$id)
     ->get();
     return view('myModal5',compact('candidats'));
    }

}
