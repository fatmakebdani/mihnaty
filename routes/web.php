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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/offres', function () {
    return view('offres');
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

Route::resource('professionnel', 'ProfessionnelController');
Route::resource('candidat', 'CandidatController');
Route::resource('fichee', 'FicheeController');

Route::get('/', function () {
    return view('welcome');
});
  
Auth::routes(['verify' => true]);
  
Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/candidat','CandidatController@index')->name('candidat')->middleware('candidat');
Route::get('/admin','AdminController@index')->name('admin')->middleware('admin');
//Route::get('/professionnel','ProfessionnelController@index')->name('professionnel')->middleware('professionnel');
Route::get('/MaFicheE','ProfessionnelController@ficheE')->name('ficheE')->middleware('professionnel');
Route::get('/MesExaminations','ProfessionnelController@mesexaminations')->name('mesexaminations')->middleware('professionnel');

