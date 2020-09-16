<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $solicitudN = new App\Solicitud;
        #$solicitudN->nombre = $request->nombre;
        $solicitudN->celular = $request->celular;
        $solicitudN->servicio = $request->servicio;
        #$solicitudN->distrito = $request->distrito;
        #$solicitudN->direccion = $request->direccion;
        #$solicitudN->referencia = $request->referencia;
        #$solicitudN->fecha = $request->fecha;
        #$solicitudN->comentarios = $request->comentarios;
    
        $request->validate([
            #'nombre' => 'required',
            'celular' => 'required',
            'servicio' => 'required',
            #'distrito' => 'required',
            #'fecha' => 'required',
            #'comentarios' => 'required'
        ]);

        $solicitudN->save();

        return back()->with('mensaje', 'Solicitud agregada');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
