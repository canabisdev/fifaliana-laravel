+<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cand', function (Blueprint $table) {
            $table->increments('id_ca');
            $table->string('nom_ca');
            $table->string('prenom_ca');
            $table->string('email_ca');
            $table->string('tel_ca');
            $table->string('date_ca');
            $table->string('age_ca');
            $table->string('sexe_ca');
            $table->string('situation_ca');
            $table->string('ville_ca');
            $table->string('adresse_ca');
            $table->mediumText('image')->nullable;
            $table->mediumText('image1')->nullable;
            $table->string('date_de');
            
           
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
        Schema::dropIfExists('cand');
    }
}
