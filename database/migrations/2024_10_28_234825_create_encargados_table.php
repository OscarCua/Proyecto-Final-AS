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
        Schema::create('encargados', function (Blueprint $table) {
            $table->id();
            $table->string('dpi')->unique();
            $table->string('nombre1');
            $table->string('nombre2');
            $table->string('nombre3');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->date('fecha_nac');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('direcc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encargados');
    }
};
