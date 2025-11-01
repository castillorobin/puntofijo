<?php

namespace App\Http\Controllers;

use App\Models\Envio;
use Illuminate\Http\Request;

class EnvioController extends Controller
{

    public function cambiarEstado(Request $request)
    {
        $request->validate([
            'guia' => 'required|string|exists:envios,guia', 
            'estado' => 'required|string',
            'nota' => 'nullable|string',
            'nota_repartidor' => 'nullable|string',
            'fecha_reprogramado' => 'nullable|date_format:Y-m-d'
        ]);

        $envio = Envio::where('guia', $request->guia)->firstOrFail(); 
        $envio->estado = $request->estado;
        $envio->nota = $request->nota;
        $envio->nota_repartidor = $request->nota_repartidor;

        if ($request->filled('fecha_reprogramado')) {
            $envio->fecha_reprogramado = $request->fecha_reprogramado;
        } else {
            $envio->fecha_reprogramado = null;
        }

        $envio->save();

        return response()->json(['success' => true, 'message' => 'Estado actualizado correctamente']);
    }

    public function entregarenvio()
    {
        return view('entregar.entregar');
    }

    public function buscar(Request $request)
{
    $codigo = $request->get('codigo');
    //dd( $codigo);
    $envio = Envio::where('guia', $codigo)->first();

    if (!$envio) {
        return redirect()->back()->with('error', 'Envio no encontrado');
    }

    return view('entregar.detalle', compact('envio'));
}
}
