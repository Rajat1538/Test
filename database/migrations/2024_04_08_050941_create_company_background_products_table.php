<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyBackgroundProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_background_products', function (Blueprint $table) {
            $table->id();
            $table->text('company_background_description')->nullable();
            $table->string('company_background_button_title')->nullable();
            $table->string('company_background_button_link')->nullable();
            $table->string('company_background_image')->nullable();
            $table->text('products_description')->nullable();
            $table->string('products_button_title')->nullable();
            $table->string('products_button_link')->nullable();
            $table->text('products_id')->nullable();
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
        Schema::dropIfExists('company_background_products');
    }
}
