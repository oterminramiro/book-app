<?php

namespace App\Models;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Booktype extends Model
{
	use CrudTrait;

	protected $table = 'book_type';
	protected $primaryKey = 'id_book_type';
	public $timestamps = false;
	protected $guarded = ['id'];

	public function Book()
	{
		return $this->hasMany('App\Models\Book', 'id_book_type', 'id_book_type');
	}
}
