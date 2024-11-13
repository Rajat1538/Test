<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoinUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('join_us', function (Blueprint $table) {
            $table->id();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->text('title_1')->nullable();
            $table->text('description_1')->nullable();
            $table->text('title_2')->nullable();
            $table->text('description_2')->nullable();
            $table->text('title_3')->nullable();
            $table->text('description_3')->nullable();
            $table->text('title_4')->nullable();
            $table->text('description_4')->nullable();
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
        Schema::dropIfExists('join_us');
    }
}
