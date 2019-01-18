<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->integer('buyer_id')->unsigned()->index('orders_buyer_id_foreign');
            $table->integer('shipping_status')->default(0);
            $table->string('number_tracking')->nullable();
            $table->string('shipping_provider')->nullable();
            $table->string('shipping_address');
            $table->string('shipping_city');
            $table->string('shipping_zipcode', 50);
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
