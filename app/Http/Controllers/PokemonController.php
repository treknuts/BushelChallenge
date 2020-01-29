<?php

namespace App\Http\Controllers;

use App\Pokemon;

class PokemonController extends Controller
{
    public function show($id) {

        $pokemon = Pokemon::where('id', $id)->firstOrFail();
        
        return view('pokemon', ['pokemon' => $pokemon]);
        
    }
}
