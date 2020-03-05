<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property string $r_id
 * @property string $r_name
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';
	protected $primaryKey = 'r_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'r_name'
	];
}
