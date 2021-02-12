<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDoctorRequest extends FormRequest
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
            'cedula' => 'required|unique:doctors,cedula|min:10|max:10',
            'Especialidad' => 'required|min:2|max:255',
        ];
    }
}
