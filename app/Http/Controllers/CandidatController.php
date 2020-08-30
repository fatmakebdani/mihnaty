<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Candidat;
use App\Competence;
use App\Diplome;
use App\PosteCourant;
use App\Experience;
use Auth;
use App\User;
use Illuminate\Support\Facades\Storage;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'candidats' => Candidat::where('user_id', Auth::user()->id)->get(),
        ];
        if(Auth::user()->role == 2)
            return view('candidat.index')->with($data);
        else
            return redirect('/candidat'.'/'. Auth::user()->candidat->id . '/edit')->with('error', 'Vous ne pouvez pas accèder à cette page');
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
        return view('candidat.create')->with($data);
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

            'titre' => 'nullable',
            'nom_en_c' => 'nullable',
            'date_debut_c' => 'nullable',
            'date_fin_c' => 'nullable',
            'contrat_c_file' => 'nullable',

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

         //User Image
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

            // make thumbnails
            $thumbStore = 'thumb.'.$filename.'_'.time().'.'.$extension;
            $thumb = Image::make($request->file('image')->getRealPath());
            $thumb->resize(80, 80);
            $thumb->save('storage/user_images/'.$thumbStore);

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

        // Create Candidat
        $candidat = new Candidat;
        $candidat->user_id = $auth->id;
        $candidat->nom = $request->input('nom');
        $candidat->prenom = $request->input('prenom');
        $candidat->email = $request->input('email');
        $candidat->sexe = $request->input('sexe');
        $candidat->tel = $request->input('tel');
        $candidat->dateN = $request->input('date');
        $candidat->save();

         //create experience

        $experience = new Experience;
        $experience->entreprise = $request->input('nom_en');
        $experience->titre = $request->input('titre_en');
        $experience->debut = $request->input('date_debut');
        $experience->fin = $request->input('date_fin');
        $experience->file = $fileNameToStore2;
        $experience->user_id = $auth->id;
        $experience->save();

        //create poste courant

        $poste = new PosteCourant;
        $poste->entreprise = $request->input('nom_en_c');
        $poste->titre = $request->input('titre');
        $poste->debut = $request->input('date_debut_c');
        $poste->fin = $request->input('date_fin_c');
        $poste->file = $fileNameToStore3;
        $poste->user_id = $auth->id;
        $poste->save();

        //create diplome


        $diplome = new Diplome;
        $diplome->titre = $request->input('diplome');
        $diplome->etablisement = $request->input('diplome_en');
        $diplome->debut = $request->input('date_debut_d');
        $diplome->fin = $request->input('date_fin_d');
        $diplome->file = $fileNameToStore4;
        $diplome->user_id = $auth->id;
        $diplome->save();

        //create competence

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

        return redirect('/candidat'.'/'. $candidat->id . '/edit')->with('succes', 'Compte créé avec Succès');

     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Candidat $candidat)
    {
        return redirect('/candidat'.'/'. $candidat->id . '/edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidat $candidat)
    {
        //Check if post exists before deleting
        if (!isset($candidat)){
            return redirect('/candidat'.'/'. $candidat->id . '/edit')->with('error', 'No Post Found');
        }
        // Check for correct user
        if(auth()->user()->id !== $candidat->user_id){
            return redirect('/candidat'.'/'. $candidat->id . '/edit')->with('error', 'Unauthorized Page');
        }
        $data = [
            'candidat' => $candidat,
        ];
        return view('candidat.edit')->with('candidat', $candidat);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidat $candidat)
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

        $candidat->nom = $request->input('nom');
        $candidat->prenom = $request->input('prenom');
        $candidat->email = $request->input('email');
        $candidat->sexe = $request->input('sexe');
        $candidat->tel = $request->input('tel');
        $candidat->dateN = $request->input('date');
        $candidat->save();

        $user = User::find($candidat->user->id);
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



        return redirect('/candidat'.'/'. $candidat->id . '/edit')->with('success', 'Mise à Jour Réussie');


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidat $candidat)
    {
        //
    }
}
