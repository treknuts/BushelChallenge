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

Route::any('/pokemon', 'PokemonController@redirectPokemon')->name('lookup');

Route::any('pokemon/{id}', 'PokemonController@show')->name('pokemon');

Route::get('/captured', function()    {
    return view('captured');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
