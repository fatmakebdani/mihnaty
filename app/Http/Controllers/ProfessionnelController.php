<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Professionnel;
use App\Competence;
use App\Diplome;
use App\PosteCourant;
use App\Experience;
use Auth;
use App\User;
use App\Candidature;
use App\Jury;
use App\Offre;
use App\Fichee;
use App\Evaluation;
use App\Attribution;
use Illuminate\Support\Facades\Storage;

class ProfessionnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'professionnels' => Professionnel::where('user_id', Auth::user()->id)->get(),
        ];
        if(Auth::user()->role == 1)
            return view('professionnel.index')->with($data);
        else
            return redirect('/professionnel'.'/'. Auth::user()->professionnel->id . '/edit')->with('error', 'Vous ne pouvez pas accèder à cette page');
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
        return view('professionnel.create')->with($data);
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
            'image' => 'image|nullable|max:1999',
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'date' => 'required',

            'nom_en' => 'required',
            'titre_en' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'contrat_file' => 'required',

            'titre' => 'required',
            'nom_en_c' => 'required',
            'date_debut_c' => 'required',
            'date_fin_c' => 'required',
            'contrat_c_file' => 'required',

            'diplome' => 'required',
            'diplome_en' => 'required',
            'date_debut_d' => 'required',
            'date_fin_d' => 'required',
            'diplome_file' => 'required',

            'competence' => 'required',

        ]);
        $auth = Auth::user();

        // User image
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore1= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/user_images', $fileNameToStore1);

        }
        else {
            $fileNameToStore1 = 'noimage.jpg';
        }

        //EXPERIENCE IMAGE
        // make thumbnails

        // Get filename with the extension
        $filenameWithExt = $request->file('contrat_file')->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('contrat_file')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore2= $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('contrat_file')->storeAs('public/experience', $fileNameToStore2);


        //Contrat IMAGE
        // Get filename with the extension
        $filenameWithExt = $request->file('contrat_c_file')->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('contrat_c_file')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore3= $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('contrat_c_file')->storeAs('public/contrat_courant', $fileNameToStore3);

        //DIPLOME IMAGE
        // Get filename with the extension
        $filenameWithExt = $request->file('diplome_file')->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('diplome_file')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore4= $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('diplome_file')->storeAs('public/diplome', $fileNameToStore4);


        // Create Post
        $professionnel = new Professionnel;
        $professionnel->user_id = $auth->id;
        $professionnel->nom = $request->input('nom');
        $professionnel->prenom = $request->input('prenom');
        $professionnel->email = $request->input('email');
        $professionnel->sexe = $request->input('sexe');
        $professionnel->tel = $request->input('tel');
        $professionnel->dateN = $request->input('date');
        $professionnel->save();

        $experience = new Experience;
        $experience->entreprise = $request->input('nom_en');
        $experience->titre = $request->input('titre_en');
        $experience->debut = $request->input('date_debut');
        $experience->fin = $request->input('date_fin');
        $experience->file = $fileNameToStore2;
        $experience->user_id = $auth->id;
        $experience->save();

        $poste = new PosteCourant;
        $poste->entreprise = $request->input('nom_en_c');
        $poste->titre = $request->input('titre');
        $poste->debut = $request->input('date_debut_c');
        $poste->fin = $request->input('date_fin_c');
        $poste->file = $fileNameToStore3;
        $poste->user_id = $auth->id;
        $poste->save();

        $diplome = new Diplome;
        $diplome->titre = $request->input('diplome');
        $diplome->etablisement = $request->input('diplome_en');
        $diplome->debut = $request->input('date_debut_d');
        $diplome->fin = $request->input('date_fin_d');
        $diplome->file = $fileNameToStore4;
        $diplome->user_id = $auth->id;
        $diplome->save();

        $competence = new Competence;
        $competence->titre = $request->input('competence');
        $competence->user_id = $auth->id;
        $competence->save();

        $user = User::find($auth->id);
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->user_photo = $fileNameToStore1;
        $user->save();

        return redirect('/professionnel'.'/'. $professionnel->id . '/edit')->with('succes', 'Compte créé avec Succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Professionnel  $professionnel
     * @return \Illuminate\Http\Response
     */
    public function show(Professionnel $professionnel)
    {
        return redirect('/professionnel'.'/'. $professionnel->id . '/edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Professionnel  $professionnel
     * @return \Illuminate\Http\Response
     */
   public function edit(Professionnel $professionnel)
    {


        //Check if post exists before deleting
        if (!isset($professionnel)){
            return redirect('/professionnel'.'/'. $professionnel->id . '/edit')->with('error', 'No Post Found');
        }

        // Check for correct user
        if(auth()->user()->id !== $professionnel->user_id){
            return redirect('/professionnel'.'/'. $professionnel->id . '/edit')->with('error', 'Unauthorized Page');
        }
       

        $data = [
            'professionnel' => $professionnel,
            'experiences' => Experience::where('user_id', Auth::user()->id)->get(),
            'fiche' =>Fichee::where('user_id', Auth::user()->id)->first(),
               ];
        return view('professionnel.edit')->with( $data);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professionnel  $professionnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professionnel $professionnel)
    {

        $this->validate($request, [
            'image' => 'image|nullable|max:1999',
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'date' => 'required',


        ]);

        $professionnel->nom = $request->input('nom');
        $professionnel->prenom = $request->input('prenom');
        $professionnel->email = $request->input('email');
        $professionnel->sexe = $request->input('sexe');
        $professionnel->tel = $request->input('tel');
        $professionnel->dateN = $request->input('date');
        $professionnel->save();

        $user = User::find($professionnel->user->id);
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        // User image
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore1= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/user_images', $fileNameToStore1);
            // Delete file if exists
            Storage::delete('public/user_images/'.$user->user_photo);
            $user->user_photo = $fileNameToStore1;

        }

        $user->save();

    

        $poste = PosteCourant::find($user->poste_courant->id);
        $poste->entreprise = $request->input('nom_en_c');
        $poste->titre = $request->input('titre');
        $poste->debut = $request->input('date_debut_c');
        $poste->fin = $request->input('date_fin_c');
        //Contrat IMAGE

        if($request->hasFile('contrat_c_file')){
            // Get filename with the extension
            $filenameWithExt = $request->file('contrat_c_file')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('contrat_c_file')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore3= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('contrat_c_file')->storeAs('public/contrat_courant', $fileNameToStore3);
            Storage::delete('public/contrat_courant/'.$poste->file);
            $poste->file = $fileNameToStore3;

        }
        $poste->save();


       



        return redirect('/professionnel'.'/'. $professionnel->id . '/edit')->with('success', 'Mise à Jour Réussie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professionnel  $professionnel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professionnel $professionnel)
    {
        //
    }
     public function afficherExaminations()
    {
        $auth = Auth::user();
        $prof = Professionnel::where('user_id',$auth->id)->first();
        $jury= Jury::where('professionnel_id',$prof->id)->get();
         $data = [
        
            'jurys'=>Jury::select('*')
        ->where([
            ['professionnel_id',$prof->id]
               ])
        ->get(),
         'nbrE'=> Jury::select('*')
        ->where([
            ['professionnel_id',$prof->id]
               ])
        ->count(),
        'candidats'=>Candidature::all(),
        'examination'=> Evaluation::where('jury_id',$prof->id)->first(),
    ];
        ///$candidatures = Candidature::where('candidat_id',$auth->id)->get();
       // $candidatures = Offre::where('id',$offres->offre_id)->get();
       // $offres= Offre::all();
        //$candidatures= $offres::where([
            //['id_candidat',$auth->id],
           // ['id_offre',$offres->id]

       // ])->get();
        
        return view('MesExaminations')->with($data);
        
    }
    public function changerStatut($id)
    {
       Offre::where('id',$id)->update(['statut'=>'cloturée']);
        return redirect('mesPropositions');
    }
     public function passerExamination($id)
    {
       Offre::where('id',$id)->update(['statut'=>'en_cours_examination']);
        return redirect('mesPropositions');
    }
      public function fermerExamination($id)
    {
       Offre::where('id',$id)->update(['statut'=>'examination_finalisée']);
        return redirect('mesPropositions');
    }
    public function Evaluer(Request $request,$id)
    {   $jury = Jury::where('id',$id)->first();
        $auth = Auth::user();
        $prof = Professionnel::where('user_id',$auth->id)->first();
        $evaluation= new Evaluation;
        
        $evaluation->jury_id = $prof->id;
        $evaluation->candidature_id = $request->input('candidature_id');
        $evaluation->save();
        return redirect('MesExaminations');

    }
     public function Changer(Request $request,$id)
    {  $auth = Auth::user();
        $prof = Professionnel::where('user_id',$auth->id)->first();
        $jury = Jury::where('professionnel_id',$prof->id)->first();
      $evaluation = Evaluation::where([['jury_id',$jury->id],['candidature_id',$id]])->first();
        $auth = Auth::user();
        $prof = Professionnel::where('user_id',$auth->id)->first();
        $evaluation->candidature_id = $request->input('candidature_id');
        $evaluation->update();
        return redirect('MesExaminations');

    }
      public function Attribuer(Request $request,$id)
    {   Offre::where('id',$id)->update(['statut'=>'attribuée']);

        $candidatureE = $request->input('candidature_id');
        $candidat=Candidature::where('id',$candidatureE)->first();
         $attribution= new Attribution;
        
        $attribution->offre_id = $id;
        $attribution->candidat_id=$candidat->candidat_id;
        $attribution->save();
    
        return redirect('mesPropositions');

    }
   
}