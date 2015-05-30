<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mouvement;
use App\Escale;
use App\Conteneur;
use Input;
use Redirect;
use Carbon\Carbon;

class MouvementController extends Controller {
	
	protected $rules = [		
		'date_mouvement' => ['required', 'date','date_format:d-m-Y'],		
		'id_escale' => ['required'],
		'id_conteneur' => ['required'],
		'est_chargement' => ['required']
	];

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
		$escales = Escale::All();
		$conteneurs = Conteneur::All();
		return view('mouvement/create',compact('escales','conteneurs'));
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
		$inputs['date_mouvement'] = Carbon::createFromFormat('d-m-Y H:i', $inputs['date_mouvement'].'00:00');
		Mouvement::create($inputs);
 
		return Redirect::route('mouvement.create')->with('message', 'Mouvement créé avec succès !');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>