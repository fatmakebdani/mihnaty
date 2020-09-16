<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Fichee;
use App\Professionnel;
use Auth;
use App\User;
use App\Employe;
use Illuminate\Support\Facades\Storage;

class FicheeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('fiches entreprises');
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
        ];
        return view('fichee.create')->with($data);
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
            'photo' => 'image|nullable|max:1999',
            'nom' => 'required',
            'adresse' => 'required',
            'code_postal' => 'required',
            'site' => 'required',
            'num' => 'required',
            'date_de_creation' => 'required',
            'raison_sociale' => 'required',
            'activité' =>'required',
             

        ]);
        //return $request->input('employes');
        $auth = Auth::user();
        

        // User image
        if($request->hasFile('photo')){
            // Get filename with the extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('photo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore5= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('photo')->storeAs('public/user_images', $fileNameToStore5);

        }
        else {
            $fileNameToStore5 = 'noimage.jpg';
        }

        //EXPERIENCE IMAGE
        // make thumbnails

        // Get filename with the extension


        // Create Post
        $fichee = new Fichee;
        $fichee->user_id = $auth->id;
        $fichee->nom = $request->input('nom');
        $fichee->adresse = $request->input('adresse');
        $fichee->site = $request->input('site');
        $fichee->code_postal = $request->input('code_postal');
        $fichee->num = $request->input('num');
        $fichee->date_de_creation = $request->input('date_de_creation');
        $fichee->raison_sociale = $request->input('raison_sociale');
        $fichee->activité = $request->input('activité');
        $fichee->id_gerant = $request->input('id_gerant');
        $fichee->photo = $fileNameToStore5;
        $fichee->save();

        foreach ($request->input('employes') as $emp) {
           $employe = new Employe;
           $employe->id_entreprise = $fichee->id;
           $employe->id_professionnel = intval($emp);
           $employe->save();
        }

        return redirect('/fichee'.'/'. $fichee->id . '/edit')->with('succes', 'Compte créé avec Succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Professionnel  $professionnel
     * @return \Illuminate\Http\Response
     */
    public function show(Fichee $fichee)
    {
        return redirect('/fichee'.'/'. $fichee->id . '/edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Professionnel  $professionnel
     * @return \Illuminate\Http\Response
     */
   public function edit(Fichee $fichee)
    {


        //Check if post exists before deleting
        if (!isset($fichee)){
            return redirect('/fichee'.'/'. $fichee->id . '/edit')->with('error', 'No Post Found');
        }

        // Check for correct user
        if(auth()->user()->id !== $fichee->user_id){
            return redirect('/fichee'.'/'. $fichee->id . '/edit')->with('error', 'Unauthorized Page');
        }

        $data = [
            'fichee' => $fichee,
            'professionnels'=>Professionnel::all(),

        ];
        return view('fichee.edit')->with($data);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professionnel  $professionnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fichee $fichee)
    {

        $this->validate($request, [
            'photo' => 'image|nullable|max:1999',
            'nom' => 'required',
            'adresse' => 'required',
            'num' => 'required',
            'site' => 'required',
            'raison_sociale' => 'required',
            'date_de_creation' => 'required',
            'activité'=>'required',
            'id_gerant' =>'required',
            
        ]);

        $fichee->nom = $request->input('nom');
        $fichee->adresse = $request->input('adresse');
        $fichee->site = $request->input('site');
        $fichee->code_postal = $request->input('code_postal');
        $fichee->num = $request->input('num');
        $fichee->date_de_creation = $request->input('date_de_creation');
        $fichee->raison_sociale = $request->input('raison_sociale');
        $fichee->activité = $request->input('activité');
        $fichee->id_gerant = $request->input('id_gerant');
        $fichee->save();
        

        // User image
        if($request->hasFile('photo')){
            // Get filename with the extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('photo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore5= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('photo')->storeAs('public/user_images', $fileNameToStore5);
            // Delete file if exists
            Storage::delete('public/fichees_images/'.$fichee->photo);
            $fichee->photo = $fileNameToStore5;

        }

        $fichee->save();



        return redirect('/fichee'.'/'. $fichee->id . '/edit')->with('success', 'Mise à Jour Réussie');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professionnel  $professionnel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fichee $fichee)
    {
        //
    }

}
