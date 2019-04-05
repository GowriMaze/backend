<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('Branch');
            $table->String('Collection_area');
            $table->String('Area_pincode');
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
        Schema::dropIfExists('collection_areas');
    }
}
