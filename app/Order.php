<?php

namespace App;

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Order extends Eloquent
{
	public $table = 'order';
	public $primaryKey = 'id_order';
	public $timestamps = false;

	public function OrderBook()
	{
		return $this->hasMany('App\OrderBook', 'id_order', 'id_order');
	}
}
