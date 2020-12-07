<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->string('passenger_name')->nullable();
            $table->string('passenger_suname')->nullable();
            $table->string('passenger_iin')->nullable();
            $table->string('passenger_passport')->nullable();
            $table->string('passenger_country')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropColumn('passenger_name');
            $table->dropColumn('passenger_suname');
            $table->dropColumn('passenger_iin');
            $table->dropColumn('passenger_passport');
            $table->dropColumn('passenger_country');
        });
    }
}
