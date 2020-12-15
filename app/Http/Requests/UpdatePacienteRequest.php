<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePacienteRequest extends FormRequest
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
            'cedula' => 'required|min:10|max:10|unique:pacientes,cedula,' . $this->route('paciente')->id,
            'covid19' => 'required',
            'cita' => 'required|min:2|max:20',
            'doctor' => 'required|min:2|max:50',
            'sintomas' => 'required|min:2|max:255',
            'medicinas' => 'required|min:2|max:255',
            'description' => 'required'
        ];
    }
}
