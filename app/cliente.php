<?php namespace Sistema;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cliente extends Model {

	use SoftDeletes;

	protected $table = "clientes";

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['rut', 'nombre','email','direccion','telefono','giro','estado','ciudads_id'];
	protected $dates =['deleted_at'];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['remember_token'];

	

		public function ciudad(){
		return $this->belongsTo('Sistema\ciudad','ciudads_id','id');
			}
}
