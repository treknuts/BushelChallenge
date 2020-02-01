<?php

namespace App\Http\Controllers;

use App\Pokemon;

class PokedexController extends Controller
{
    public function show()  {
        $pokedex = Pokemon::paginate(10);

        return view('pokedex', ['pokedex' => $pokedex]);
    }
}
