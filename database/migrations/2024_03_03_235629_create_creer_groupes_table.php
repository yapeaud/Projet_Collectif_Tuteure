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
        Schema::create('creer_groupes', function (Blueprint $table) {
            $table->id('id_creer_groupes');
            $table->string('code_groupe');
            $table->string('nom_etudiant');
            $table->string('prenom_etudiant');
            $table->string('email');
            $table->string('telephone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creer_groupes');
    }
};
