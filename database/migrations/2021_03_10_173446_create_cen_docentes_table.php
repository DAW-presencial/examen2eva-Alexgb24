<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCenDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cen_docentes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("denominacion");
            $table->string("codigo");
            $table->string("CIF");
            $table->enum("titularidad", ["publico", "privado", "concertado"]);
            $table->string("dir_postal");
            $table->integer("CP");
            $table->string("director_nom");
            $table->string("director_apell");
            $table->string("director_apell2");
            $table->string("identificador");
            $table->enum("tipo_identificador", ["nif", "nie", "pasaporte"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cen_docentes');
    }
}
