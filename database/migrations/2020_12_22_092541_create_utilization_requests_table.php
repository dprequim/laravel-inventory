<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilizationRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilization_requests', function (Blueprint $table) {
            $table->id();
            $table->string('serial_no');
            $table->string('date');
            $table->string('funcluster');
            $table->string('responsibility_center');
            $table->string('particulars');
            $table->string('mfo');
            $table->string('expenditures');
            $table->string('amount');
            $table->string('refer_date');
            $table->string('refer_partocular');
            $table->string('rtrai_no');
            $table->string('utilization');
            $table->string('payable');
            $table->string('payment');
            $table->string('balance');
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
        Schema::dropIfExists('utilization_requests');
    }
}
