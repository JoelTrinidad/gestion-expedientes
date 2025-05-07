<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpedienteRequest;
use App\Http\Requests\UpdateExpedienteRequest;
use App\Models\Expediente;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ExpedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expedientes = Expediente::All();

        return view('expedientes.index', compact('expedientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expedientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExpedienteRequest $request)
    {
        $ultimoNumeroExpediente = Expediente::max('numero_expediente');
        $numeroExpediente = strval($ultimoNumeroExpediente + 1);

        while (strlen($numeroExpediente) < 5) {
            $numeroExpediente = '0' . $numeroExpediente;
        }
        $expediente = Expediente::create([
            'numero_expediente' => $numeroExpediente,
            'asunto' => $request->asunto,
            'fecha_inicio' => $request->fecha_inicio,
            'id_estatus' => 1,
            'id_usuario_registra' => Auth::user()->id,
        ]);

        return redirect()->route('expedientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expediente $expediente)
    {
        return view('expedientes.show', compact('expediente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expediente $expediente)
    {
        return view('expedientes.edit', compact('expediente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpedienteRequest $request, Expediente $expediente)
    {
        $expediente->asunto = $request->asunto;
        $expediente->fecha_inicio = $request->fecha_inicio;
        $expediente->save();

        return redirect()->route('expedientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expediente $expediente)
    {
        $expediente->id_estatus = 2;
        $expediente->deleted_at = Carbon::now()->format('Y-m-d H:i:s');
        $expediente->push();

        return redirect()->route('expedientes.index');
    }
}
