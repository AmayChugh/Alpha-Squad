<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Symptom
 * 
 * @property int $sy_id
 * @property string $sy_name
 *
 * @package App\Models
 */
class Symptom extends Model
{
	protected $table = 'symptom';
	protected $primaryKey = 'sy_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'sy_id' => 'int'
	];

	protected $fillable = [
		'sy_name'
	];
}
