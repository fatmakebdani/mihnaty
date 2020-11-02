<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Route::get('/','OffreController@categories')->name('/');
Route::get('/lesOffres', function () {
    return view('lesOffres');
});
Route::get('/apropos', function () {
    return view('apropos');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/verify',function(){
	return view('auth.verify');
});
Route::get('/mesOffres',function(){
    return view('Professionnel.mes_offres');
});
Route::get('/lesOffres','OffreController@index');
Route::get('/entreprises','FicheeController@index');
Route::resource('professionnel', 'ProfessionnelController');
Route::resource('candidat', 'CandidatController');
Route::resource('fichee', 'FicheeController');
Route::resource('offre','OffreController');
Route::get('/', function () {
    return view('welcome');
});
  
Auth::routes(['verify' => true]);
  
Route::get('/welcome', 'HomeController@index')->name('welcome');
Route::get('/mesPropositions','OffreController@mesPropositions');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/candidat','CandidatController@index')->name('candidat')->middleware('candidat');
Route::get('/admin','AdminController@index')->name('admin')->middleware('admin');

Route::get('/postuler-offre/{id}','CandidatController@postuler')->name('postuler-offre');
Route::get('/edit/{id}','ProfessionnelController@edit')->name('edit');
Route::get('/edit/{id}','CandidatController@edit')->name('edit');

//Route::get('/','ExperienceController@store')->name('/');
Route::get('/se-retirer/{id}','CandidatController@seRetirer')->name('se-retirer');
Route::get('/supprimer-offre/{id}','OffreController@supprimerOffre')->name('supprimer-offre');
Route::get('/accepter-offre/{id}','AdminController@accepterOffre')->name('accepter-offre');
Route::get('/refuser-offre/{id}','AdminController@refuserOffre')->name('refuser-offre');


Route::get('/changerStatut/{id}','ProfessionnelController@changerStatut')->name('changerStatut');
Route::get('/passerExamination/{id}','ProfessionnelController@passerExamination')->name('passerExamination');
Route::get('/fermerExamination/{id}','ProfessionnelController@fermerExamination')->name('fermerExamination');

Route::get('/Evaluer/{id}','ProfessionnelController@Evaluer')->name('Evaluer');
Route::get('/Changer/{id}','ProfessionnelController@Changer')->name('Changer');
Route::get('/Attribuer/{id}','ProfessionnelController@Attribuer')->name('Attribuer');

Route::get('/refus-offre/{id}','AdminController@refus')->name('refuser-motif');
Route::post('/refus-offre/{id}','AdminController@refus')->name('refuser-motif');






Route::get('/accepter-fichee/{id}','AdminController@accepterFichee')->name('accepter-fichee');
Route::get('/refuser-fichee/{id}','AdminController@refuserFichee')->name('refuser-fichee');

//Route::get('/professionnel','ProfessionnelController@index')->name('professionnel')->middleware('professionnel');
Route::get('/MaFicheE','ProfessionnelController@ficheE')->name('ficheE')->middleware('professionnel');
Route::get('/MesExaminations','ProfessionnelController@afficherExaminations')->name('MesExaminations');
Route::get('/mes_candidatures','CandidatController@afficherCandidatures')->name('mes_candidatures');
