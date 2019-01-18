<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('rate');
			$table->string('review', 512);
			$table->integer('product_id')->unsigned();
			$table->integer('user_id')->unsigned()->index('rates_user_id_foreign');
            $table->unique(['product_id','user_id'], 'user_products');
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
		Schema::drop('rates');
	}

}
