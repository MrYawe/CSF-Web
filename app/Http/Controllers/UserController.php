<?php namespace App\Http\Controllers;

use App\User;
use Auth;
use Redirect;

class UserController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| User Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
	}

	public function profil($n)
	{
		$idTypeAuth = Auth::user()->id_type;
		if(($idTypeAuth==1 || $idTypeAuth==2) && Auth::user()->id!=$n) {
			return Redirect::to('home')->with('message', 'Vous n\'avez pas le droit');
		}

		$user = User::find($n);
		return view('auth.profil', compact('user'));
	}

}