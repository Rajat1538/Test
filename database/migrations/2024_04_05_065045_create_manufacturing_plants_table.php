<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturingPlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturing_plants', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image')->nullable();
            $table->string('banner_title')->nullable();
            $table->text('banner_description')->nullable();
            $table->string('objective_image')->nullable();
            $table->string('objective_title')->nullable();
            $table->text('objective_description')->nullable();
            $table->text('content_title')->nullable();
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
        Schema::dropIfExists('manufacturing_plants');
    }
}
