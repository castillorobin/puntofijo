<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use Illuminate\Support\Facades\Auth;

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
       
       $empleado = Empleado::where('nombre', Auth::user()->name)->get();
        return view('cobro.cobrobuscar', compact('comercio', 'empleado' ));
    } 
}
