<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCandidat1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidat1', function (Blueprint $table) {
            $table->increments('id_c');
            $table->mediumText('image')->nullable;
            $table->string('nom_c');
            $table->string('prenom_c');
            $table->string('email_c');
            $table->string('contact_c');
            $table->string('date_c');
            $table->string('situation_c');
            $table->string('ville_c');
            $table->string('adresse_c');
            $table->string('information_c');
          
           
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
        Schema::dropIfExists('candidat1');
    }
}
