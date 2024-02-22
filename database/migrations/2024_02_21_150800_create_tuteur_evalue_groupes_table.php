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
        Schema::create('tuteur_evalue_groupes', function (Blueprint $table) {
            $table->id('id_tuteur_evalue_groupes');
            $table->integer('gestion_conflits');
            $table->integer('communication_coordination');
            $table->integer('ambition_creativite_projet');
            $table->integer('qualite_realisation');
            $table->integer('reussite_projet');
            $table->integer('savoir_rendre_compte');
            $table->integer('savoir_justifier_choix_projet');
            $table->integer('note_groupe');
            $table->integer('observations_groupe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuteur_evalue_groupes');
    }
};
