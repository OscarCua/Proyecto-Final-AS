<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('parentescos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumno_fk');
            $table->foreign('alumno_fk')->references('id')->on('alumnos')->onDelete('cascade');

           $table->unsignedBigInteger('encargado_fk');
            $table->foreign('encargado_fk')->references('id')->on('encargados')->onDelete('cascade');




            $table->string('tipo_parentesco');
            $table->string('prioridad');




            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parentescos');
    }
};
