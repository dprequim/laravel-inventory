<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisbursementVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disbursement_vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('fund_cluster');
            $table->string('employee_no');
            $table->string('bur_no');
            $table->string('address');
            $table->string('date');
            $table->string('particular');
            $table->string('responsibility_center');
            $table->string('mfo');
            $table->string('amount');
            $table->string('account_tittle');
            $table->string('uacs_code');
            $table->string('debit');
            $table->string('credit');
            $table->string('cash_available');
            $table->string('authority_debt');
            $table->string('support_document');
            $table->string('approved_payment');
            $table->string('check_no');
            $table->string('check_date');
            $table->string('accaount_no');
            $table->string('signature');
            $table->string('printed_name');
            $table->string('jev_no');
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
        Schema::dropIfExists('disbursement_vouchers');
    }
}
