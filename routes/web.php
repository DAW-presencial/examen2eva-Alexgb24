<?php

use App\Http\Controllers\CenDocenteController;
use App\Http\Controllers\TutoresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return redirect()->route("docentes.create");
});

Route::resource('/tutor', TutoresController::class);

Route::resource('/datos',DatosController::class);

Route::resource('/docentes', CenDocenteController::class);
