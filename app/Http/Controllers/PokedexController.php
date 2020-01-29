<?php

namespace App\Http\Controllers;

use App\Pokemon;

class PokedexController extends Controller
{
    public function show()  {
        $pokedex = Pokemon::paginate(15);

        return view('pokedex', ['pokedex' => $pokedex]);
    }
}
