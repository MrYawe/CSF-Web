<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('escale', function(Blueprint $table) {
			$table->foreign('id_navire')->references('id')->on('navire')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('mouvement', function(Blueprint $table) {
			$table->foreign('id_escale')->references('id')->on('escale')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('mouvement', function(Blueprint $table) {
			$table->foreign('id_conteneur')->references('id')->on('conteneur')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('escale', function(Blueprint $table) {
			$table->dropForeign('escale_id_navire_foreign');
		});
		Schema::table('mouvement', function(Blueprint $table) {
			$table->dropForeign('mouvement_id_escale_foreign');
		});
		Schema::table('mouvement', function(Blueprint $table) {
			$table->dropForeign('mouvement_id_conteneur_foreign');
		});
	}
}