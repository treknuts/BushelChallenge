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

Route::get('/', 'IndexController@show');

Route::get('/pokedex', 'PokemonController@index')->name('pokedex');

Route::get('pokemon/{id}', 'PokemonController@show')->name('pokemon');

Route::get('/lookup', function()    {
    return view('lookup');
})->name('lookup');

Route::get('/captured', function()    {
    return view('captured');
});



