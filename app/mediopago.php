<?php namespace Sistema;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class mediopago extends Model  {

	use  SoftDeletes;

	protected $table = "mediopagos";

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre', 'plazo'];
	protected $dates =['deleted_at'];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['remember_token'];

	public function ciudads(){
		return $this->hasMany('Sistema\ciudad');
	}


}
