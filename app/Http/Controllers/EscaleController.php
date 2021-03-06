<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Escale;
use App\Navire;
use App\Mouvement;
use Carbon\Carbon;

class EscaleController extends Controller {
	
	protected $rules = [		
		'date_entree' => ['required', 'date', 'date_format:d-m-Y'],		
		'date_sortie' => ['required','date', 'date_format:d-m-Y'],
		'id_navire' => ['required']
	];

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
		$escales = Escale::with('concerns')->get();
		return view('escale.index',compact('escales'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
		$navires = Navire::all();
		return view('escale.create',compact('navires'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
		$this->validate($request, $this->rules);
		$inputs = Input::all();
		$inputs['date_entree'] = Carbon::createFromFormat('d-m-Y H:i', $inputs['date_entree'].'00:00');
		$inputs['date_sortie'] = Carbon::createFromFormat('d-m-Y H:i', $inputs['date_sortie'].'00:00');
		Escale::create($inputs);
 
		return Redirect::route('escale.index')->with('message', 'Escale créée avec succès !');
  }

  /**
   * Display the specified resource.
   *
   * @return Response
   */
  public function show()
  {
		$id = intval(htmlspecialchars($_GET['id']));
		$chargements = Mouvement::all()->where('id_escale',$id)->where('est_chargement',1);
		$dechargements = Mouvement::all()->where('id_escale',$id)->where('est_chargement',0);
		$nb_chargements = $chargements->count();
		$nb_dechargements = $dechargements->count();
		return view('escale.show',compact('chargements','dechargements','nb_chargements','nb_dechargements','id'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
		return Redirect::route('escale.index');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
		return Redirect::route('escale.index');
  }  
}

?>