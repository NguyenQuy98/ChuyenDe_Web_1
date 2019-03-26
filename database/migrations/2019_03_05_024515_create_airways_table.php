<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirwaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airways', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('hours_from');
            $table->string('hours_to');
            $table->integer('id_city_from');
            $table->integer('id_city_to');
            $table->integer('transit');
            $table->integer('price');
            $table->integer('date_Of_Flight');
            $table->integer('total');
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
        Schema::dropIfExists('airways');
    }
}
