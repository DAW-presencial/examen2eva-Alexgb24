<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocentesRequest extends FormRequest
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
            "denominacion" => ["required", "max:30"],
            "codigo" => ["required", "max:20"],
            "CIF" => ["required", "max:30"],
            "titularidad" => ["required", "in:publico, privado, concertado"],
            "dir_postal" => ["required"],
            "CP" => ["max:5"],
            "director_nom" => ["required", "max:20"],
            "director_apell" => ["required", "max:20"],
            "director_apell2" => ["required", "max:20"],
            "identificador" => ["required"],
            "tipo_identificador" => ["required", "in:nif, nie, pasaporte"],
        ];
    }
}
