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
        Schema::create('entreprise', function (Blueprint $table) {
            $table->id();
            $table->string('nom_entreprise');
            $table->string('secteurs_activite')->nullable();
            $table->string('sigle usuel')->nullable();
            $table->string('enseigne')->nullable();
            $table->string('capital', 10, 2)->nullable();
            $table->string('valeur_nominale', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprise');
    }
};
