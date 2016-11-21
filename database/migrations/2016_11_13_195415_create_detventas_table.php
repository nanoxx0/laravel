<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetventasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detventas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cantidad');
			$table->integer('total');
			$table->integer('ventas_id')->unsigned();
			$table->foreign('ventas_id')->references('id')->on('ventas');
			$table->integer('productos_id')->unsigned();
			$table->foreign('productos_id')->references('id')->on('productos');
			$table->integer('impuestos_id')->unsigned();
			$table->foreign('impuestos_id')->references('id')->on('impuestos');
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
		Schema::drop('detventas');
	}

}
