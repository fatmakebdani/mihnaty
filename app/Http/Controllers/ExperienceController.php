<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;
use App\Professionnel;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('AjoutE');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  
    {  $this->validate($request, [
        'nom_en' => 'required',
            'titre_en' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'contrat_file' => 'required',
        ]);
          $filenameWithExt = $request->file('contrat_file')->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('contrat_file')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore2= $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('contrat_file')->storeAs('public/experience', $fileNameToStore2);

     $auth=Auth::user();
     $experience = new Experience;
        $experience->entreprise = $request->input('nom_en');
        $experience->titre = $request->input('titre_en');
        $experience->debut = $request->input('date_debut');
        $experience->fin = $request->input('date_fin');
        $experience->file = $fileNameToStore2;
        $experience->user_id = $auth->id;
        $experience->save();
       redirect('/')->with('success', 'Mise à Jour Réussie');
}    

    /**
     * Display the specified resource.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
