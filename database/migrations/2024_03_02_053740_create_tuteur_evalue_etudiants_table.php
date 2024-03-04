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
        Schema::create('tuteur_evalue_etudiants', function (Blueprint $table) {
            $table->id('id_tuteur_evalue_etudiants');
            $table->integer('resolution_conflits');
            $table->integer('implication_coordination');
            $table->integer('qualite_taches_realisees');
            $table->integer('prise_initiatives');
            $table->integer('connaitre_projet');
            $table->integer('repondre_questions');
            $table->integer('note_individuelle');
            $table->integer('note_definitive');
            $table->string('observations_individuelle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuteur_evalue_etudiants');
    }
};
