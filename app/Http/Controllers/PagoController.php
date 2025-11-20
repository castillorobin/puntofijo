<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticketc;
use App\Models\Ticktpago;
use App\Models\Envio;

class PagoController extends Controller
{

    public function pagar()
    {
        
        return view('pago.pagar'); //compact('comercios' ));
    } 

    public function verificar(Request $request)
{
      try {
            $codigo = $request->codigo;

            if (!$codigo) {
                return response()->json(['exists' => false]);
            }

            $ticket = Ticktpago::where('id', $codigo)->first();

            return response()->json([
                'exists' => $ticket ? true : false,
                'found'  => $ticket
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ], 500);
        }
    }

public function buscar(Request $request)
{
    $codigo = $request->codigo;

    $ticket = Ticktpago::where('id', $codigo)->first();

   // $pedidos = Envio::where('ticketc', $codigo)->get();

    if (!$ticket) {
        return redirect()->back()->with('error', 'No se encontró un ticket con ese código.');
    }

    return view('pago.detalle', compact('ticket'));
}
    
}
