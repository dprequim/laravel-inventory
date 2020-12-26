<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsAndAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids_and_awards', function (Blueprint $table) {
            $table->id();
            $table->string('item_no');
            $table->string('quantity');
            $table->string('unit');
            $table->string('parriculars');
            $table->string('budget_cost');
            $table->string('remarks');
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
        Schema::dropIfExists('bids_and_awards');
    }
}
