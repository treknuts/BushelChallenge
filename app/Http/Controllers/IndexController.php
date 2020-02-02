<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show()  {
        $title = 'Pokedex Backend Challenge';

        return view('layout', ['title' => $title]);
    }
}
