<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustodianSlipSuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custodian_slip_supplies', function (Blueprint $table) {
            $table->id();
            $table->string('item_no');
            $table->string('item_desc');
            $table->string('quantity');
            $table->string('unit_amount');
            $table->string('unit_cost');
            $table->string('total_cost');
            $table->string('descprition');
            $table->string('inventory_no');
            $table->string('estimated_life');
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
        Schema::dropIfExists('custodian_slip_supplies');
    }
}
