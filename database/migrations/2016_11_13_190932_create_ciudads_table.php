<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ciudads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->integer('regions_id')->unsigned();
			$table->foreign('regions_id')->references('id')->on('regions');
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
		Schema::drop('ciudads');
	}

}
