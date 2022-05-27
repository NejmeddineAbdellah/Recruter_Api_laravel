<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string('lettre_motivation');
            $table->unsignedBigInteger('id_candidat');
            $table->foreign('id_candidat')->references('id')->on('candidats')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_annonce');
            $table->foreign('id_annonce')->references('id')->on('annonces')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('demandes');
    }
}
