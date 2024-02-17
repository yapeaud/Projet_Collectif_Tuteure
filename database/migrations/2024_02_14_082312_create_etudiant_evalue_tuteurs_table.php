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
        Schema::create('etudiant_evalue_tuteurs', function (Blueprint $table) {
            $table->id('id_etudiant_evalue_tuteurs');
            $table->string('appreciation');
            $table->string('reponses_possibles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant_evalue_tuteurs');
    }
};
