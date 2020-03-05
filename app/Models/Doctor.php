<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Doctor
 * 
 * @property string $d_name
 * @property string $gender
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $qualification
 * @property string $d_id
 * @property string $profile_pic
 * 
 * @property Collection|Answer[] $answers
 * @property Collection|Medication[] $medications
 * @property Collection|Patient[] $patients
 * @property Collection|Query[] $queries
 * @property Collection|Report[] $reports
 *
 * @package App\Models
 */
class Doctor extends Model
{
	protected $table = 'doctor';
	protected $primaryKey = 'd_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'd_name',
		'gender',
		'email',
		'password',
		'phone',
		'qualification',
		'profile_pic'
	];

	public function answers()
	{
		return $this->hasMany(Answer::class, 'd_id');
	}

	public function medications()
	{
		return $this->hasMany(Medication::class, 'd_id');
	}

	public function patients()
	{
		return $this->hasMany(Patient::class, 'd_id');
	}

	public function queries()
	{
		return $this->hasMany(Query::class, 'd_id');
	}

	public function reports()
	{
		return $this->hasMany(Report::class, 'd_id');
	}
}
