<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|min:2|max:30',
            'apellido' => 'required|min:2|max:30',
            'cedula' => 'required|unique:pacientes,cedula|min:10|max:10',
            'covid19' => 'required',
            'cita' => 'required|min:2|max:20',
            'doctor' => 'required|min:2|max:50',
            'sintomas' => 'min:2|max:255',
            'medicinas' => 'required|min:2|max:255',
            'description' => 'required'
        ];
    }
}
