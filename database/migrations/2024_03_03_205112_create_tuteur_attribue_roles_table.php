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
        Schema::create('tuteur_attribue_roles', function (Blueprint $table) {
            $table->id('id_tuteur_attribue_roles');
            $table->string('nom_du_groupe');
            $table->string('etudiant');
            $table->string('role_attribue');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuteur_attribue_roles');
    }
};
