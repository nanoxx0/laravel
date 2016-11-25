<?php namespace Sistema\Http\Controllers;

use Sistema\Http\Requests;
use Sistema\Http\Controllers\Controller;
use Sistema\Http\Requests\ClienteCreateRequest;
use Sistema\Http\Requests\ClienteUpdateRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Sistema\Region;
use Sistema\Ciudad;
use Sistema\Cliente;

class clienteController extends Controller {

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
		$clientes = Cliente::all();	
		$ciudads = Ciudad::all();
		return view('cliente.create',compact('clientes'),compact('ciudads'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ClienteCreateRequest $request)
	{
		Cliente::create([
					'rut' => $request['rut'],
					'nombre' => $request['nombre'],
					'email' => $request['email'],
					'direccion' => $request['direccion'],
					'ciudads_id' => $request['ciudads_id'],
					'telefono' => $request['telefono'],
					'giro' => $request['giro'],
					'estado' => $request['estado'],
					]);
				session::flash('message','Cliente Ingresado Correctamente');
				return redirect::to('/cliente/create');
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
