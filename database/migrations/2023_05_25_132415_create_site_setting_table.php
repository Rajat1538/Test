<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSiteSettingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('site_setting', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('key', 225);
			$table->text('value');
			$table->string('title')->nullable();
			$table->string('description', 555)->nullable();
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
		Schema::drop('site_setting');
	}

}
