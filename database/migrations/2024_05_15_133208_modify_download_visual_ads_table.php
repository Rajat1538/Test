<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyDownloadVisualAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dowload_visual_ads', function (Blueprint $table) {
            // Drop columns 'pdf' and 'status'
            $table->dropColumn(['pdf', 'status']);

            // Add new columns
            $table->string('email')->nullable()->after('category');
            $table->string('name')->nullable()->after('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dowload_visual_ads', function (Blueprint $table) {
            // Recreate the dropped columns
            $table->string('pdf')->nullable();
            $table->string('status')->nullable();

            // Drop the newly added columns
            $table->dropColumn(['email', 'name']);
        });
    }
}
