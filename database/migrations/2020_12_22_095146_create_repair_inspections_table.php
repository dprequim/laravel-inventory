<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_inspections', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('engine_no');
            $table->string('acq_date');
            $table->string('lastrepair_date');
            $table->string('brand_name');
            $table->string('property_no');
            $table->string('acq_cost');
            $table->string('last_repair');
            $table->string('defects_complain');
            $table->string('worktobedone');
            $table->string('supplied_replaced');
            $table->string('findings');
            $table->string('pre_inspected');
            $table->string('post_repair');
            $table->string('repair_shop');
            $table->string('joborder_no');
            $table->string('joborder_date');
            $table->string('invoice_no');
            $table->string('po_no');
            $table->string('po_date');
            $table->string('amountjob_order');
            $table->string('payable_amount');
            $table->string('postrepair_finding');
            $table->string('inspected_by');
            $table->string('postrepair_date');
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
        Schema::dropIfExists('repair_inspections');
    }
}
