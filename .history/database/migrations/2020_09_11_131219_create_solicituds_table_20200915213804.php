<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicituds', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->default('cliente');
            $table->string('celular');
            $table->string('servicio');
            $table->string('distrito')->default('distrito');
            $table->string('direccion')->default('direccion');
            $table->string('referencia')->default('referencia');
            $table->date('fecha')->default('fecha');
            $table->text('comentarios')->default('comentario');
            $table->integer('estado')->default('1');
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
        Schema::dropIfExists('solicituds');
    }
}

