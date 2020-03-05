<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Medication
 * 
 * @property string $m_id
 * @property string $m_name
 * @property string $dosage
 * @property Carbon $timestmp
 * @property string $comment
 * @property string $d_id
 * @property string $p_id
 * 
 * @property Doctor $doctor
 * @property Patient $patient
 *
 * @package App\Models
 */
class Medication extends Model
{
	protected $table = 'medication';
	protected $primaryKey = 'm_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'timestmp'
	];

	protected $fillable = [
		'm_name',
		'dosage',
		'timestmp',
		'comment',
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
}
