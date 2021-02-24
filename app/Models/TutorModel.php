<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorModel extends Model
{
    use HasFactory;

    protected $table = "tutores";

    protected $fillable = [
        "empresa",
        "tipo_documento",
        "dni",
        "nombre",
        "primer_apellido",
        "segundo_apellido",
        "pais_dni",
        "provincia",
        "municipio",
        "estado",
        "telefono",
        "email"
    ];
}
