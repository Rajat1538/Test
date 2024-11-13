<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDivisionIdToOurProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('our_product_images', function (Blueprint $table) {
            if (!Schema::hasColumn('our_product_images', 'division_id')) {
                $table->after('category', function ($table) {
                    $table->unsignedBigInteger('division_id')->nullable();
                });
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('our_product_images', function (Blueprint $table) {
            if (Schema::hasColumn('our_product_images', 'division_id')) {
                $table->dropColumn('division_id');
            }
        });
    }
}
