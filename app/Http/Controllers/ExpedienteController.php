<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpedienteRequest;
use App\Http\Requests\UpdateExpedienteRequest;
use App\Models\Expediente;
use Illuminate\Support\Facades\Auth;

class ExpedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seasonUser = Auth::user();
        //$seasonUserId =
        //
        return view('lista-expedientes');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        dd('hola');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExpedienteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Expediente $expediente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expediente $expediente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpedienteRequest $request, Expediente $expediente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expediente $expediente)
    {
        //
    }
}
