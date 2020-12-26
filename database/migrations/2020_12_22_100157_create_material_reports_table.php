<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_reports', function (Blueprint $table) {
            $table->id();
            $table->string('fund_cluster');
            $table->string('storage_place');
            $table->string('date');
            $table->string('items');
            $table->string('quantity');
            $table->string('unit');
            $table->string('description');
            $table->string('receipt_no');
            $table->string('receipt_date');
            $table->string('receipt_amount');
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
        Schema::dropIfExists('material_reports');
    }
}
