<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_customer', function (Blueprint $table) {
       		$table->integer('product_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->float('paied');
          	$table->float('rental');
          	$table->string('delivery', 150);

            $table->foreign('product_id')
                  ->references('id')->on('product')
                  ->onDelete('cascade')
                  ->onupdate('cascade');

            $table->foreign('customer_id')
                  ->references('id')->on('customer')
                  ->onDelete('cascade')
                  ->onupdate('cascade');

                 
                 
            $table->primary(['product_id', 'customer_id','paied','delivery']);
    	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
