<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('codigo');
			$table->integer('codigobarras');
			$table->string('nombre');
			$table->string('descripcion');
			$table->integer('stock');
			$table->string('unidad');
			$table->integer('precioneto');
			$table->boolean('estado');
			$table->integer('descuento');
			$table->integer('categorias_id')->unsigned();
			$table->foreign('categorias_id')->references('id')->on('categorias');
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
		Schema::drop('productos');
	}

}
