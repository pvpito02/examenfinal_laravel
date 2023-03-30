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
        Schema::create('reservationclis', function (Blueprint $table) {
            $table->id();
            $table->integer('nombreClient');
            $table->foreignId('vehicule_id')->constrained();
            $table->foreignId('tarrifcourse_id')->constrained();
            $table->foreignId('comptechauffeur_id')->constrained();
            $table->foreignId('compteclient_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservationclis');
    }
};
