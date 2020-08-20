<?php

namespace App;

use \Illuminate\Database\Eloquent\Model as Eloquent;

class OrderBook extends Eloquent
{
	public $table = 'order_book';
	public $primaryKey = 'id_order_book';
	public $timestamps = false;

}
