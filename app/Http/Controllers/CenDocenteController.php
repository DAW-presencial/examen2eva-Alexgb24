<?php

namespace App\Http\Controllers;

use App\Models\CenDocenteModel;
use App\Http\Controllers\Controller;
use App\Http\Requests\DocentesRequest;
use Illuminate\Http\Request;


class CenDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "";
    }
    
    public function create()
    {
        return view("docentes");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        CenDocenteModel::create([
            "denominacion" => $request->denominacion,
            "codigo" => $request->codigo,
            "CIF" => $request->CIF,
            "titularidad" => $request->titularidad,
            "dir_postal" => $request->dir_postal,
            "CP" => $request->CP,
            "director_nom" => $request->director_nom,
            "director_apell" => $request->director_apell,
            "director_apell2" => $request->director_apell2,
            "identificador" => $request->identificador,
            "tipo_identificador" => $request->tipo_identificador,
        ]);
        
        $docente1 = new CenDocenteModel;
        $docente1->denominacion = "Profesor";
        $docente1->codigo = "A-7387485658";
        $docente1->CIF = "G32432432";
        $docente1->titularidad = "privado";
        $docente1->dir_postal = "Camino de la vileta 114";
        $docente1->CP = "07011";
        $docente1->director_nom = "Jorge";
        $docente1->director_apell = "Herrero";
        $docente1->director_apell2 = "Jimenez";
        $docente1->identificador = "45275927P";
        $docente1->tipo_identificador = "nif";
        
        $docente2 = new CenDocenteModel;
        $docente1->denominacion = "Maestro";
        $docente1->codigo = "P-7387285098";
        $docente1->CIF = "X32404475";
        $docente1->titularidad = "publico";
        $docente1->dir_postal = "Camino de Manacor 76";
        $docente1->CP = "07011";
        $docente1->director_nom = "Alberto";
        $docente1->director_apell = "Garcia";
        $docente1->director_apell2 = "Berilio";
        $docente1->identificador = "45729472L";
        $docente1->tipo_identificador = "nif";

        $docente1->save();
        $docente2->save();

        return $request;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "";
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
    
    public function edit($id)
    {
        return "";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "";
    }
}
