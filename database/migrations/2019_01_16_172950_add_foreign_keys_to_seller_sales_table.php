<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSellerSalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('seller_sales', function(Blueprint $table)
		{
			$table->foreign('order_id')->references('id')->on('orders')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('seller_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('seller_sales', function(Blueprint $table)
		{
			$table->dropForeign('seller_sales_order_id_foreign');
			$table->dropForeign('seller_sales_seller_id_foreign');
		});
	}

}
