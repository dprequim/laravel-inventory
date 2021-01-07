<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasedOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchased_orders', function (Blueprint $table) {
            $table->id();
            $table->string('supplier');
            $table->string('address');
            $table->string('tin');
            $table->string('procurement');
            $table->string('gentlemen');
            $table->string('place_delivery');
            $table->string('date_delivery');
            $table->string('delivery_term');
            $table->string('payment_term');
            $table->string('po_no');
            $table->string('date');
            $table->string('property_no');
            $table->string('unit');
            $table->string('description');
            $table->string('quantity');
            $table->string('unit_cost');
            $table->string('amount');
            $table->string('fund_cluster');
            $table->string('funds_available');
            $table->string('burs_no');
            $table->string('date_burs');
            $table->string('ors_amount');
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
        Schema::dropIfExists('purchased_orders');
    }
}
