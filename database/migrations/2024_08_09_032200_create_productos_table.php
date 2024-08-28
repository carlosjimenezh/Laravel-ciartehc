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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->longText('descripcion')->nullable();
            $table->string('imagen')->nullable();
            $table->boolean('activo')->default(true);
            $table->unsignedBigInteger('seccion_lineas_investigacion_id');
            $table->foreign('seccion_lineas_investigacion_id')
                ->references('id')
                ->on('seccion_lineas_investigacion')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
