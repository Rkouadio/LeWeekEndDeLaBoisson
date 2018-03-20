<?php

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

/**
 * Route Page d'Acceuil
 */
Route::get('/', 'AcceuilController@index')->name('home');
Route::get('home', 'AcceuilController@index')->name('home');
/**
 * Inscription Route {VISTEURS <===> JEUX-CONCOURS <===> PARTENAIRES <===> PRESSE]
 */
Route::get('inscription', 'InscriptionController@index')->name('inscription');
Route::get('inscriptionJeux', 'InscriptionController@indexJeux')->name('inscriptionJeux');
Route::get('inscriptionVisiteurs', 'InscriptionController@indexVisiteurs')->name('inscriptionVisiteurs');
Route::get('inscriptionPartenaires', 'InscriptionController@indexPartenaires')->name('inscriptionPartenaires');
Route::get('inscriptionPresse', 'InscriptionController@indexPresse')->name('inscriptionPresse');


/**
 * ROute pour l'insertion
 */
Route::post('registerJeux', 'InscriptionController@storeJeux')->name('registerJeux');
Route::post('divertissement', 'InscriptionController@storeJeux')->name('divertissement');
Route::post('visiteurs', 'InscriptionController@StoreVisiteurs')->name('visiteurs');
Route::post('presse', 'InscriptionController@StorePresse')->name('presse');
Route::post('partenaires', 'InscriptionController@storePartenaires')->name('partenaires');
/**
 * route pour les contacts
 */
Route::post('messageUser', 'contactUsController@Store')->name('messageUser');