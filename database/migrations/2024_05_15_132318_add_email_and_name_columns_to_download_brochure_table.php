<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailAndNameColumnsToDownloadBrochureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dowload_brochure', function (Blueprint $table) {
            $table->dropColumn(['pdf', 'status']); // Drop the index if needed

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
        Schema::table('dowload_brochure', function (Blueprint $table) {
            $table->dropColumn(['email', 'name']);
            // If you dropped an index in the up() method, you might want to recreate it here
        });
    }
}
