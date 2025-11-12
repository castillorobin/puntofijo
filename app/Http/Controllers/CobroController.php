<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Comercio;
use App\Models\Envio;
use App\Models\Ticketc;

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

    
public function cobrar(Request $request)
{
    $data = $request->validate([
        'comercio' => 'required|string',
        'tipos' => 'required|array',
        'subtotales' => 'required|array',
        'total' => 'required|numeric',
        'recibido' => 'required|numeric',
        'cambio' => 'required|numeric',
        'metodo' => 'required|string',
        'agencia' => 'required|string',
        'nota' => 'nullable|string',
        'cajero' => 'required|string',
    ]);



    // Guardar ticket
    $ticketact = Ticketc::create([
        'comercio' => $data['comercio'],
        'cajero' => $data['cajero'],
        'metodo' => $data['metodo'],
        'total' => $data['total'],
        'entrega' => $data['recibido'],
        'cambio' => $data['cambio'],
        'nota' => $data['nota'] ?? null,
        'agencia' => $data['agencia'],
        'persoi' => $subtotales['personalizado'] ?? 0,
        'depari' => $subtotales['departamental'] ?? 0,
        'puntoi' => $subtotales['puntofijo'] ?? 0,
        'casili' => $subtotales['casillero'] ?? 0,
        'perso' => $cantidades['personalizado'] ?? 0,
        'depar' => $cantidades['departamental'] ?? 0,
        'punto' => $cantidades['puntofijo'] ?? 0,
        'casil' => $cantidades['casillero'] ?? 0,
    ]);

    // Guardar envíos
    foreach ($data['tipos'] as $tipo => $guias) {
        foreach ($guias as $guia) {
            Envio::create([
                'comercio' => $data['comercio'],
                'guia' => $guia,
                'tipo' => ucfirst($tipo),
                'ticketc' => $ticketact->id,
            ]);
        }
    }

   // return response()->json(['success' => true]);
     $pdf = PDF::loadView('cobro.ticketcobros', ['ticketact'=>$ticketact]);
        //return view('envios.ticketpagos');
        $customPaper = array(0,0,360,650);
        //$pdf->setPaper('b6', 'portrait');
        $pdf->setPaper($customPaper );
        return $pdf->stream();

}
}
