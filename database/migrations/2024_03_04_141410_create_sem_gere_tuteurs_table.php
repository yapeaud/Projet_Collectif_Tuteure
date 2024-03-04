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
        Schema::create('sem_gere_tuteurs', function (Blueprint $table) {
            $table->id('id_sem_gere_tuteurs');
            $table->string('nom_tuteur');
            $table->string('prenom_tuteur');
            $table->string('email');
            $table->string('telephone');
            $table->string('specialite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sem_gere_tuteurs');
    }
};
