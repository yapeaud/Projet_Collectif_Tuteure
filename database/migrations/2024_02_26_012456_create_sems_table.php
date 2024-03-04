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
        Schema::create('sems', function (Blueprint $table) {
            $table->id('id_sem');
            $table->string('nom_sem');
            $table->string('prenom_sem');
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
        Schema::dropIfExists('sems');
    }
};
