<?php namespace Sistema\Http\Requests;

use Sistema\Http\Requests\Request;

class ClienteCreateRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'rut' => 'required|unique:clientes|string',
			'nombre' => 'required|string',
			'direccion' => 'required',
			'ciudads_id' => 'required|numeric',
			'giro' => 'required',
			
		];
	}

}
