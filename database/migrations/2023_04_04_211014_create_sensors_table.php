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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();       
            $table->string('nombre')->nullable();
            $table->string('serial')->nullable();
            $table->string('descripcion');
            $table->unsignedBigInteger('tipos_id');
            $table->unsignedBigInteger('estacions_id');
        

            //Reeferencia a la tabla foránea
            $table->foreign('tipos_id')->references('id')->on('tipos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('estacions_id')->references('id')->on('estacions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensors');
    }
};
