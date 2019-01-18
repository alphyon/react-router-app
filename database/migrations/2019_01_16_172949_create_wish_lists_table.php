<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWishListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wish_lists', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('buyer_id')->unsigned()->index('wish_lists_buyer_id_foreign');
			$table->integer('product_id')->unsigned();
			$table->timestamps();
			$table->unique(['product_id','buyer_id'], 'product_buyer');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wish_lists');
	}

}
