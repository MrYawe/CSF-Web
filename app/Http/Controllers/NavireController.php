<?php namespace App\Http\Controllers;

use App\Navire;
use App\Http\Requests;
use Input, Redirect;

class NavireController extends Controller {

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
    return view('navire.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    $input = Input::all();
    Navire::create( $input );
   
    return Redirect::route('navire.create')->with('message', 'Navire crée !');
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