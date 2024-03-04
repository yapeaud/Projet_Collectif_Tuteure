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
            $table->string('email');
            $table->string('nom_tuteur');
            $table->string('presentation_projet');
            $table->string('phase_realisation');
            $table->string('ressources');
            $table->string('reunions');
            $table->string('avacement_groupe');
            $table->string('interet_travaux');
            $table->string('trouver_solution');
            $table->string('verifier_solution');
            $table->string('duree_seance');
            $table->string('creation_groupe');
            $table->string('collaboration');
            $table->string('tenu_reunions');
            $table->string('consulte_groupe');
            $table->string('susciter_mon_interet');
            $table->string('stimuler_reflexion');
            $table->string('aplanir_conflit');
            $table->string('disponible_repondre_question');
            $table->string('obtenir_reponse');
            $table->string('recommander_tuteur');
            $table->string('note');
            $table->string('autre_tuteur');
            $table->string('indiquer');
            $table->string('total');
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
