<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalcLongShortIncDecPrevDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calc_long_short_inc_dec_prev_days', function (Blueprint $table) {
            $table->id();
            $table->string('date_of_entry');
            $table->string('client');
            $table->string('dii');
            $table->string('fii');
            $table->string('pro');
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
        Schema::dropIfExists('calc_long_short_inc_dec_prev_days');
    }
}
