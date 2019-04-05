<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesigntionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designtions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('Designation_name');
            $table->String('Code');
            $table->text('Remarks');
            $table->String('Created_by');
            $table->String('Updated_by');
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
        Schema::dropIfExists('designtions');
    }
}
