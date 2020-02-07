<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Http\Request;

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

    public function redirectPokemon(Request $request)   {
        if($request->pid)  {
            return redirect()->route('pokemon', ['id' => $request->pid]);
        }
        else    {
            return view('lookup');
        }
    }

}
