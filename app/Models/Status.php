<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Status
 * 
 * @property string $s_id
 * @property string $s_name
 * 
 * @property Collection|Patient[] $patients
 *
 * @package App\Models
 */
class Status extends Model
{
	protected $table = 'status';
	protected $primaryKey = 's_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		's_name'
	];

	public function patients()
	{
		return $this->hasMany(Patient::class, 's_id');
	}
}
