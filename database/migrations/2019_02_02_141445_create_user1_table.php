<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUser1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user1', function (Blueprint $table) {
            $table->increments('id_u');
            $table->string('nom_u');
            $table->string('prenom_u');
            $table->string('fonction_u');
            $table->string('email_u');
            $table->string('tel_u');
            $table->string('date_u');
            $table->string('age_u');
            $table->string('sexe_u');
            $table->string('situation_u');
            $table->string('ville_u');
            $table->string('adresse_u');
            $table->string('poste_u');
            $table->string('categorie_u');
            $table->string('groupe_u');
            $table->mediumText('image')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user1');
    }
}
