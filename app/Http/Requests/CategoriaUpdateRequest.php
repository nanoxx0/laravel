<?php namespace Sistema\Http\Requests;

use Sistema\Http\Requests\Request;

class CategoriaUpdateRequest extends Request {

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
			'nombre' => 'required|unique:mediopagos|string',
			'descripcion' => 'required',
		];
	}

}
