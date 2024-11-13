<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcdPharmaAdvantagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcd_pharma_advantages', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('pcd_pharma_advantages');
    }
}
