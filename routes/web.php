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

Route::resource('home','homeController');
Route::resource('category','categoryController');

// Start Route of MARQUE
Route::resource('marque','marqueController');
Route::post('marque/create','marqueController');
Route::get('marque/edit/{id}','marqueController@edit');
Route::post('marque/update','marqueController@update');
Route::delete('marque/delete/{id}','marqueController@delete');

// End Route of marque 


// Start Route of category
Route::resource('category','categoryController');
Route::post('category/create','categoryController@create');
Route::get('category/edit/{id}','categoryController@edit');
Route::post('category/update','categoryController@update');
Route::delete('category/delete/{id}','categoryController@delete');

// End Route of category 


// Start Route of parentoption
Route::resource('parentoption','parentoptionController');
Route::post('parentoption/create','parentoptionController');
Route::get('parentoption/edit/{id}','parentoptionController@edit');
Route::post('parentoption/update','parentoptionController@update');
Route::delete('parentoption/delete/{id}','parentoptionController@delete');
Route::get('parentoption/detail/{id}','parentoptionController@detail');

// End Route of parentoption 



// Start Route of modele
Route::resource('modele','modeleController');
Route::post('modele/create','modeleController');
Route::get('modele/edit/{id}','modeleController@edit');
Route::post('modele/update','modeleController@update');
Route::delete('modele/delete/{id}','modeleController@delete');

// End Route of modele 

