<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateManufacturingPlantListsTable extends Migration
{
    public function up()
    {
        Schema::create('manufacturing_plant_lists', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 = Inactive, 1 = Active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manufacturing_plant_lists');
    }
}
