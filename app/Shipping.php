<?php

namespace App;

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Shipping extends Eloquent
{
	public $table = 'shipping';
	public $primaryKey = 'id_shipping';
	public $timestamps = false;
}
