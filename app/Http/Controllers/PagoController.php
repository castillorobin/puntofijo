<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticketc;
use App\Models\Ticktpago;
use App\Models\Envio;
use App\Models\Empleado;
use Illuminate\Support\Facades\Auth;
use PDF; 

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

    $empleado = Empleado::where('nombre', Auth::user()->name)->get();

    return view('pago.detalle', compact('ticket', 'empleado'));
}


    public function pagando(Request $request)
{
    // 1. Obtener el ID del ticket desde la URL o hidden input
    $ticket = Ticktpago::find($request->ticket_id);

    if (!$ticket) {
        return back()->with('error', 'No se encontró el ticket.');
    }

    // 2. Actualizar los campos del ticket
    $ticket->descuento = $request->descuento ?? 0;
    $ticket->total = $request->tota ?? $ticket->total;
    $ticket->userpago = auth()->user()->name;
    $ticket->fechapago = now();
    $ticket->recibe = $request->recibe;
    $ticket->dui = $request->dui;
    $ticket->metodo = $request->metodo;
    $ticket->nota = $request->nota;
    $ticket->estado = "Pagado";
    $ticket->save();

    // 3. Actualizar todos los envíos relacionados
    Envio::where('pagoticket', $ticket->id)
        ->update([
            'pago' => 'Pagado'
        ]);
  $envios = Envio::where('pagoticket', $ticket->id)
        ->get();

        $ticketact = Ticktpago::find($request->ticket_id);
    //return redirect()->back()->with('success', 'Pago registrado correctamente.');

       $pdf = PDF::loadView('pago.pagoticket', ['ticketact'=>$ticketact, 'envios'=>$envios]);
       
        $customPaper = array(0,0,360,850);
       
        $pdf->setPaper($customPaper );
        return $pdf->stream();
}

    
}
