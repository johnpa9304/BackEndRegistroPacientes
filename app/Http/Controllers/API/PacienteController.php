<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Paciente::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePacienteRequest $request)
    {
        /*$paciente = new Paciente();
        $paciente->nombre = $request["nombre"];
        $paciente->apellido = $request["apellido"];
        $paciente->cedula = $request["cedula"];
        $paciente->covid19 = $request["covid19"];
        $paciente->cita = $request["cita"];
        $paciente->sintomas = $request["sintomas"];
        $paciente->medicinas = $request["medicinas"];
        $paciente->description = $request["description"];

        $paciente->save();*/

        $input = $request->all();
        Paciente::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Registro creado correctamente'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        return $paciente;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePacienteRequest $request, Paciente $paciente)
    {
        /*$paciente->nombre = $request["nombre"];
        $paciente->apellido = $request["apellido"];
        $paciente->cedula = $request["cedula"];
        $paciente->covid19 = $request["covid19"];
        $paciente->cita = $request["cita"];
        $paciente->sintomas = $request["sintomas"];
        $paciente->medicinas = $request["medicinas"];
        $paciente->description = $request["description"];
        */
        $input = $request->all();
        $paciente->update($input);
        return response()->json([
            'res' => true,
            'message' => 'Registro actualizado correctamente'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paciente::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Registro borrado correctamente'
        ], 200);
    }
}
