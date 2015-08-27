<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('CategorySeeder');
        $this->command->info('Categories seeds finished.');

		$this->call('CourseSeeder');
        $this->command->info('Courses seeds finished.');
	}

}
