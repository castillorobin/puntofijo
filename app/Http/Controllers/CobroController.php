<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comercio;

class CobroController extends Controller
{
    public function cobro()
    {
        $comercios = Comercio::all();
        return view('cobro.cobroc', compact('comercios' ));
    } 

    public function buscar(Request $request)
    {
        $comercio = Comercio::find($request->input('comercio'));
       
       
        return view('cobro.cobrobuscar', compact('comercio' ));
    } 
}
