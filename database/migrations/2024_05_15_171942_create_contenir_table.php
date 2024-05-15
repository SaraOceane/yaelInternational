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
        Schema::create('contenir', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entreprise_id');
            $table->unsignedBigInteger('associes_id');
            $table->timestamps();

            $table->foreign('entreprise_id')->references('id')->on('entreprise')->onDelete('cascade');
            $table->foreign('associes_id')->references('id')->on('associes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contenir');
    }
};
