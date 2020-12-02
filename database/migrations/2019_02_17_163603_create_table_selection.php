<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSelection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selection', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('candidat1_id')->unsigned();
            $table->integer('candidat2_id')->unsigned();
            $table->integer('candidat3_id')->unsigned();
            $table->text('description');
            $table->foreign('candidat1_id')
                ->references('id_c')->on('candidat1')
                ->onDelete('cascade');
            $table->foreign('candidat2_id')
                ->references('id_c')->on('candidat1')
                ->onDelete('cascade');
            $table->foreign('candidat3_id')
                ->references('id_c')->on('candidat1')
                ->onDelete('cascade');
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
        Schema::dropIfExists('selection');
    }
}
