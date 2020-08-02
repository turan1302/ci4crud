<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestSeeder extends Seeder
{
	public function run()
	{
		$seeder = \Config\Database::seeder();

		
		$this->call("BlogSeeder");
	}
}
