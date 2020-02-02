<?php

namespace App\Http\Controllers;

use App\Pokemon;

class PokemonController extends Controller
{
    
    public function index() {
        $pokedex = Pokemon::paginate(10);

        return view('pokedex', ['pokedex' => $pokedex]);
    }
    
    public function show($id) {

        $pokemon = Pokemon::where('id', $id)->firstOrFail();

        $pokemon = $pokemon->toJson();
        
        return view('pokemon', ['pokemon' => json_decode($pokemon, true)]);
    }

}
