<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->string('nom_candidat');
            $table->string('prenom_candidat');
            $table->string('image_candidat');
            $table->string('niveau_etude');
            $table->unsignedBigInteger('secteur_id');
            $table->foreign('secteur_id')->references('id')->on('secteurs')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tele');
            $table->string('cv_candidat');
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
        Schema::dropIfExists('candidats');
    }
}
