<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('compras', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->string('observacion');
			$table->integer('proveedors_id')->unsigned();
			$table->foreign('proveedors_id')->references('id')->on('proveedors');
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
		Schema::drop('compras');
	}

}
