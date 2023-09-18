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
        Schema::create('paiement_enseignan', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('lieu_naiss');
            $table->string('num');

            $table->string('contrat');
            $table->string('poste');
            $table->string('genre');
            $table->string('email');
            $table->integer('t_horaire')->nullable();
            $table->integer('nbheure')->nullable();
            $table->string('mois');
            $table->string('annee');
            $table->date('ddb');
            $table->date('ddf');
            $table->string('salaire')->nullable();
            $table->string('salaire_bs')->nullable();
            $table->date('date_entrer');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiement_enseignan');
    }
};
