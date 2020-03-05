<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Query
 * 
 * @property int $q_id
 * @property string $query
 * @property int $status
 * @property string $d_id
 * @property string $p_id
 * 
 * @property Doctor $doctor
 * @property Patient $patient
 * @property Collection|Answer[] $answers
 *
 * @package App\Models
 */
class Query extends Model
{
	protected $table = 'queries';
	protected $primaryKey = 'q_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'q_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'query',
		'status',
		'd_id',
		'p_id'
	];

	public function doctor()
	{
		return $this->belongsTo(Doctor::class, 'd_id');
	}

	public function patient()
	{
		return $this->belongsTo(Patient::class, 'p_id');
	}

	public function answers()
	{
		return $this->hasMany(Answer::class, 'q_id');
	}
}
