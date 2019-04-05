<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('CityName');
            $table->integer('PinCode');
            $table->integer('DistId');
            $table->string('Createdby');
            $table->timestamp('created_at')->nullable();
            $table->string('Modifiedby')->nullable();
            $table->timestamp('Updated_at')->nullable();
            $table->string('Status');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
