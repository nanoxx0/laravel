<?php namespace Sistema\Http\Controllers;

use Sistema\Http\Requests;
use Sistema\Http\Controllers\Controller;
use Sistema\Http\Requests\CategoriaCreateRequest;
use Sistema\Http\Requests\CategoriaUpdateRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Sistema\Categoria;

class categoriaController extends Controller {

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
		$categorias = Categoria::all();				
				return view('categoria.create',compact('categorias'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store( CategoriaCreateRequest $request)
	{
		Categoria::create([
					'nombre' => $request['nombre'],
					'descripcion' => $request['descripcion'],
					]);
				session::flash('message','Categoria Ingresada Correctamente');
				return redirect::to('/categoria/create');
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
		$categoria = Categoria::find($id);
		return view('categoria.edit',['categoria'=>$categoria]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CategoriaUpdateRequest $request)
	{
		$categoria = Categoria::find($id);
				$categoria->fill($request->all());
				$categoria->save();
				session::flash('message','Categoria Editada Correctamente');
				return redirect::to('/categoria/create');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Categoria::destroy($id);				
				session::flash('message','Categoria Eliminada Correctamente');
				return redirect::to('/categoria/create');
	}

}
