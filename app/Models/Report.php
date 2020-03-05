<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Report
 * 
 * @property int $rep_id
 * @property Carbon $timestmp
 * @property string $report
 * @property string $d_id
 * @property string $p_id
 * 
 * @property Doctor $doctor
 * @property Patient $patient
 *
 * @package App\Models
 */
class Report extends Model
{
	protected $table = 'reports';
	protected $primaryKey = 'rep_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'rep_id' => 'int'
	];

	protected $dates = [
		'timestmp'
	];

	protected $fillable = [
		'timestmp',
		'report',
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
