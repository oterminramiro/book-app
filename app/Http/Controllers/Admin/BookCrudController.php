<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BookRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Str;

class BookCrudController extends CrudController
{
	use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
	#use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
	use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
	use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
	use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
	use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }

	public function setup()
	{
		CRUD::setModel(\App\Models\Book::class);
		CRUD::setRoute(config('backpack.base.route_prefix') . '/book');
		CRUD::setEntityNameStrings('book', 'books');
	}

	protected function setupListOperation()
	{
		CRUD::addColumns(['name']);
		CRUD::addColumn([   // relationship
			'type' => "relationship",
			'name' => 'BookType', // the method on your model that defines the relationship
			'label' => "Book Type",
			'model' => "App\Models\Booktype", // foreign key Eloquent model
		]);
		CRUD::addColumn([   // relationship
			'type' => "relationship",
			'name' => 'Editorial', // the method on your model that defines the relationship
			'label' => "Editorial",
			'model' => "App\Models\Editorial", // foreign key Eloquent model
		]);
		CRUD::addColumns(['description', 'filename_print', 'filename_download', 'created_at']);
	}

	protected function setupCreateOperation()
	{
		CRUD::setValidation(BookRequest::class);

		CRUD::field('name')->type('text');
		CRUD::field('description')->type('text');
		CRUD::addField([  // Select2
			'label'     => "Book Type",
			'type'      => 'select2',
			'name'      => 'id_book_type', // the db column for the foreign key
			'entity'    => 'BookType', // the method that defines the relationship in your Model
			'attribute' => 'name', // foreign key attribute that is shown to user
		]);
		CRUD::addField([  // Select2
			'label'     => "Editorial",
			'type'      => 'select2',
			'name'      => 'id_editorial', // the db column for the foreign key
			'entity'    => 'Editorial', // the method that defines the relationship in your Model
			'attribute' => 'name', // foreign key attribute that is shown to user
		]);
		CRUD::addField(['name' => 'filename_print',
			'label' => 'Print PDF',
			'type' => 'upload',
			'upload' => true,
		]);
		CRUD::addField(['name' => 'filename_download',
			'label' => 'Download PDF',
			'type' => 'upload',
			'upload' => true,
		]);
		CRUD::addField(['name' => 'image',
			'label' => 'Image',
			'type' => 'upload',
			'upload' => true,
		]);
		CRUD::addField([
			'name'  => 'guid',
			'type'  => 'hidden',
			'label' => 'guid',
			'default' => Str::uuid()->toString(),
		]);

	}

	protected function setupUpdateOperation()
	{
		$this->setupCreateOperation();
	}

}
