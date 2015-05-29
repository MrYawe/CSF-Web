<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNavireTable extends Migration {

	public function up()
	{
		Schema::create('navire', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom', 30);
			$table->integer('capacite');
		});
	}

	public function down()
	{
		Schema::drop('navire');
	}
}