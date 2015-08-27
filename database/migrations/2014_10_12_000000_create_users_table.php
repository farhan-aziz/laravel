<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('sur_name');
			$table->string('email')->unique();
			$table->string('password', 60);
            $table->date('dob');
            $table->string('contact_number');
            $table->string('address');
            $table->string('house');
            $table->string('street_number');
            $table->string('city');
            $table->string('county');
            $table->string('postal_code');
            $table->string('country');
            $table->boolean('is_admin');
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
