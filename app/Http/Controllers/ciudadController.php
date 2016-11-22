<?php namespace Sistema\Http\Controllers;

use Sistema\Http\Requests;
use Sistema\Http\Controllers\Controller;
use Sistema\Http\Requests\CiudadCreateRequest;
use Sistema\Http\Requests\CiudadUpdateRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ciudadController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}

	public function listarCiudad()
	{
		$result = \DB::table('ciudads')
		->select('ciudads.nombre','regions.nombre as nombre_region')
		->from('ciudads')
		->join('regions','ciudads.regions_id','=','regions.id')
		->get();
		
		return $result;
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()

	{	
		$result = 1;
		$regions = \Sistema\Region::all();
		$ciudads = \Sistema\Ciudad::all();
		return view('ciudad.create',compact('ciudads'),compact('regions'),$result);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CiudadCreateRequest $request)
	{	
		
		\Sistema\Ciudad::create([
			'nombre' => $request['nombre'],
			'regions_id' => $request['numero_region'],
			]);
		session::flash('message','Ciudad Ingresada Correctamente');
		return redirect::to('/ciudad/create');

		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
