<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
	use CrudTrait;

	protected $table = 'editorial';
	protected $primaryKey = 'id_editorial';
	public $timestamps = false;
	protected $guarded = ['id'];

	public function Book()
	{
		return $this->hasMany('App\Models\Book', 'id_editorial', 'id_editorial');
	}
}
