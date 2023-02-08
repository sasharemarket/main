<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDateWiseFiisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_date_wise_fiis', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('data_date_wise_id');
            $table->string('date_of_entry');
            $table->string('future_index_long');
            $table->string('future_index_short');
            $table->string('long_index_long_short_percent');
            $table->string('future_stock_long');
            $table->string('future_stock_short');
            $table->string('option_index_call_long');
            $table->string('option_index_put_long');
            $table->string('option_index_buy_call_put_percentage');
            $table->string('option_index_call_short');
            $table->string('option_index_put_short');
            $table->string('option_index_short_call_put_percent');
            $table->string('option_stock_call_long');
            $table->string('option_stock_put_long');
            $table->string('option_stock_call_short');
            $table->string('option_stock_put_short');
            $table->string('total_long_contracts');
            $table->string('total_short_contracts');
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
        Schema::dropIfExists('data_date_wise_fiis');
    }
}
