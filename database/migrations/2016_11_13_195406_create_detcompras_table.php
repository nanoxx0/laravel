<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetcomprasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detcompras', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cantidad');
			$table->integer('total');
			$table->integer('compras_id')->unsigned();
			$table->foreign('compras_id')->references('id')->on('compras');
			$table->integer('productos_id')->unsigned();
			$table->foreign('productos_id')->references('id')->on('productos');
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
		Schema::drop('detcompras');
	}

}
