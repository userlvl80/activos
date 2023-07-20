<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tableactivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->string('marca');
            $table->string('descripcion');
            $table->string('numero_serie')->nullable();
            $table->string('placa');
            $table->date('fecha_alta');
            $table->decimal('precio_adquisicion', 10, 2);
            $table->string('moneda');
            $table->decimal('precio_actual', 10, 2);
            $table->string('ubicacion');
            $table->boolean('estado')->default(true); // true para activo, false para eliminado
            
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
        //
    }
};
