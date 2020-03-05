<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Admin
 * 
 * @property string $a_id
 * @property string $a_name
 * @property string $gender
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $profile_pic
 *
 * @package App\Models
 */
class Admin extends Model
{
	protected $table = 'admin';
	protected $primaryKey = 'a_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'a_name',
		'gender',
		'email',
		'password',
		'phone',
		'profile_pic'
	];
}
