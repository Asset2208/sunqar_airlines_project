<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_from_id');
            $table->unsignedBigInteger('city_to_id');
            $table->unsignedBigInteger('airline_id');
            $table->date('flight_date');
            $table->time('flight_time');
            $table->integer('departure_hour');

            $table->timestamps();

            $table->foreign('city_from_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('city_to_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('airline_id')->references('id')->on('airlines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
