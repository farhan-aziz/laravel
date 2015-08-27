<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('transactions', function(Blueprint $table)
        {
            $table->decimal('amount');
            $table->string('transaction_id');
            $table->string('payment_type');
            $table->string('payment_processor');
            $table->string('payment_status');
            $table->integer('course_user_id')->unsigned();
            $table->timestamps();

            $table->foreign('course_user_id')
                ->on('course_user')
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
        Schema::drop('transactions');
	}

}
