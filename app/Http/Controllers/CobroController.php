<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Empleado;
use Illuminate\Support\Facades\Auth;
use PDF;
use Illuminate\Http\Request;
use App\Models\Comercio;
use App\Models\Envio;
use App\Models\Ticketc;
use Carbon\Carbon;
use App\Models\Caja;
use App\Models\Detallecaja;
use App\Models\Hestado;

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

      //guardar movimiento
        $idcaja = Caja::where('cajero', $request->get('cajero') )
        ->where('estado', 0)
        ->get();
 
        if($idcaja->isEmpty()){
           $conceptos = Conceptocaja::all();
        $cajas = Detallecaja::all();
         return response()->json([
            'success' => false,
            'message' => 'No hay caja abierta para este cajero.'
        ]);
        }
        $ultimoMovi = Detallecaja::where('idcaja', $idcaja[0]->id)
                ->latest('id') // o cualquier columna de ordenamiento como created_at
                ->first();
        $saldomovi = $ultimoMovi->saldo;


    $data = $request->validate([
        'comercio' => 'required|string',
        'tipos' => 'required|array',
        'subtotales' => 'required|array',
        'cantidades' => 'required|array',
        'total' => 'required|numeric',
        'recibido' => 'required|numeric',
        'cambio' => 'required|numeric',
        'metodo' => 'required|string',
        'agencia' => 'required|string',
        'nota' => 'nullable|string',
        'cajero' => 'required|string',
    ]);
//$codigo = 2025 + intval(date('ymdHis'));
    $ultimoid = Ticketc::latest('id')->first();
            $idcompr = $ultimoid->id + 1;
     
            $date = Carbon::now();
            $date = $date->format('Y');
            $codigo = "$date".$idcompr;
    // Guardar ticket
    $ticketact = Ticketc::create([
        'comercio' => $data['comercio'],
        'codigo' => $codigo,
        'cajero' => $data['cajero'],
        'metodo' => $data['metodo'],
        'total' => $data['total'],
        'entrega' => $data['recibido'],
        'cambio' => $data['cambio'],
        'nota' => $data['nota'] ?? null,
        'agencia' => $data['agencia'],
        'persoi' => $data['subtotales']['personalizado'] ?? 0,
        'depari' => $data['subtotales']['departamental'] ?? 0,
        'puntoi' => $data['subtotales']['puntofijo'] ?? 0,
        'casili' => $data['subtotales']['casillero'] ?? 0,
        'perso' => $data['cantidades']['personalizado'] ?? 0,
        'depar' => $data['cantidades']['departamental'] ?? 0,
        'punto' => $data['cantidades']['puntofijo'] ?? 0,
        'casil' => $data['cantidades']['casillero'] ?? 0,
    ]);

   // Guardar envíos
foreach ($data['tipos'] as $tipo => $guias) {
    foreach ($guias as $guia) {

        // Crear el registro en ENVIO y obtener el modelo
        $envio = Envio::create([
            'comercio' => $data['comercio'],
            'guia' => $guia,
            'tipo' => ucfirst($tipo),
            'ticketc' => $codigo,
        ]);

        // Registrar historial del estado
        Hestado::create([
            'idenvio' => $envio->id,     // ID del envío recién creado
            'estado' => 'Recepcionado',
            'usuario' => $data['cajero'],
        ]);
    }
}

    $movimiento = new Detallecaja();
    
    $movimiento->cajero = $request->get('cajero') ;
    $movimiento->agencia = $request->get('agencia') ;
    $movimiento->tipo =  "Entrada";
    $movimiento->concepto =  "Cobro del ticket " . $codigo;
    $movimiento->valor =  $request->get('total');
    $movimiento->saldo = $saldomovi + $request->get('total');
    $movimiento->idcaja = $idcaja[0]->id ;
    $movimiento->save();
   
    return response()->json([
    'success' => true,
    'ticket_id' => $ticketact->id
]);
}

public function verTicket($id)
{
    $ticketact = Ticketc::findOrFail($id);

    $pdf = Pdf::loadView('cobro.ticketcobros', compact('ticketact'));
    $customPaper = [0, 0, 360, 650];
    $pdf->setPaper($customPaper);

    return $pdf->stream('ticket-'.$ticketact->codigo.'.pdf');
}


}
