<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Careplan
 * 
 * @property string $c_id
 * @property string $c_name
 * @property string $details
 * @property string $description
 * 
 * @property Collection|Patient[] $patients
 *
 * @package App\Models
 */
class Careplan extends Model
{
	protected $table = 'careplan';
	protected $primaryKey = 'c_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'c_name',
		'details',
		'description'
	];

	public function patients()
	{
		return $this->hasMany(Patient::class, 'c_id');
	}
}
