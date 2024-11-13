<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermsPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms_pages', function (Blueprint $table) {
            $table->id();
            $table->text('title_1')->nullable();
            $table->text('title_1_description')->nullable();
            $table->text('title_2')->nullable();
            $table->text('title_2_description')->nullable();
            $table->text('terms_file_title')->nullable();
            $table->string('terms_file_name')->nullable();
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
        Schema::dropIfExists('terms_pages');
    }
}
