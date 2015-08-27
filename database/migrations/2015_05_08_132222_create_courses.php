<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourses extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('category_id')->unsigned()->index();
            $table->string('title');
            $table->text('description');
            $table->string('qualification_type');
            $table->integer('hours');
            $table->integer('credit_value');
            $table->string('validity');
            $table->text('unit_combinations');
            $table->string('suitable_for');
            $table->decimal('market_price');
            $table->decimal('eln_price');
            $table->text('assessments');
			$table->timestamps();

            $table->foreign('category_id')
                ->on('categories')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');

		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courses');
	}

}
