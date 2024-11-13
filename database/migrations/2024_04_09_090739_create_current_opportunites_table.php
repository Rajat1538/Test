<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentOpportunitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_opportunites', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 = Inactive, 1 = Active');
            $table->softDeletes();
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
        Schema::dropIfExists('current_opportunites');
    }
}
