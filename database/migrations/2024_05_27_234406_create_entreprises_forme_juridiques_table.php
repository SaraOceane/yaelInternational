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
        Schema::create('entreprises_forme_juridiques', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entreprises_id')->constrained()->onDelete('cascade');
            $table->foreignId('forme_juridiques_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprises_forme_juridiques');
    }
};
