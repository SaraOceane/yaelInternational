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
            $table->string('forme_juridique');
            $table->string('secteurs_activite');
            $table->string('sigle_usuel')->nullable();
            $table->string('enseigne')->nullable();
            $table->string('capital');
            $table->string('valeur_nominale', 10, 2)->nullable();
            $table->date('date_debut_activite');
            $table->string('loyer_mensuel');
            $table->string('lot');
            $table->string('situation_geographique');
            $table->string('numero_titre_foncier');
            $table->string('contact_adresse_postale');
            $table->string('chiffre_affaire_previsionnel');
            $table->string('regime_imposition');
            $table->foreignId('users_id')->constrained()->onDelete('cascade');
            $table->foreignId('forme_juridiques_id')->constrained()->onDelete('cascade');
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
