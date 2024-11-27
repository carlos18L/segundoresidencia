<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id('idProyectos'); // ID del proyecto
            $table->string('Codigo', 5);
            $table->string('Nombreproyecto', 200);
            $table->date('Fechainicio');
            $table->date('Fechafinal');
            $table->integer('Avance')->default(0);
            $table->string('Municipiodelaobra', 105);
            $table->string('Localidad', 500);
            $table->string('NoOficio', 45);
            $table->integer('Montototal');
            $table->integer('Abono')->default(0);
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
