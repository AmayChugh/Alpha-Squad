<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Patient
 * 
 * @property string $p_id
 * @property string $p_name
 * @property string $gender
 * @property Carbon $dob
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $address
 * @property Carbon $dos
 * @property string $sy_ids
 * @property string $s_id
 * @property string $d_id
 * @property string $c_id
 * @property string $profile_pic
 * 
 * @property Doctor $doctor
 * @property Status $status
 * @property Careplan $careplan
 * @property Collection|Answer[] $answers
 * @property Collection|Medication[] $medications
 * @property Collection|Query[] $queries
 * @property Collection|Report[] $reports
 *
 * @package App\Models
 */
class Patient extends Model
{
	protected $table = 'patient';
	protected $primaryKey = 'p_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'dob',
		'dos'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'p_name',
		'gender',
		'dob',
		'email',
		'password',
		'phone',
		'address',
		'dos',
		'sy_ids',
		's_id',
		'd_id',
		'c_id',
		'profile_pic'
	];

	public function doctor()
	{
		return $this->belongsTo(Doctor::class, 'd_id');
	}

	public function status()
	{
		return $this->belongsTo(Status::class, 's_id');
	}

	public function careplan()
	{
		return $this->belongsTo(Careplan::class, 'c_id');
	}

	public function answers()
	{
		return $this->hasMany(Answer::class, 'p_id');
	}

	public function medications()
	{
		return $this->hasMany(Medication::class, 'p_id');
	}

	public function queries()
	{
		return $this->hasMany(Query::class, 'p_id');
	}

	public function reports()
	{
		return $this->hasMany(Report::class, 'p_id');
	}
}
