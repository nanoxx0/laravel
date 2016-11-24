<?php namespace Sistema\Http\Controllers;

use Sistema\Http\Requests;
use Sistema\Http\Controllers\Controller;
use Sistema\Http\Requests\ImpuestoCreateRequest;
use Sistema\Http\Requests\ImpuestoUpdateRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Sistema\Impuesto;

class impuestoController extends Controller {

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
		$impuestos = Impuesto::all();				
				return view('impuesto.create',compact('impuestos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ImpuestoCreateRequest $request)
	{
		Impuesto::create([
					'nombre' => $request['nombre'],
					'valor' => $request['valor'],
					]);
				session::flash('message','Impuesto Ingresado Correctamente');
				return redirect::to('/impuesto/create');
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
		$impuesto = Impuesto::find($id);
		return view('impuesto.edit',['impuesto'=>$impuesto]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ImpuestoUpdateRequest $request)
	{
		$impuesto = Impuesto::find($id);
				$impuesto->fill($request->all());
				$impuesto->save();
				session::flash('message','Impuesto Editado Correctamente');
				return redirect::to('/impuesto/create');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Impuesto::destroy($id);				
				session::flash('message','Impuesto Eliminado Correctamente');
				return redirect::to('/impuesto/create');
	}

}
