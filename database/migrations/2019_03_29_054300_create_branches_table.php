<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('head_office');
            $table->String('Branch_Name');
            $table->string('Start_Date');
            $table->integer('Age');
            $table->string('Branch_Code');
            $table->string('State');
            $table->string('District');
            $table->string('City');
            $table->string('Pincode');
            $table->integer('branch_wise_penalty');
            $table->string('Bonus');
            $table->string('Email_id');
            $table->string('Phone_no');
            $table->text('Address');
            $table->integer('prize_subscriber_penalty');
            $table->integer('non_prize_subscriber_penalty');
            $table->integer('Bonus_days');
            $table->integer('penalty_days');
            $table->string('Busin_agent_target');
            $table->string('br_fd_total_months');
            $table->string('remarks');
            $table->string('agent_incentive_percent');
            $table->string('agent_commis_percent');
            $table->string('Created_by');
            $table->string('Updated_by');
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
        Schema::dropIfExists('branches');
    }
}
