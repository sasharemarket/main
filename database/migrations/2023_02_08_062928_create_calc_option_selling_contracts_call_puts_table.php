<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalcOptionSellingContractsCallPutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calc_option_selling_contracts_call_puts', function (Blueprint $table) {
            $table->id();
            $table->string('date_of_entry');
            $table->string('client_call');
            $table->string('dii_call');
            $table->string('fii_call');
            $table->string('pro_call');

            $table->string('client_put');
            $table->string('dii_put');
            $table->string('fii_put');
            $table->string('pro_put');
            
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
        Schema::dropIfExists('calc_option_selling_contracts_call_puts');
    }
}
