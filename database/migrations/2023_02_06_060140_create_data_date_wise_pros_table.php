<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDateWiseProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_date_wise_pros', function (Blueprint $table) {
            $table->id();
            $table->string('data_date_wise_id');
            $table->string('date_of_entry');
            $table->string('future_index_long_pro');
            $table->string('future_index_short_pro');
            $table->string('long_index_long_short_percent_pro');
            $table->string('future_stock_long_pro');
            $table->string('future_stock_short_pro');
            $table->string('option_index_call_long_pro');
            $table->string('option_index_put_long_pro');
            $table->string('option_index_buy_call_put_percentage_pro');
            $table->string('option_index_call_short_pro');
            $table->string('option_index_put_short_pro');
            $table->string('option_index_short_call_put_percent_pro');
            $table->string('option_stock_call_long_pro');
            $table->string('option_stock_put_long_pro');
            $table->string('option_stock_call_short_pro');
            $table->string('option_stock_put_short_pro');
            $table->string('total_long_contracts_pro');
            $table->string('total_short_contracts_pro');
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
        Schema::dropIfExists('data_date_wise_pros');
    }
}
