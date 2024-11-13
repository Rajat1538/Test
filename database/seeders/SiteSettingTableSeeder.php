<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\SiteSetting;

class SiteSettingTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('site_setting')->insert([
			[
				'key' => 'site_name',
				'value' => 'PCPHL',
				'title' => 'Site Name',
				'description' => null,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
		]);

	}
}
