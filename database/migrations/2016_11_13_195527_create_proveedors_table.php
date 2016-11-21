<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proveedors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('rut')->unique();
			$table->string('nombre');
			$table->string('email')->unique();	
			$table->string('direccion');
			$table->string('telefono');
			$table->string('giro');
			$table->boolean('estado');
			$table->integer('ciudads_id')->unsigned();
			$table->foreign('ciudads_id')->references('id')->on('ciudads');
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
		Schema::drop('proveedors');
	}

}
