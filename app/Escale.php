<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escale extends Model {

	protected $table = 'escale';
	public $timestamps = true;
	protected $fillable = ['id','date_entree', 'date_sortie','id_navire'];

	public function concerns()
	{
		return $this->belongsTo('App\Navire');
	}

	public function mouvements()
	{
		return $this->hasMany('App\Mouvement');
	}

}