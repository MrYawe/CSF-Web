<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navire extends Model {

	protected $table = 'navire';
	protected $fillable = array('nom', 'capacite');

	public $timestamps = true;

	public function escales()
	{
		return $this->hasMany('Escale');
	}

}