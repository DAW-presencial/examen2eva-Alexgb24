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

        return back();

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
