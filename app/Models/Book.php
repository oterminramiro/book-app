<?php

namespace App\Models;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	use CrudTrait;

	protected $table = 'book';
	protected $primaryKey = 'id_book';
	protected $guarded = ['id_book'];
	protected $fillable = ['id_book_type','id_editorial','name','description','image','filename_print','filename_download'];

	public function setImageAttribute($value)
	{
		$attribute_name = "image";
		$disk = "public";
		$destination_path = "uploads/books";

		$this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);

		#return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
	}

	public function BookType()
	{
		return $this->belongsTo('App\Models\Booktype','id_book_type','id_book_type');
	}

	public function Editorial()
	{
		return $this->belongsTo('App\Models\Editorial','id_editorial','id_editorial');
	}
}
