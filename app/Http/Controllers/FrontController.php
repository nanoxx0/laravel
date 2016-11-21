<?php namespace Sistema\Http\Controllers;

use Sistema\Http\Requests;
use Sistema\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		return view('index');
	}
	
	public function ingresarRegion()
	{
		return view('re');
	}

	public function reviews()
	{
		return view('reviews');
	}
}
