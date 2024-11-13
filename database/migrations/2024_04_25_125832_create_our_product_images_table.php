<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_product_images', function (Blueprint $table) {
            $table->id();
            $table->string('product_label')->nullable();
            $table->string('image')->nullable();
            $table->string('product_title')->nullable();
            $table->string('packing_type')->nullable();
            $table->string('packing_size')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 = InActive, 1 = Active');
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
        Schema::dropIfExists('our_product_images');
    }
}
