<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer', function (Blueprint $table) {
          $table->increments('id')->unsigned();
          $table->string('name', 150);
          $table->integer('code')->unique();
          $table->integer('phone')->unique();
          $table->string('address', 150);
          
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
		Schema::drop('customer');
	}

}
