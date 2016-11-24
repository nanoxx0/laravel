<?php namespace Sistema\Http\Controllers;

use Sistema\Http\Requests;
use Sistema\Http\Requests\MediopagoCreateRequest;
use Sistema\Http\Requests\MediopagoUpdateRequest;
use Sistema\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use Sistema\Mediopago;

class mediopagoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$mediopagos = Mediopago::all();
		return view('mediopago.create',compact('mediopagos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(MediopagoCreateRequest $request)
	{
		Mediopago::create([
			'nombre' => $request['nombre'],
			'plazo' => $request['plazo'],
			]);
		session::flash('message','Medio de Pago Ingresado Correctamente');
		return redirect::to('/mediopago/create');

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
		$mediopago = Mediopago::find($id);
		return view('mediopago.edit',['mediopago'=>$mediopago]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, MediopagoUpdateRequest $request)
	{
		$mediopago = Mediopago::find($id);
		$mediopago->fill($request->all());
		$mediopago->save();
		session::flash('message','Medio de Pago Editado Correctamente');
		return redirect::to('/mediopago/create');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Mediopago::destroy($id);				
				session::flash('message','Medio de Pago Eliminado Correctamente');
				return redirect::to('/mediopago/create');
	}

}
