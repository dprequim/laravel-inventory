<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObligationStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obligation_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('serial_no');
            $table->string('date');
            $table->string('fund_cluster');
            $table->string('payee');
            $table->string('office');
            $table->string('address');
            $table->string('responsibility_center');
            $table->string('particulars');
            $table->string('pap');
            $table->string('object_code');
            $table->string('amount');
            $table->string('refer_date');
            $table->string('refer_particulars');
            $table->string('tra_no');
            $table->string('obligation');
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
        Schema::dropIfExists('obligation_statuses');
    }
}
