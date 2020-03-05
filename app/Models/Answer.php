<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Answer
 * 
 * @property int $ans_id
 * @property int $q_id
 * @property string $answer
 * @property string $d_id
 * @property string $p_id
 * 
 * @property Query $query
 * @property Doctor $doctor
 * @property Patient $patient
 *
 * @package App\Models
 */
class Answer extends Model
{
	protected $table = 'answers';
	protected $primaryKey = 'ans_id';
	public $timestamps = false;

	protected $casts = [
		'q_id' => 'int'
	];

	protected $fillable = [
		'q_id',
		'answer',
		'd_id',
		'p_id'
	];

	public function query()
	{
		return $this->belongsTo(Query::class, 'q_id');
	}

	public function doctor()
	{
		return $this->belongsTo(Doctor::class, 'd_id');
	}

	public function patient()
	{
		return $this->belongsTo(Patient::class, 'p_id');
	}
}
