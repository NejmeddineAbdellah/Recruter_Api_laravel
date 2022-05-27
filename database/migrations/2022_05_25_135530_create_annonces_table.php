<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('titre_annonce');
            $table->string('description_annonce');
            $table->string('profile_rechercher');
            $table->string('niveau_etude');
            $table->unsignedBigInteger('secteur_id');
            $table->foreign('secteur_id')->references('id')->on('secteurs')->onDelete('cascade')->onUpdate('cascade');
            $table->string('contrat');
            $table->string('salaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonces');
    }
}
