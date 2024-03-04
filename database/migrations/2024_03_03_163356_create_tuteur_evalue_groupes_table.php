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
            $table->string('gestion_conflits'); 
            $table->string('communication_coordination'); 
            $table->string('ambition_creativite_projet'); 
            $table->string('qualite_realisation'); 
            $table->string('reussite_projet'); 
            $table->string('savoir_rendre_compte'); 
            $table->string('savoir_justifier_choix_projet'); 
            $table->string('note_groupe'); 
            $table->string('observations_groupe'); 
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
