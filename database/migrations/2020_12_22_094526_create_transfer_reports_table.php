<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_reports', function (Blueprint $table) {
            $table->id();
            $table->string('fund_cluster');
            $table->string('from_officer');
            $table->string('to_officer');
            $table->string('date_accquired');
            $table->string('transfer_type');
            $table->string('acquired_date');
            $table->string('property_no');
            $table->string('description');
            $table->string('amount');
            $table->string('ppe_condition');
            $table->string('transfer_reason');
            $table->string('signature');
            $table->string('printed_name');
            $table->string('designation');
            $table->string('date');
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
        Schema::dropIfExists('transfer_reports');
    }
}
