<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncecandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annoncecandidats', function (Blueprint $table) {
            $table->id();
            $table->string('titre_annonce');
            $table->string('description_annonce');
            $table->string('profile_rechercher');
            $table->string('niveau_etude');
            $table->unsignedBigInteger('secteur_activite_candidat');
            $table->foreign('secteur_activite_candidat')->references('id')->on('secteurs')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_candidat');
            $table->foreign('id_candidat')->references('id')->on('candidats')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tele_candidat');
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
        Schema::dropIfExists('annoncecandidats');
    }
}
