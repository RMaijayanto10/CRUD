 <?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Userr extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('users', function(Blueprint $table)
		{
            $table->increments('id');
			$table->string('nama');
			$table->string('password');
            $table->string('noplat');
            $table->string('alamat');
            $table->string('nosim');
            $table->string('jenissim');
            $table->string('telp');
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
		Schema::drop("users");
	}

}
