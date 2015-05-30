<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEscaleTable extends Migration {

	public function up()
	{
		Schema::create('escale', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->datetime('date_entree');
			$table->datetime('date_sortie');
			$table->integer('id_navire')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('escale');
	}
}