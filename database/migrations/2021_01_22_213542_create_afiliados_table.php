<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfiliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliados', function (Blueprint $table) {
          $table->id();
        $table->string('Nombre',45);
        $table->string('ApellidoP',45);
        $table->string('ApellidoM',45);
        $table->date('FechaNacimiento');
        $table->string('Genero',10);
        $table->string('EstadoCivil',10);
        $table->integer('CodigoPostal');
        $table->string('Colonia',45);
        $table->string('Calle',45);
        $table->string('NumeroInterior',8);
        $table->string('NumeroExterior',8);
        $table->string('Telefono',13);
        $table->string('Email',45);
        $table->string('RFC',30);
        $table->string('CURP',30);
        $table->string('Foto',254);
        $table->integer('CentroTrabajoID');
        $table->string('TipoPlaza');
        $table->date('FechaIngreso');
        $table->integer('EstadoID');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('afiliados');
    }
}
