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
        Schema::create('sem_attribue_etudiants', function (Blueprint $table) {
            $table->id('id_sem_attribue_etudiants');
            $table->string('nom_tuteur');
            $table->string('prenom_tuteur');
            $table->string('nom_etudiant');
            $table->string('prenom_etudiant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    
    {
        Schema::dropIfExists('sem_attribue_etudiants');
    }
};
