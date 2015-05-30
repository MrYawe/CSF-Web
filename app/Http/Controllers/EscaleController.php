<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Input;
use Redirect;
use App\Escale;
use App\Navire;
use Carbon\Carbon;

class EscaleController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
		return Redirect::route('escale.create');
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
  public function store()
  {
		$inputs = Input::all();
		$inputs['date_entree'] = Carbon::createFromFormat('d-m-Y H:i', $inputs['date_entree'].'00:00');
		$inputs['date_sortie'] = Carbon::createFromFormat('d-m-Y H:i', $inputs['date_sortie'].'00:00');
		Escale::create($inputs);
 
		return Redirect::route('escale.create')->with('message', 'Escale créée avec succès !');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
		return Redirect::route('escale.create');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
		return Redirect::route('escale.create');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
		return Redirect::route('escale.create');
  }  
}

?>