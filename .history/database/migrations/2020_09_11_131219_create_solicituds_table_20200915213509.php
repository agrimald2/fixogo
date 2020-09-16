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
            $table->string('celular');->default('1');
            $table->string('servicio');
            $table->string('distrito');
            $table->string('direccion');
            $table->string('referencia');
            $table->date('fecha');
            $table->text('comentarios');
            $table->integer('estado')->default(1);
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

