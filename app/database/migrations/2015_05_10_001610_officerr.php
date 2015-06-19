<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Officerr extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('officer', function(Blueprint $table)
		{
            $table->increments('id');
			$table->string('nama');
			$table->string('password');
            $table->string('telp');
            $table->string('alamat');
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
		Schema::drop("officer");
	}

}
