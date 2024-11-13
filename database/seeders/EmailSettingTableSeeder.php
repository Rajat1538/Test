<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailSettingTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('email_setting')->insert([
			[
				'key' => 'MAIL_DRIVER',
				'value' => 'smtp',
				'title' => 'Mail Driver',
				'description' => null,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'key' => 'MAIL_HOST',
				'value' => 'smtp.gmail.com',
				'title' => 'Mail Host',
				'description' => null,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'key' => 'MAIL_PORT',
				'value' => '587',
				'title' => 'Mail Port',
				'description' => null,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'key' => 'MAIL_USERNAME',
				'value' => '',
				'title' => 'Email',
				'description' => null,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'key' => 'MAIL_PASSWORD',
				'value' => '',
				'title' => 'Password',
				'description' => null,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'key' => 'MAIL_ENCRYPTION',
				'value' => 'tls',
				'title' => 'Mail Encryption',
				'description' => null,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
			[
				'key' => 'MAIL_FROM_NAME',
				'value' => 'PCHPL',
				'title' => 'From Name',
				'description' => null,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
			],
		]);
	}
}