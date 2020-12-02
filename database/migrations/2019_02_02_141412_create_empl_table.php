<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmplTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empl', function (Blueprint $table) {
            $table->increments('id_ep');
            $table->string('nom_ep');
            $table->string('prenom_ep');
            $table->string('fonction_ep');
            $table->string('email_ep');
            $table->string('tel_ep');
            $table->string('ville_ep');
            $table->string('adresse_ep');
            $table->mediumText('image')->nullable;
            $table->mediumText('file')->nullable;
            

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
        Schema::dropIfExists('empl');
    }
}
