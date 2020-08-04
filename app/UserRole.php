<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class UserRole extends Eloquent
{
	public $table = 'role';
	public $primaryKey = 'id_role';
	public $timestamps = false;

	const ADMIN = 1;
	const OPERATOR = 2;
	const CUSTOMER = 3;
}
