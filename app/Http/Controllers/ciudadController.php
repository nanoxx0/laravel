<?php namespace Sistema\Http\Controllers;

		use Sistema\Http\Requests;
		use Sistema\Http\Controllers\Controller;
		use Sistema\Http\Requests\CiudadCreateRequest;
		use Sistema\Http\Requests\CiudadUpdateRequest;
		use Illuminate\Support\Facades\Session;
		use Illuminate\Support\Facades\Redirect;
		use Illuminate\Http\Request;
		use Sistema\Region;
		use Sistema\Ciudad;

		class ciudadController extends Controller {

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
				$ciudads = Ciudad::all();
				return view('ciudad.create',compact('ciudads'));
			}

			/**
			 * Store a newly created resource in storage.
			 *
			 * @return Response
			 */
			public function store(CiudadCreateRequest $request)
			{	
				
				Ciudad::create([
					'nombre' => $request['nombre'],
					'regions_id' => $request['regions_id'],
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
				$regions = Region::all();
				$ciudad = Ciudad::find($id);
		return view('ciudad.edit',['ciudad'=>$ciudad],compact('regions'));
			}

			/**
			 * Update the specified resource in storage.
			 *
			 * @param  int  $id
			 * @return Response
			 */
			public function update($id, CiudadUpdateRequest $request)
			{
				$ciudad = Ciudad::find($id);
				$ciudad->fill($request->all());
				$ciudad->save();
				session::flash('message','Ciudad Editada Correctamente');
				return redirect::to('/ciudad/create');
			}

			/**
			 * Remove the specified resource from storage.
			 *
			 * @param  int  $id
			 * @return Response
			 */
			public function destroy($id)
			{
				Ciudad::destroy($id);				
				session::flash('message','Ciudad Eliminada Correctamente');
				return redirect::to('/ciudad/create');
			}

		}
