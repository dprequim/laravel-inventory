<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryChecklistOnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_checklist_ones', function (Blueprint $table) {
            $table->id();
            $table->string('item');
            $table->string('property_no');
            $table->string('ics_no');
            $table->string('date_acquired');
            $table->decimal('amount', 10, 2);
            $table->string('property_owner');
            $table->string('transfer_to');
            $table->string('status');
            $table->string('location');
            $table->string('remarks');
            $table->string('date_checked');
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
        Schema::dropIfExists('inventory_checklist_ones');
    }
}
