<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificationOfExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certification_of_expenses', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name');
            $table->string('employee_no');
            $table->string('office');
            $table->string('division');
            $table->string('date');
            $table->string('unit_amount');
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
        Schema::dropIfExists('certification_of_expenses');
    }
}
