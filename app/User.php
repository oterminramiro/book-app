<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
	use Notifiable;

	protected $primaryKey = 'id_user';

	protected $fillable = ['id_role', 'guid', 'name', 'email', 'password',];

	protected $hidden = ['password', 'remember_token',];

	protected $casts = ['email_verified_at' => 'datetime',];

	public function Role()
	{
		return $this->belongsTo('App\Role','id_role','id_role');
	}
}
