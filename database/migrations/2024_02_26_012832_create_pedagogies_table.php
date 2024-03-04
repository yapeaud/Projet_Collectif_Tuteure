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
        Schema::create('pedagogies', function (Blueprint $table) {
            $table->id('id_pedago');
            $table->string('nom_pedago');
            $table->string('prenom_pedago');
            $table->string('email');
            $table->string('telephone');
            $table->string('mot_de_passe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedagogies');
    }
};
