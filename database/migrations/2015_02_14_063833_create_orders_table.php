<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('salutation');
			$table->string('firstName');
			$table->string('lastName');
			$table->string('email');
			$table->string('phone');
			$table->string('city');
			$table->string('householdCount');
			$table->string('comments');
			$table->string('payment-method')->nullable();
			$table->string('terms-of-service')->nullable();
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
		Schema::drop('orders');
	}

}
