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
        Schema::create('sem_note_tuteurs', function (Blueprint $table) {
            $table->id('id_sem_note_tuteurs');
            $table->string('specialite');
            $table->string('choix_tuteur');
            $table->string('participation_reunions_techniques');
            $table->string('respect_consignes_reunions_administration');
            $table->string('respect_calendrier_pct');
            $table->string('creation_fichiers_notation_continue_etudiant');
            $table->string('evaluation_rapports_etudiants_feedback');
            $table->string('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sem_note_tuteurs');
    }
};
