<?php

namespace App;

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Book extends Eloquent
{
	public $table = 'book';
	public $primaryKey = 'id_book';
}
