<?php namespace App\Http\Controllers;

use App\User;
use App\Conteneur;
use App\Http\Requests;
use Illuminate\Http\Request;
use Input, Redirect;

class ConteneurController extends Controller {

	protected $rules = [		
		'id_user' => ['required'],		
		'taille' => ['required','numeric','between:1,2']
	];
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
		return view('conteneur'); 
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $clients = User::where('id_type', '1')->get();
    return view('conteneur.create', compact('clients'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
		$this->validate($request, $this->rules);
	$input = Input::all();
    Conteneur::create( $input );
   
    return Redirect::route('conteneur.create')->with('message', 'Conteneur crée !');
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