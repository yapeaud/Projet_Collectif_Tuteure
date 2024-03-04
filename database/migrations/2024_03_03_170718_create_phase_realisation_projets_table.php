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
        Schema::create('phase_realisation_projets', function (Blueprint $table) {
            $table->id('id_phase_realisation_projets');
            $table->string('nom_prenoms_etudiant');

            $table->string('organisation_etudiants_groupes_1');
            $table->string('organisation_etudiants_groupes_2');
            $table->string('organisation_etudiants_groupes_3');
            $table->string('organisation_etudiants_groupes_4');

            $table->string('enquete_preliminaire_1');
            $table->string('enquete_preliminaire_2');
            $table->string('enquete_preliminaire_3');
            $table->string('enquete_preliminaire_4');
            $table->string('enquete_preliminaire_5');



            $table->string('elaboration_matrice_activites_chronologique_groupe_1');
            $table->string('elaboration_matrice_activites_chronologique_groupe_2');
            $table->string('elaboration_matrice_activites_chronologique_groupe_3');
            $table->string('elaboration_matrice_activites_chronologique_groupe_4');

            $table->string('realisation_taches_1');
            $table->string('realisation_taches_2');
            $table->string('realisation_taches_3');

            $table->string('redaction_rapport_activites_1');
            $table->string('redaction_rapport_activites_2');
            $table->string('redaction_rapport_activites_3');
            $table->string('redaction_rapport_activites_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phase_realisation_projets');
    }
};
