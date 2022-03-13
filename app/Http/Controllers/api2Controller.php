<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class api2Controller extends Controller
{
    //

    public function MostrarArtista(){

        $artista=Artist::all();

        return response()->json(['Artista' => $artista]);

    }

    public function verArtista($id)
    {

        $artista=Artist::find($id);
        if($id)
        {
            return response()->json(['Artista' => $artista]);
        }

    }
}
