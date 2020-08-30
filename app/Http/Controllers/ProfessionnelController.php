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

            'insta' => 'nullable',
            'linkedin' => 'nullable',
            'portfolio' => 'nullable',
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
        $user->insta = $request->input('insta');
        $user->linkedin = $request->input('linkedin');
        $user->portfolio = $request->input('portfolio');
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
        ];
        return view('professionnel.edit')->with('professionnel', $professionnel);
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

            'insta' => 'nullable',
            'linkedin' => 'nullable',
            'portfolio' => 'nullable',
        ]);

        $professionnel->nom = $request->input('nom');
        $professionnel->prenom = $request->input('prenom');
        $professionnel->email = $request->input('email');
        $professionnel->sexe = $request->input('sexe');
        $professionnel->tel = $request->input('tel');
        $professionnel->dateN = $request->input('date');
        $professionnel->save();

        $user = User::find($professionnel->user->id);
        $user->insta = $request->input('insta');
        $user->linkedin = $request->input('linkedin');
        $user->portfolio = $request->input('portfolio');
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

        for ($i=1; $i <= $user->experiences->count() ; $i++) {
            $experience = Experience::find(intval($request->input('experience_id_'.$i)));
            $experience->entreprise = $request->input('nom_en_'.$i);
            $experience->titre = $request->input('titre_en_'.$i);
            $experience->debut = $request->input('date_debut_'.$i);
            $experience->fin = $request->input('date_fin_'.$i);
            //EXPERIENCE IMAGE
            // make thumbnails

            if($request->hasFile('contrat_file'.$i)){
                // Get filename with the extension
                $filenameWithExt = $request->file('contrat_file_'.$i)->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('contrat_file_'.$i)->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore2= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('contrat_file_'.$i)->storeAs('public/experience', $fileNameToStore2);
                Storage::delete('public/experience/'.$experience->file);
                $experience->file = $fileNameToStore2;

            }
            $experience->save();
        }

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


        for ($i=1; $i <= $user->diplomes->count() ; $i++) {
            //DIPLOME IMAGE
            $diplome = Diplome::find(intval($request->input('diplome_id_'.$i)));
            $diplome->titre = $request->input('diplome_'.$i);
            $diplome->etablisement = $request->input('diplome_en_'.$i);
            $diplome->debut = $request->input('date_debut_d_'.$i);
            $diplome->fin = $request->input('date_fin_d_'.$i);

            // Get filename with the extension
            if($request->hasFile('diplome_file_'.$i)){
                Storage::delete('public/diplome/'.$diplome->file);
                // Get filename with the extension
                $filenameWithExt = $request->file('diplome_file_'.$i)->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('diplome_file_'.$i)->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore4= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('diplome_file_'.$i)->storeAs('public/diplome', $fileNameToStore4);
                $diplome->file = $fileNameToStore4;

            }

            $diplome->save();
        }

        for ($i=1; $i <= $user->competences->count() ; $i++) {
            $competence = Competence::find(intval($request->input('competence_id_'.$i)));
            $competence->titre = $request->input('competence_'.$i);
            $competence->save();
        }



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

}
