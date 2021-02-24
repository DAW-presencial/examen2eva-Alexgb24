<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TutoresRequest extends FormRequest
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
            "empresa" => ["required", "max:40"],
            "tipo_documento" => ["required", "in:nif, nie, pasaporte"],
            "dni" => ["required", "max:9"],
            "nombre" => ["required", "max:30"],
            "primer_apellido" => ["required", "max:30"],
            "segundo_apellido" => ["max:30"],
            "pais_dni" => ["required", "max:15"],
            "provincia" => ["max:20"],
            "municipio" => ["max:20"],
            "estado" => ["required", "in:activo, inactivo"],
            "telefono" => ["required", "max:9"],
            "email" => ["email", "nullable"]
        ];
    }
}
