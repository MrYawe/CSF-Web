<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mouvement extends Model {

	protected $table = 'mouvement';
	public $timestamps = true;
	protected $fillable = ['id','est_chargement', 'id_escale','id_conteneur','date_mouvement'];

}