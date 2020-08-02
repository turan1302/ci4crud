<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BlogSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'blog_title' => 'a',
			'blog_description'    => 'b'
		];

                // Simple Queries
		$this->db->query("INSERT INTO blog (blog_title, blog_description) VALUES(:blog_title:, :blog_description:)",
			$data
		);

                // Using Query Builder
		$this->db->table('blog')->insert($data);
	}
}
