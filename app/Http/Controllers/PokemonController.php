<?php

namespace App\Http\Controllers;

use App\Pokemon;

class PokemonController extends Controller
{
    public function show($id) {

        $pokemon = Pokemon::where('id', $id)->firstOrFail();

        $pokemon = $pokemon->toJson();
        
        return view('pokemon', ['pokemon' => json_decode($pokemon, true)]);
        
    }
}
