<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CenDocenteModel extends Model
{
    use HasFactory;

    protected $table = "cen_docentes";

    protected $fillable = [
        "denominacion",
        "codigo",
        "CIF",
        "titularidad",
        "dir_postal",
        "CP",
        "director_nom",
        "director_apell",
        "director_apell2",
        "identificador",
        "tipo_identificador",
    ];
}
