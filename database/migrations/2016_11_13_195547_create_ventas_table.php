<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ventas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->date('fechavencimiento');
			$table->integer('estado');
			$table->integer('clientes_id')->unsigned();
			$table->foreign('clientes_id')->references('id')->on('clientes');
			$table->integer('mediopagos_id')->unsigned();
			$table->foreign('mediopagos_id')->references('id')->on('mediopagos');
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
		Schema::drop('ventas');
	}

}
