<?php namespace Sistema\Http\Controllers;

use Sistema\Http\Requests;
use Sistema\Http\Requests\RegionCreateRequest;
use Sistema\Http\Requests\RegionUpdateRequest;
use Sistema\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class regionController extends Controller {

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
		
		$regions = \Sistema\Region::all();
		return view('region.create',compact('regions'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(RegionCreateRequest $request)
	{	
		
		\Sistema\Region::create([
			'nombre' => $request['nombre'],
			'numero' => $request['numero'],
			]);
		session::flash('message','Región Ingresada Correctamente');
		return redirect::to('/region/create');

		
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
		$region = \Sistema\Region::find($id);
		return view('region.edit',['region'=>$region]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, RegionUpdateRequest $request)
	{
		$region = \Sistema\Region::find($id);
		$region->fill($request->all());
		$region->save();
		session::flash('message','Región Editada Correctamente');
		return redirect::to('/region/create');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$region = \Sistema\Region::find($id);
		$region->delete();
		session::flash('message','Región Eliminada Correctamente');
		return redirect::to('/region/create');
	}

}
